<?php

namespace LetsBonusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use LetsBonusBundle\Model\FileHandler;

//to use the render() method, your controller must extend the Controller class


class LetsBonusController extends Controller {

    public function indexAction() {
//        return $this->render('LetsBonusBundle:Login:login.html.twig');
        return $this->render('LetsBonusBundle::form.html.twig');
    }

    public function submitAction() {
        //Recuperar fichero
        $request = Request::createFromGlobals();

//        return new Response($request->files->get('fichero') != null ? "true" : "false");
        $file = $request->files->get('fichero');

        if ($file != "") {

            //Inicializar clase de modelo y tratar fichero
            $handler = new FileHandler($file);

            $products = $handler->extractProducts();

            //Cargar entity manager
            $em = $this->getDoctrine()->getManager();

            //Persistir productos
            foreach ($products as $product) {
                $em->persist($product);
                $em->flush();
            }


            //Extraer productos por mes
            $data['products_month'] = $handler->getTotalPerMonth($em);


            //Extraer productos por merchant
            $data['products_merchant'] = $handler->getTotalPerMerchant($em);

            //Mostrar respuesta
            return $this->render('LetsBonusBundle::products-info.html.twig', $data);
        } else {
            return $this->redirect("/");
        }
    }

}
