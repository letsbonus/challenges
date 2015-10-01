<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use AppBundle\Form\MassProductType;
use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $massiveForm = $this->createFormBuilder(null, array('action' => $this->generateUrl('massimport')))
            ->add('file', 'file')
            ->add('Import!', 'submit')
            ->getForm();

        $form = $this->createForm(new ProductType(), new Product(), array(
            'action' => $this->generateUrl('newproduct'),
        ));

        return $this->render(
            'default/index.html.twig',
            array(
                'massiveForm' => $massiveForm->createView(),
                'form' => $form->createView()
            )
        );
    }

    /**
     * @Route("/new", name="newproduct")
     */
    public function newProductAction(Request $request)
    {
        $form = $this->createForm(new ProductType(), new Product());

        $form->handleRequest($request);

        // I didn't add custom validators...
        if ($form->isValid()) {
            $form = $form->getData();
            $this->saveProduct($form);

            return $this->redirectToRoute('success');
        }

        return $this->render(
            'default/index.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Route("/import", name="massimport")
     */
    public function massImportAction(Request $request)
    {
        $form = $this->createFormBuilder(null, array('action' => $this->generateUrl('massimport')))
            ->add('file', 'file')
            ->getForm();

        if ($request->getMethod() === 'POST') {
            $request = $this->getRequest();
            $form->bind($request);

            // It always gets overwritten
            $form['file']->getData()->move('/tmp', 'example.tmp');

            $lines = explode(PHP_EOL, file_get_contents('/tmp/example.tmp'));

            // since we don't care about first line or last line
            array_shift($lines);
            array_pop($lines);

            foreach ($lines as $line) {
                $data = explode("\t", $line);

                $product = new Product();
                $product->setTitle($data[0]);
                $product->setDescription($this->sanitize($data[1]));
                $product->setPrice($data[2]);

                // I'm not dealing with timezones as I'd need another field for it to work with doctrine and I didn't notice until the end of the exam
                $product->setInitDate(new \DateTime($data[3]));
                $product->setExpiryDate(new \DateTime($data[4]));

                $product->setMerchantAddress($data[5]);
                $product->setMerchantName($this->sanitize($data[6]));

                // I'm currently just enabling all of them
                $product->setStatus(1);

                $this->saveProduct($product);
            }
        }

        return $this->render('default/success.html.twig');
    }

    /**
     * @Route("/success", name="success")
     */
    public function successAction(Request $request)
    {
        $months = array();

        foreach ($this->getActiveProducts() as $product) {
            for ($year = $product['year_start']; $year <= $product['year_end']; ++$year) {
                for ($month = $product['month_start']; $month <= $product['month_end']; ++$month) {
                    $months[$year][$month] = !empty($months[$year][$month]) ? $months[$year][$month] + 1 : 1;
                }
            }
        }

        $merchants = $this->getMerchantProducts();

        return $this->render('default/success.html.twig', array('months' => $months, 'merchants' => $merchants));
    }

    // Could be put in services
    private function sanitize(&$string)
    {
        return trim($string, '""');
    }

    private function saveProduct($product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
    }

    // Could be in a repo
    private function getActiveProducts()
    {
        // raw query as requested, get ranges of months for post calculation
        $sql = "
          SELECT MONTH(a.init_date) month_start, MONTH(a.expiry_date) month_end, YEAR(a.init_date) year_start, YEAR(a.expiry_date) year_end
          FROM product a
          INNER JOIN months_in_year months ON
          MONTH(a.init_date) >= months.months_in_year AND
          MONTH(a.init_date) <= months.months_in_year AND YEAR(NOW()) <= year(a.expiry_date)
          WHERE status = 1;
        ";

        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    private function getMerchantProducts()
    {
        //  a count of product per merchant (nothing about dates so we just group)
        $sql = "SELECT merchant_name name, COUNT(a.id) number FROM product a GROUP BY merchant_name";

        $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
