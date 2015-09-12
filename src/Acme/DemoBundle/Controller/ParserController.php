<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Acme\DemoBundle\Entity\Product;

/**
 * @Route("/parser")
 */
class ParserController extends Controller
{
    /**
     * @Route("/index", name="_parser_index")
     * @Template()
     */
    public function indexAction()
    {
        
        return $this->render('AcmeDemoBundle:Parser:index.html.twig');
    }
    
    /**
     * @Route("/parser", name="_parser_parser")
     * @Template()
     */
    public function parserAction()
    {
        $producString = $this->get('request')->request->get('producString');
        $producData = $this->parserString($producString);
        $status = $this->saveProduc($producData);
        
        return $this->render('AcmeDemoBundle:Parser:countStatus.html.twig',array("perMount" => $this->countPerMount(),"perCustomer" => $this->countPerMerchant()));
    }
    
    private function countPerMerchant(){
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->getConnection()->prepare('select count(*) as `total`, `name` from `product` group by `name` order by `name` ASC ');
        $query->execute();
        
        return $query->fetchAll();
    }
    
    private function countPerMount(){
        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->getConnection()->prepare("SELECT COUNT(*) AS total, YEAR(init) as year, MONTH(init) AS month FROM `product` GROUP BY YEAR(init), MONTH(init) ORDER BY YEAR(init) DESC, MONTH(init) DESC" );
        $query->execute();
        
        return $query->fetchAll();      
    }
    
    private function saveProduc($producData){
        
        $newProduct = new Product();
        $newProduct->setTitle($producData['title']);
        $newProduct->setDescription($producData['description']);
        $newProduct->setPrice($producData['price']);
        $newProduct->setInit($producData['init']);
        $newProduct->setExpiry($producData['expiry']);
        $newProduct->setAddress($producData['address']);
        $newProduct->setName($producData['name']);
        $newProduct->setTextorigin($producData['textOrigiin']);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($newProduct);
        $em->flush();
        
        return true;
    }
    
    //item title	item description	item price	item init date	item expiry date	merchant address	merchant name
    private function parserString($producString){
        $arrayProduc = preg_split("/[\t]/", $producString);
        
        $initDate = $this->createDataTime($arrayProduc[3]);
        $expiryDate = $this->createDataTime($arrayProduc[4]);
        
        $producData = array(
            "title" => $arrayProduc[0],
            "description" => $arrayProduc[1],
            "price" => $arrayProduc[2],
            "init" => $initDate,
            "expiry" => $expiryDate,
            "address" => $arrayProduc[5],
            "name" => $arrayProduc[6],
            "textOrigiin" => $producString
        );
        
        return $producData;
    }
    
    private function createDataTime($stringData){
        $date = new \DateTime($stringData);
        
        if (false === $date) {
          die('invalid date format');
        }
        
        return $date;
    }
    
}
