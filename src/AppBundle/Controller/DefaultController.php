<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Type\FileType;
use AppBundle\Entity\Product;
use DateTime;

class DefaultController extends Controller {

    /**
     * Show the index page with the fileupload
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {

        $form = $this->createForm(new FileType());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $file = $form['file']->getData();
                //read the file line by line...
                $contents = file_get_contents($file->getPathname());            
                $delimiter_line = "\n";                                 // "\n" is the line delimiter..
                $lines = str_getcsv($contents, $delimiter_line);
                array_shift($lines);                                    //delete the header of the file
                
                foreach ($lines as $line) {
                    $product = $this->buildTheProductFromLine($line);
                    $em->persist($product);
                }
                
            $em->flush();
            return $this->redirectToRoute('viewProducts');
        }

        return $this->render('letsbonus/index.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * @Route("/viewProducts", name="viewProducts")
     */
    public function viwProductsAction(){
        
        $em = $this->getDoctrine()->getManager();
        $products_by_month = $em->getRepository('AppBundle:Product')->findAllNumberProductsByMonth();
        $products_by_merchant = $em->getRepository('AppBundle:Product')->findAllProductsByMerchant();
        
        dump($products_by_merchant);
        
        return $this->render('letsbonus/show_results.html.twig', array('products_by_month'    => $products_by_month,
                                                                       'products_by_merchant' => $products_by_merchant));
    }
    
    /**
     * Create the "product object" from data
     * @param String $data
     * @return Product
     */
    private function buildTheProductFromLine($data){
        $data_explode = explode("\t", $data); //separated by tabs "\t" delimiter

        //create the object...
        $product = new Product();
        $product->setTitle($data_explode[0]);
        $product->setDescription($data_explode[1]);
        $product->setPrice($data_explode[2]);
        $product->setInitDate(new \DateTime($data_explode[3]));
        $product->setExpireDate(new \DateTime($data_explode[4]));
        $product->setMerchantAddress($data_explode[5]);
        $product->setMerchantName($data_explode[6]);
        $product->setStatus(true);
        return $product;
    }
}
