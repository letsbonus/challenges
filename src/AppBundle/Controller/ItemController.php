<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 30/11/15
 * Time: 20:37
 */

namespace AppBundle\Controller;

use AppBundle\Form\Type\ImporterFileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    public function listingAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository('AppBundle:Item')
            ->createQueryBuilder('i')
            ->getQuery()
            ->getResult();

        $form = $this->createForm(new ImporterFileType());

        $form->handleRequest($request);

        if ($form->isValid()) {

            $file = $form->get('file')->getData();

            //TODO: process file

            return $this->redirect($this->generateUrl('item_listing'));
        }

        return $this->render('item/listing.html.twig', [
            'items' => $items,
            'importer' => $form->createView()
        ]);
    }
}