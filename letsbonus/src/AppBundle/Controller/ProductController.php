<?php
/**
 * Created by PhpStorm.
 * User: apuig
 * Date: 7/2/16
 * Time: 15:57
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

//FORM
use AppBundle\Entity\Task;
use AppBundle\Entity\Product;
use AppBundle\Form\Upload\UploadFileForm;
use Symfony\Component\HttpFoundation\Request;


class ProductController extends Controller
{
    /**
     * - Render upload file form
     * - Redirect to show products when the form is submitted & valid
     *
     * @param Request $request
     *
     * @Route("product/upload")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function upload(Request $request)
    {
        $task = new Task();

        $form = $this->createForm(UploadFileForm::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $path = $form['attachment']->getData()->getPathName();

            $product_service = $this->get('app.product');
            $product_service->read($path);

            return $this->redirectToRoute('app_product_show');
        }

        return $this->render('product/upload.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Render show products
     * @Route("product/show")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show()
    {
        $repository  = $this->getDoctrine()->getRepository('AppBundle:Product');

        $gb_merchant = $repository->findGroupByMerchantName();
        $gb_month    = $repository->findGroupByMonth();

        return $this->render('product/show.html.twig',
            array('gb_merchant' => $gb_merchant, 'gb_month' => $gb_month));
    }
}