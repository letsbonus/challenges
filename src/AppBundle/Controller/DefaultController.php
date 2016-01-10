<?php

namespace AppBundle\Controller;

use AppBundle\Resources\Form\UploadTabFileFormType;
use LetsBonus\Application\StoreProductInfo\StoreProductInfoUseCaseRequest;
use LetsBonus\Application\StoreProductInfo\StoreProductInfoUseCaseResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $form = $this->createForm(UploadTabFileFormType::class, null, ['action' => $this->generateUrl('upload-file')]);

        return $this->render('AppBundle:Default:default.html.twig', [
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/upload", name="upload-file")
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    public function uploadFileAction(Request $request)
    {
        $form = $this->createForm(UploadTabFileFormType::class, null, ['action' => $this->generateUrl('upload-file')]);
        $form->handleRequest($request);

        if ($form->isValid()) {
            try {
                $storeProductInfoUseCaseResponse = $this->storeProductInfo($request);
                $this->addFlash(
                    'notice',
                    sprintf('%d rows uploaded!', $storeProductInfoUseCaseResponse->nRows())
                );

                return $this->redirectToRoute('product-count');
            } catch (\Exception $e) {
                $this->addFlash('error', 'message only for debug: '.$e->getMessage());
            }
        }

        return $this->redirectToRoute('homepage');
    }

    /**
     * @param Request $request
     *
     * @return StoreProductInfoUseCaseResponse
     */
    private function storeProductInfo(Request $request)
    {
        $storeProductInfoUseCase = $this->container->get('store_product_info_use_case');
        $storeProductInfoUseCaseRequest = $this->buildStoreProductInfoUseCaseRequest($request);

        return $storeProductInfoUseCase->execute($storeProductInfoUseCaseRequest);
    }

    /**
     * @param Request $request
     *
     * @return StoreProductInfoUseCaseRequest
     */
    private function buildStoreProductInfoUseCaseRequest(Request $request)
    {
        $tabFileInfo = $request->files->get('uploadtabfileform');
        $uploadedFile = $tabFileInfo['tabfile'];

        /** @var UploadedFile $uploadedFile */
        if ($uploadedFile->isFile() && $uploadedFile->isReadable()) {
            return new StoreProductInfoUseCaseRequest(file_get_contents($uploadedFile->getRealPath()));
        }

        throw new \InvalidArgumentException('There was an error reading the uploaded file');
    }

    /**
     * @Route("/product-count", name="product-count")
     */
    public function productCountAction()
    {
        throw new \BadMethodCallException('Method not implemented yet');
    }
}
