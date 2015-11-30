<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 30/11/15
 * Time: 20:37
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
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

        $importer = $this->createFormBuilder()
            ->add('file_items', 'file', ['label' => 'Select the file:*'])
            ->add('upload', 'submit', ['label' => 'Send away!'])
            ->getForm();

        return $this->render('item/listing.html.twig', [
            'items' => $items,
            'importer' => $importer->createView()
        ]);
    }
}