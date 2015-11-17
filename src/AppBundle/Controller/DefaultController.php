<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 *
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Main Request
     *
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $importStatus = null;
        $resume = null;
        $form = $this->importForm();

        if ($request->getMethod() == 'POST') {
            // Bind request to the form
            $form->submit($request);

            // If form is valid
            if ($form->isValid()) {
                // Get file from form
                $file = $form->get('importFile');

                try {

                    $this->get('product.importer')->import($file->getData());
                    $importStatus = true;
                    $repository = $this->getDoctrine()->getRepository('LetsProductBundle:Product');

                    $resume = [
                        'monthCount' => $repository->countByMonth(),
                        'merchantCount' => $repository->countByMerchant()
                    ];

                } catch (\Exception $e) {

                    $importStatus = $e->getMessage();
                }

            }

        }


        // replace this example code with whatever you need
        return $this->render('default/index.html.twig',[
            'form' => $form->createView(),
            'importStatus' => $importStatus,
            'resume' => $resume
        ]);
    }

    /**
     * Generate import form
     *
     * @return \Symfony\Component\Form\Form
     */
    protected function importForm()
    {
        return $this->createFormBuilder()
            ->add('importFile', 'file',     [
                'label' => 'Choose your file',
                'required' => true,
                'attr'  => [
                    'class' => 'form-control'
                ]
            ])
            ->add('save',       'submit',   [
                'label' => 'Submit',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            ->getForm();
    }
}
