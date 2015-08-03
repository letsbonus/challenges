<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;

class ProductController extends Controller
{
    const STATUS_IMPORTED = 'imported';

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Product:index.html.twig');
    }
    
    /**
     * @Route("/import", name="import")
     */
    public function importAction(Request $request){
    
        $em = $this->getDoctrine()->getManager();
        
        /* Get file data*/
        $data = file($request->files->get('importFile'));
        for( $i=1; $i<count($data); $i++){
            /* Get product data*/
            $row = explode("\t", $data[$i]);
            
            /* Normalize data */
            $product = new Product();
            $product->setTitle($row[0]);
            $product->setDescription($row[1]);
            $product->setPrice($row[2]);
            $product->setInitDate(new \DateTime($row[3]));
            $product->setExpiryDate(new \DateTime($row[4]));
            $product->setMerchantAddress($row[5]);
            $product->setMerchantName($row[6]);        
            $product->setStatus(self::STATUS_IMPORTED);
            
            /* Save the product into database */
            $em->persist($product);
            $em->flush();
        }
        
        /* Get totals */
        $totalPerMonth = $em->getRepository('AppBundle:Product')->getTotalPerMonth();
        $totalPerMerchantName = $em->getRepository('AppBundle:Product')->getTotalPerMerchantName();
        
        return $this->render('AppBundle:Product:totals.html.twig', array(
            'totalPerMonth' => $totalPerMonth,
            'totalPerMerchantName' => $totalPerMerchantName,
        ));
    }
}
