<?php

namespace LetsBonusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use LetsBonusBundle\Model\FileHandler;

//to use the render() method, your controller must extend the Controller class


class LetsBonusController extends Controller {

    //Acción por defecto, muestra el formulario de subida de fichero
    public function indexAction() {
        return $this->render('LetsBonusBundle::form.html.twig');
    }

    //Acción ejecutada tras el envío del fichero mediante el form
    public function submitAction() {
        //Recuperar fichero
        $request = Request::createFromGlobals();

        //Capturamos el nombre del fichero 
        $file = $request->files->get('fichero');

        //Comprobamos que el fichero está (evitando, por ejemplo, que el 
        //usuario pueda handcodear /submit en la url
        if ($file != "") {

            //Inicializar clase de modelo y tratar fichero
            $handler = new FileHandler($file);

            //Extracción de productos mediante el modelo
            $products = $handler->extractProducts();

            //Cargar entity manager
            $em = $this->getDoctrine()->getManager();

            //Persistir productos (pendiente mover esta parte al modelo)
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
            //Redirigimos al usuario a la pantalla principal (formulario) si en el 
            //request no hay fichero (es decir, se ha introducido manualmente la url /submit)
            return $this->redirect("/");
        }
    }

}
