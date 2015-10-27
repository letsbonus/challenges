<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Form\Type\ImportType;

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

        $form = $this->createForm(new ImportType());
        $form->handleRequest($request);
        if ($form->isValid()) {

            // normalizar archivo


            // crear datos
            return $this->render('RitmoAnuncioBundle:Anuncio:fichaGratis.html.twig', array(
                'anuncio' => $anuncio,
                'form' => $form->CreateView(),
                'formFalse' => $formFalse->CreateView(),
            ));

        }

        return $this->render('AppBundle::defaultView.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
