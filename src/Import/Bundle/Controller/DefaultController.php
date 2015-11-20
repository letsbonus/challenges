<?php

namespace Import\Bundle\Controller;

use Import\Bundle\Entity\Products;
use Import\Bundle\Entity\Merchant;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    	$form = $this->createFormBuilder()
    				->add('importFile', 'file', array('label' => 'Carga de fichero de datos'))
    				->add('save', 'submit', array('label' => 'Subir fichero'))
    				->getForm();

    	$form->handleRequest($request);

    	if($request->getMethod('post') == 'POST'){
    		foreach ($request->files as $dataForm) {
    			$file = $dataForm['importFile'];
    			if(($handle = fopen($file->getRealPath(), "r")) !== FALSE){
    				$line = 0;
    				$em = $this->getDoctrine()->getManager();
    				while(($row = fgetcsv($handle, 1000, "\t")) !== FALSE){
    					if($line > 0){

    						$merchant =  $this->get('doctrine')
									      ->getRepository('ImportBundle:Merchant')
									      ->findOneBy(array('name' => $row[6]));

							if(empty($merchant)){
								$merchant = new Merchant();
								$merchant->setName($row[6]);
								$merchant->setAddress($row[5]);
								$merchant->setModifyDatetime(date_create());
								$merchant->setCreateDatetime(date_create());
								$em->persist($merchant);
								$em->flush();
							}

    						$product = new Products();
    						$product->setTitle($row[0]);
				    		$product->setDescription($row[1]);
				    		$product->setPrice($row[2]);
				    		$date = date_create($row[3]);
				    		$product->setInitDatetime($date);
				    		$date = date_create($row[4]);
				    		$product->setExpireDatetime($date);
				    		$product->setStatus('ok');
				    		$product->setModifyDatetime(date_create());
							$product->setCreateDatetime(date_create());
				    		$product->setMerchantId($merchant->getId());

				    		$em->persist($product);
				    		$em->flush();
    					}
    					$line++;
    				}
    			}
    		}

    	}

        return $this->render('ImportBundle:Default:index.html.twig', array('form' => $form->createView()));
    }

    public function listAction(Request $request)
    {
    	$productsMerchant = array();
    	$merchants = $this->get('doctrine')->getRepository('ImportBundle:Merchant')->findAll();
    	foreach ($merchants as $key => $merchant) {
    		$productsMerchant[$merchant->getId()] = count($this->get('doctrine')->getRepository('ImportBundle:Products')->findByMerchantId($merchant->getId()));
    	}

        $products = $this->get('doctrine')->getRepository('ImportBundle:Products')->findAll();

        $productCount = array();
        foreach ($products as $key => $product) {
        	$productCount[$product->getInitDatetime()->format('Y-m')][] = $product->getTitle();
        }


        return $this->render('ImportBundle:Default:list.html.twig', 
        				array('productCount' => $productCount, 'merchants' => $merchants, 'productsMerchant' => $productsMerchant));
    }
}
