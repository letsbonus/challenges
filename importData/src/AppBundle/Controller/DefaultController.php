<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Type\ImportType;
use AppBundle\Entity\Item;

class DefaultController extends Controller
{
    /**
     *
     * Formulario de importación de datos
     *
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ImportType());
        $form->handleRequest($request);
        if ($form->isValid()) {

            // recorrer el archivo
            $file = $form['file']->getData()->move('upload');

            $fp = fopen($file,'r');

            if (($headers = fgetcsv($fp, 0, "\t")) !== FALSE)
                if ($headers)
                    while (($line = fgetcsv($fp, 0, "\t")) !== FALSE)
                        if ($line)
                            if (sizeof($line)==sizeof($headers))
                                $result[] = array_combine($headers,$line);

            // crear entidades

            foreach ($result as $line) {
                $item = new Item();
                $item->setTitle($line['item title']);
                $item->setDescription($line['item description']);
                $item->setPrice($line['item price']);

                $initDate = new \DateTime($line['item init date']);
                $expiryDate = new \DateTime($line['item expiry date']);

                $item->setInitDate($initDate);
                $item->setExpiryDate($expiryDate);
                $item->setMerchantAddress($line['merchant address']);
                $item->setMerchantName($line['merchant name']);

                $em->persist($item);
            }

            $em->flush();

            return ResponseRedirect('resultados');

        }



        return $this->render('AppBundle::defaultView.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     *
     * Resultado de la importación de datos
     *
     * @param Request $request
     * @return Response|\Symfony\Component\HttpFoundation\Response
     * @Route("/resultados", name="resultados")
     */
    public function resultadosAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $itemsPerMonth = $em->getRepository('AppBundle:Item')->getProductPerMonth();
        $itemsPerMerchant = $em->getRepository('AppBundle:Item')->getProductPerMerchant ();

        return $this->render('AppBundle::resultView.html.twig', array(
            'itemsPerMonth' => $itemsPerMonth,
            'itemsPerMerchant' => $itemsPerMerchant
        ));

    }
}
