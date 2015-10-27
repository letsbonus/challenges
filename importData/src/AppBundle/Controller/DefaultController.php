<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;


class ItemController extends Controller
{

    /**
     * @Route("/anuncio/{id}/{anuncio}", name="anuncio_show")
     */
    public function showAction($id, $anuncio, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($id);
        $anuncio->setVistas($anuncio->getVistas() + 1);

        $em->persist($anuncio);
        $em->flush();

        // formulario de comentarios
        $comentario = new Comentario();
        $form = $this->createForm(new AnuncioComentarioType(), $comentario);
        // formulario de anuncio falso
        $formFalse = $this->createForm(new AnuncioFalsoType());

        if('POST' === $request->getMethod()) {

            if ($request->request->has('comentario')) {
                $form->handleRequest($request);
                if ($form->isValid()) {
                    $comentario->setAnuncio($anuncio);
                    $comentario->setCreatedBy($user);
                    $em->persist($comentario);
                    $em->flush();
                    $this->addFlash('info', 'Tu comentario se ha enviado correctamente');
                }
            }

            if ($request->request->has('anuncio_falso')) {
                $formFalse->handleRequest($request);
                if ($formFalse->isValid()) {

                    // enviar correo
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Reclamación de anuncio falso')
                        ->setFrom('info@ritmodelanoche.com')
                        ->setTo('info@ritmodelanoche.com')
                        ->setBody(
                            $this->renderView(
                                'RitmoAnuncioBundle:Emails:anuncioFalse.html.twig',
                                array('anuncio' => $anuncio, 'form' => $formFalse->getData())
                            ),
                            'text/html'
                        )
                    ;
                    $this->get('mailer')->send($message);

                    $this->addFlash('info', 'Tu reclamación se ha enviado correctamente');
                }
            }
        }

        if ($anuncio->getEsGratis())
        {
            return $this->render('RitmoAnuncioBundle:Anuncio:fichaGratis.html.twig', array(
                'anuncio' => $anuncio,
                'form' => $form->CreateView(),
                'formFalse' => $formFalse->CreateView(),
            ));
        } else {
            return $this->render('RitmoAnuncioBundle:Anuncio:ficha.html.twig', array(
                'anuncio' => $anuncio,
                'form' => $form->CreateView(),
                'formFalse' => $formFalse->CreateView(),
            ));
        }
    }


    /**
     * @Route("/countClick/{anuncioId}", name="anuncio_count_click", options={"expose"=true})
     */
    public function countClick ($anuncioId) {
        $em = $this->getDoctrine()->getEntityManager();
        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($anuncioId);
        $anuncio->setClick($anuncio->getClick() + 1);
        $em->persist($anuncio);
        $em->flush();
        return new Response();
    }


    /**
     * @param $anuncioId
     * @return RedirectResponse
     * @Route("/renove/anuncio/{anuncioId}", name="anuncio_renove")
     */
    public function renoveAnuncio ($anuncioId) {
        $em = $this->getDoctrine()->getEntityManager();
        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($anuncioId);
        $anuncio->setUpdated(new \DateTime());
        $em->persist($anuncio);
        $em->flush();

        $url = $this->get('router')->generate('sonata_user_profile_show');
        $response = new RedirectResponse($url);
        return $response;
    }

    /**
     * @param $anuncioId
     * @return RedirectResponse
     * @Route("/delete/anuncio/{anuncioId}", name="anuncio_delete")
     */

    public function deleteAnuncio ($anuncioId) {
        $em = $this->getDoctrine()->getEntityManager();
        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($anuncioId);

        // borrar imagenes
        $anuncio_dir = $this->get('kernel')->getRootDir(). "/../public_html/uploads/anuncios/".$anuncio->getId()."/";
        foreach ($anuncio->getGaleria() as $imagen) {
            unlink($anuncio_dir . $imagen->getTitle());
        }

        $em->remove($anuncio);
        $em->flush();

        $url = $this->get('router')->generate('sonata_user_profile_show');
        $response = new RedirectResponse($url);
        return $response;

    }


    /**
     * Mapa de anuncios
     *
     * @Route("/map", name="map")
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function mapAction(Request $request)
    {
        $map = $this->get('ivory_google_map.map');
        $map->setAutoZoom(false);

        $map->setStylesheetOption('width', '1308px');
        $map->setStylesheetOption('height', '600px');
        $map->setJavascriptVariable('mi_mapa');
        $map->setMapOption('zoom', 13);
        $map->setLanguage('es');


        $em = $this->getDoctrine();
        $form = $this->get('form.factory')->create(new AnuncioFilterType());


        if ($request->query->has($form->getName())) {

            // manually bind values from the request
            $form->submit($request->query->get($form->getName()));

            // initialize a query builder
            $filterBuilder = $em->getRepository('RitmoAnuncioBundle:Anuncio')->getAnunciosDestacadosQuery();

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            $resultQuery = $filterBuilder->getQuery();
            $anuncios = $resultQuery->execute();

            // initialize a query builder
            $filterBuilder = $em->getRepository('RitmoAnuncioBundle:Anuncio')->getAnunciosGratisQuery();

            // build the query from the given form object
            $this->get('lexik_form_filter.query_builder_updater')->addFilterConditions($form, $filterBuilder);

            $resultQuery = $filterBuilder->getQuery();
            $anunciosFree = $resultQuery->execute();

        } else {
            $anuncios = $em->getRepository('RitmoAnuncioBundle:Anuncio')->getAnunciosDestacados();
            $anunciosFree = $em->getRepository('RitmoAnuncioBundle:Anuncio')->getAnunciosGratis();
        }


        // sacar markers de destacados

        foreach ($anuncios as $anuncio) {
            if ($anuncio->getLatitud() && $anuncio->getLatitud() != 0 && $anuncio->getLongitud() && $anuncio->getLongitud() != 0 ) {
                $marker = new Marker();

                // Configure your marker options
                $marker->setPrefixJavascriptVariable('marker_');
                //~ $marker->setPosition(0, 0, true);
                $marker->setPosition($anuncio->getLatitud(), $anuncio->getLongitud(), true);

                $marker->setOption('clickable', true);
                $marker->setOption('flat', true);
                $marker->setOptions(array(
                    'clickable' => true,
                    'flat'      => true,
                ));
                $marker->setIcon('/images/mark.png');

                // info window
                $infoWindow = new InfoWindow();


                // contenido ventana
                $content = '';
                if ($anuncio->getImagenDestacada()->getFile())
                {
                    $content = '<p><img src="/uploads/anuncios/' . $anuncio->getId() . '/thumbnails/' . $anuncio->getImagenDestacada()->getFile() .'" /></p>';
                }
                $content .= '<a href="' . $this->generateUrl('anuncio_show', array('id' => $anuncio->getId(), 'anuncio' => $anuncio->getTitle())) . '" >' . $anuncio->getTitle() . '</a>';

                $infoWindow->setPrefixJavascriptVariable('info_window_');
                $infoWindow->setPosition(0, 0, true);
                $infoWindow->setPixelOffset(1.1, 2.1, 'px', 'pt');
                $infoWindow->setContent($content);
                $infoWindow->setOpen(false);
                $infoWindow->setAutoOpen(true);
                $infoWindow->setOpenEvent(MouseEvent::CLICK);
                $infoWindow->setAutoClose(false);
                $infoWindow->setOption('disableAutoPan', true);
                $infoWindow->setOption('zIndex', 10);
                $infoWindow->setOptions(array(
                    'disableAutoPan' => true,
                    'zIndex'         => 10,
                ));

                $marker->setInfoWindow($infoWindow);

                $map->addMarker($marker);
            }

        }


        // sacar markers de gratuitos

        foreach ($anunciosFree as $anuncio) {
            if ($anuncio->getLatitud() && $anuncio->getLatitud() != 0 && $anuncio->getLongitud() && $anuncio->getLongitud() != 0 ) {
                $marker = new Marker();

                // Configure your marker options
                $marker->setPrefixJavascriptVariable('marker_');
                //~ $marker->setPosition(0, 0, true);
                $marker->setPosition($anuncio->getLatitud(), $anuncio->getLongitud(), true);

                $marker->setOption('clickable', true);
                $marker->setOption('flat', true);
                $marker->setOptions(array(
                    'clickable' => true,
                    'flat'      => true,
                ));
                $marker->setIcon('/images/mark2.png');

                // info window
                $infoWindow = new InfoWindow();

                // contenido ventana
                $content = '';
                $content .= '<a href="' . $this->generateUrl('anuncio_show', array('id' => $anuncio->getId(), 'anuncio' => $anuncio->getTitle())) . '" >' . $anuncio->getTitle() . '</a>';

                $infoWindow->setPrefixJavascriptVariable('info_window_');
                $infoWindow->setPosition(0, 0, true);
                $infoWindow->setPixelOffset(1.1, 2.1, 'px', 'pt');
                $infoWindow->setContent($content);
                $infoWindow->setOpen(false);
                $infoWindow->setAutoOpen(true);
                $infoWindow->setOpenEvent(MouseEvent::CLICK);
                $infoWindow->setAutoClose(false);
                $infoWindow->setOption('disableAutoPan', true);
                $infoWindow->setOption('zIndex', 10);
                $infoWindow->setOptions(array(
                    'disableAutoPan' => true,
                    'zIndex'         => 10,
                ));

                $marker->setInfoWindow($infoWindow);

                $map->addMarker($marker);
            }

        }

        return $this->render('RitmoAnuncioBundle:Anuncio:map.html.twig', array(
            'map' => $map,
            'form' => $form->createView(),
        ));
    }

    public function filterAction  (Request $request)
    {

    }


    /**
     * Aceptar al usuario que ha pagado a través de paypal
     *
     * @return RedirectResponse
     * @Route ("/usuario/aceptado", name="usuario_aceptado")
     *
     */
    public function userAccepted(Request $request)
    {

        $em = $this->get('doctrine')->getEntityManager();
        $mail = $request->request->get('payer_email');

        $user = $em->getRepository('ApplicationSonataUserBundle:User')->findOneBy(array('email' => $mail));

        $user->setEnabled(true);
        $em->persist($user);


        // añadir pago a lista de pagos
        $pago = new Pago();
        $pago->setEstado('aceptado');
        $pago->getCreatedBy($user);
        $pago->getUpdatedBy($user);

        $em->persist($pago);

        $em->flush();

        // enviar correo
        $message = \Swift_Message::newInstance()
            ->setSubject('Nuevo pago de anuncio destacado')
            ->setFrom('info@ritmodelanoche.com')
            ->setTo('info@ritmodelanoche.com')
            ->setBody(
                $this->renderView(
                    'RitmoAnuncioBundle:Emails:pagoPaypal.html.twig'
                ),
                'text/html'
            )
        ;
        $this->get('mailer')->send($message);


        $url = $this->get('router')->generate('sonata_user_profile_show');
        return new RedirectResponse($url);

    }


    /**
     *
     * Edición y creación de anuncios destacados
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/edit/anuncio", name="anuncio_edit")
     */

    public function anuncioEditAction (Request $request)
    {

        $em = $this->get('doctrine')->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.context');


        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') || !$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createNotFoundException('No se ha encontrado el usuario o su sesión ha expirado');
        }

        $anuncio = new Anuncio();
        foreach ($user->getAnuncio() as $anuncioItem) {
            $anuncio = $anuncioItem;
        }


        $form = $this->createForm(new AnuncioFormType(), $anuncio);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $anuncio->setCreatedBy($user);
            $anuncio->setUpdatedBy($user);
            $anuncio->setEsGratis(false);
            $em->persist($anuncio);
            $em->flush();

            // copiar las imagenes con orphanage true
            $manager = $this->get('oneup_uploader.orphanage_manager')->get('gallery');

            // get files
            $files = $manager->getFiles();

            dump($files);

            $destacado = true;
            foreach ($files->files() as $file) {
                dump($file);

                // subir la imagen individualmente
                $manager->uploadFiles(array($file));

                $web_dir = $this->get('kernel')->getRootDir(). "/../public_html/uploads/anuncios/";
                $anuncio_dir = $this->get('kernel')->getRootDir(). "/../public_html/uploads/anuncios/".$anuncio->getId()."/";

                // imagenes destacadas de las galerías
                $temporal = new Imagen();
                $temporal->setTitle($file->getFilename());
                $temporal->setFile($file->getFilename());

                // el primero es la imagen destacada
                $temporal->setDestacado($destacado);
                if ($destacado) $destacado = false;


                $em->persist($temporal);
                $em->flush();

                // creamos la carpeta para este anuncio
                if (!is_dir($anuncio_dir)) {
                    mkdir( $anuncio_dir, 0777, true);
                }

                // mover la imagen
                $fileToMove = new File($web_dir.$file->getFilename());
                $fileToMove->move($anuncio_dir, $file->getFilename());

                $anuncio->addGalerium($temporal);

            }



            $user->addAnuncio($anuncio);

            $em->persist($user);
            $em->flush();

            $url = $this->get('router')->generate('sonata_user_profile_show');
            $response = new RedirectResponse($url);

            return $response;

        }

        return $this->render('RitmoAnuncioBundle:Anuncio:formPremiumFirstStep.html.twig', array(
            'form' => $form->createView(),
            'anuncio' => $anuncio
        ));
    }

    /**
     * @param $anuncioId
     * @return string
     * @Route ("/galeria/anuncio/{anuncioId}", name="anuncio_galeria", options={"expose"=true})
     */
    public function anuncioGaleria ($anuncioId)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($anuncioId);

        $return = array();
        foreach ($anuncio->getGaleriaNoDestacado() as $imagen)
        {
            $return[] = array('name' => $imagen->getTitle(), 'uuid' => $imagen->getTitle(), 'thumbnailUrl' => "/uploads/anuncios/".$anuncio->getId()."/". $imagen->getTitle()) ;
        }

        return new Response(json_encode($return));
    }

    /**
     * @param $anuncioId
     * @return string
     * @Route ("/imagenDestacada/anuncio/{anuncioId}", name="anuncio_imagen_destacada", options={"expose"=true})
     */
    public function anuncioImagenDestacada ($anuncioId)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $anuncio = $em->getRepository('RitmoAnuncioBundle:Anuncio')->findOneById($anuncioId);

        $return = array();
        $imagen = $anuncio->getImagenDestacada();

        $return[] = array('name' => $imagen->getTitle(), 'uuid' => $imagen->getTitle(), 'thumbnailUrl' => "/uploads/anuncios/".$anuncio->getId()."/". $imagen->getTitle()) ;


        return new Response(json_encode($return));
    }

    /**
     *
     * Edición y creación de anuncios gratuitos
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/edit/free/anuncio", name="anuncio_free_edit")
     */

    public function anuncioFreeEditAction (Request $request) {

        $em = $this->get('doctrine')->getEntityManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $securityContext = $this->container->get('security.context');


        if (!$securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED') || !$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createNotFoundException('No se ha encontrado el usuario o su sesión ha expirado');
        }

        $anuncio = new Anuncio();
        foreach ($user->getAnuncio() as $anuncioItem) {
            $anuncio = $anuncioItem;
        }


        $form = $this->createForm(new AnuncioFormType(), $anuncio);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $valido = true;
            // validar palabras
            foreach ($em->getRepository('RitmoAnuncioBundle:Palabra')->findAll() as $palabra) {
                if(stristr($anuncio->getTitle(), $palabra->getTitle()) !== FALSE) {
                    $valido = false;
                }
                if(stristr($anuncio->getDescription(), $palabra->getTitle()) !== FALSE) {
                    $valido = false;
                }
            }

            if ($valido) {

                $anuncio->setCreatedBy($user);
                $anuncio->setUpdatedBy($user);
                $em->persist($anuncio);
                $em->flush();

                // copiar las imagenes con orphanage true
                $manager = $this->get('oneup_uploader.orphanage_manager')->get('gallery');

                // get files
                $files = $manager->getFiles();

                $destacado = true;
                foreach ($files->files() as $file) {
                    // crear relación con tarifas y contactos
                    foreach ($anuncio->getAnuncioContacto() as $contacto) {
                        $contacto->setAnuncio($anuncio);
                    }
                    foreach ($anuncio->getTarifas() as $tarifa) {
                        $tarifa->setAnuncio($anuncio);
                    }

                    // subir la imagen individualmente
                    $manager->uploadFiles(array($file));

                    $web_dir = $this->get('kernel')->getRootDir(). "/../public_html/uploads/anuncios/";
                    $anuncio_dir = $this->get('kernel')->getRootDir(). "/../public_html/uploads/anuncios/".$anuncio->getId()."/";

                    // imagenes destacadas de las galerías
                    $temporal = new Imagen();
                    $temporal->setTitle($file->getFilename());
                    $temporal->setFile($file->getFilename());

                    // el primero es la imagen destacada
                    $temporal->setDestacado($destacado);
                    if ($destacado) $destacado = false;


                    $em->persist($temporal);
                    $em->flush();

                    // creamos la carpeta para este anuncio
                    if (!is_dir($anuncio_dir)) {
                        mkdir( $anuncio_dir, 0777, true);
                    }

                    // mover la imagen
                    $fileToMove = new File($web_dir.$file->getFilename());
                    $fileToMove->move($anuncio_dir, $file->getFilename());

                    $anuncio->addGalerium($temporal);

                }
                $user->addAnuncio($anuncio);

                $em->persist($user);
                $em->flush();

                // enviar correo
                $message = \Swift_Message::newInstance()
                    ->setSubject('Nuevo anuncio gratuito editado')
                    ->setFrom('info@ritmodelanoche.com')
                    ->setTo('info@ritmodelanoche.com')
                    ->setBody(
                        $this->renderView(
                            'RitmoAnuncioBundle:Emails:anuncioNuevo.html.twig',
                            array('anuncio' => $anuncio)
                        ),
                        'text/html'
                    )
                ;
                $this->get('mailer')->send($message);

                $url = $this->get('router')->generate('sonata_user_profile_show');
                $response = new RedirectResponse($url);

                return $response;
            } else {
                $this->addFlash('danger', 'Tu anuncio no se ha podido crear por utilizar una palabra prohibida en el nombre o la descrición');
            }
        }

        return $this->render('RitmoAnuncioBundle:Anuncio:formFirstStep.html.twig', array(
            'form' => $form->createView(),
            'anuncio' => $anuncio
        ));
    }
}
