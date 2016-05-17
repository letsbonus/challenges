<?php

namespace LetsBonusTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use LetsBonusTestBundle\Entity\Product;
use LetsBonusTestBundle\Entity\Merchant;

class LetsbonusController extends Controller
{
    /**
     * @Route("/", name="lb_home")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $merchants = $em->getRepository('LetsBonusTestBundle:Merchant')->findAll();
        $prodByMerchants = $em->getRepository('LetsBonusTestBundle:Product')->countProductsByMerchant();
        $prodByMonths = $em->getRepository('LetsBonusTestBundle:Product')->countProductsByMonth();

        return $this->render('LetsBonusTestBundle::index.html.twig', [
            'merchants' => $merchants,
            'prodByMonths' => $prodByMonths,
            'prodByMerchants' => $prodByMerchants
        ]);
    }

    /**
     * @Route("/upload", name="lb_upload")
     */
    public function uploadAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $file = $request->files->get('file');
        $file = $file->move('uploads/', $file->getClientOriginalName());

        $openedFile = $file->openFile('r');
        $first = true;
        $result = 'Upload OK!';
        while (!$openedFile->eof()) {
            $line = explode("\t", str_replace(array("\n", "\r"), '', $openedFile->fgets()));
            if (count($line) != 7) {
                $result = 'Incorrect file format';
                break;
            }

            if (!$first) {
                $merchant = $em->getRepository('LetsBonusTestBundle:Merchant')->findOneByName($line[6]);

                if (!$merchant) {
                    $merchant = new Merchant();
                    $merchant->setName($line[6]);
                    $merchant->setAddress($line[5]);
                    $merchant->setUpdatedAt(new \DateTime());
                    $merchant->setCreatedAt(new \DateTime());
                    // Insert User to DB
                    $em->persist($merchant);
                    $em->flush();
                }

                $product = new Product();
                $product->setMerchant($merchant);
                $product->setTitle($line[0]);
                $product->setDescription($line[1]);
                $product->setPrice($line[2]);
                $product->setInitDate(new \DateTime($line[3]));
                $product->setExpiryDate(new \DateTime($line[4]));
                $product->setStatus("new");
                $product->setUpdatedAt(new \DateTime());
                $product->setCreatedAt(new \DateTime());
                // Insert User to DB
                $em->persist($product);
                $em->flush();
            }
            $first = false;
        }
        $this->get('session')->getFlashBag()->add('upload_result', $result);

        return $this->redirectToRoute('lb_home');
    }
}
