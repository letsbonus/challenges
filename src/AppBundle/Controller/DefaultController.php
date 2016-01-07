<?php

namespace AppBundle\Controller;

use AppBundle\Resources\Form\UploadTabFileFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $form = $this->createForm(UploadTabFileFormType::class, null, ['action' => $this->generateUrl('upload-file')]);

        return $this->render('AppBundle:Default:default.html.twig', [
                'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/upload", name="upload-file")
     */
    public function uploadFileAction()
    {
        //todo
    }
}
