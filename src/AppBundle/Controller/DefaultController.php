<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;


/**
* @author hernan
*
*/
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        //create the stmfony form
        $form = $this->createFormBuilder()
            ->add('csvFile', 'file', array('label' => 'File to Submit' , 'attr' => array('accept' => '.csv') ))
            ->getForm()
        ;

        if ($request->isMethod("POST")) {

            //binding form
            $form->bind($request);

            //validanting form
            if ($form->isValid()) { 
                $csvFile = $form->get('csvFile');

                //handle csv and process
                $handle = fopen($csvFile->getData(), 'r');
                while (!feof($handle) ) {
                    $csv[] = fgetcsv($handle, 1024, "\t");
                }

                //shift headers from array
                $header = array_shift($csv);

                //csv products iteration
                foreach ($csv as $object) {
                    $product = new Product();
                    $product->setTitle($object[0]);
                    $product->setDescription($object[1]);
                    $product->setPrice($object[2]);
                    $product->setInitDate(new \DateTime($object[3]));
                    $product->setExpiryDate(new \DateTime($object[3]));
                    $product->setMerchantAddress($object[5]);
                    $product->setMerchantName($object[6]);
                    $product->setStatus(0);

                    //persist in entity manager
                    $em->persist($product);
                }
                
                //flush to database
                $em->flush();

                //getting products per month
                $productsPerMonth = $em->getRepository('AppBundle:Product')->getProductsPerMonth();
                
                //getting products per merchant
                $productsPerMerchant = $em->getRepository('AppBundle:Product')->getProductsPerMerchant();

                return $this->render('AppBundle:Default:form.html.twig', array('form' => $form->createView(), 'productsPerMonth' => $productsPerMonth, 'productsPerMerchant' => $productsPerMerchant));
            }
        }
        return $this->render('AppBundle:Default:form.html.twig', array('form' => $form->createView()));
    }
}
