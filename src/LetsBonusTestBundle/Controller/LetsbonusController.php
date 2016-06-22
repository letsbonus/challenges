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

        if ($request->getMethod() == 'POST') {
            // TODO Control de errores
            $data = $request->request->all();
            $dateTime = new \DateTime();
            $dateTime = $dateTime->setTimezone(new \DateTimeZone("UTC"));

            $product = new Product();
            if ($data['product']['merchant'] == 'new') {
                $merchant = new Merchant();
                $merchant->setName($data['merchant']['name']);
                $merchant->setAddress($data['merchant']['address']);
                $merchant->setUpdatedAt($dateTime);
                $merchant->setCreatedAt($dateTime);

                // Insert User to DB
                $em->persist($merchant);
                $em->flush();
            } else {
                $merchant = $em->getRepository('LetsBonusTestBundle:Merchant')->find($data['product']['merchant']);
                if (!$merchant) {
                    // TODO erró!
                }
            }
            $initDate = new \DateTime($data['product']['init_date']);
            $initDate = $initDate->setTimezone(new \DateTimeZone("UTC"));
            $expiryDate = new \DateTime($data['product']['expiry_date']);
            $expiryDate = $expiryDate->setTimezone(new \DateTimeZone("UTC"));

            $product->setMerchant($merchant);
            $product->setTitle($data['product']['title']);
            $product->setDescription($data['product']['description']);
            $product->setPrice($data['product']['price']);
            $product->setInitDate($initDate);
            $product->setExpiryDate($expiryDate);
            $product->setStatus($data['product']['status']);
            $product->setUpdatedAt($dateTime);
            $product->setCreatedAt($dateTime);

            // Insert User to DB
            $em->persist($product);
            $em->flush();

            // TODO mostrar posible errores
            $this->get('session')->getFlashBag()->add('form_result', 'Form send OK!');
        }

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
                $dateTime = new \DateTime();
                $dateTime = $dateTime->setTimezone(new \DateTimeZone("UTC"));

                if (!$merchant) {
                    $merchant = new Merchant();
                    $merchant->setName($line[6]);
                    $merchant->setAddress($line[5]);
                    $merchant->setUpdatedAt($dateTime);
                    $merchant->setCreatedAt($dateTime);
                    // Insert User to DB
                    $em->persist($merchant);
                    $em->flush();
                }

                $initDate = new \DateTime($line[3]);
                $initDate = $initDate->setTimezone(new \DateTimeZone("UTC"));
                $expiryDate = new \DateTime($line[4]);
                $expiryDate = $expiryDate->setTimezone(new \DateTimeZone("UTC"));

                $product = new Product();
                $product->setMerchant($merchant);
                $product->setTitle($line[0]);
                $product->setDescription($line[1]);
                $product->setPrice($line[2]);
                $product->setInitDate($initDate);
                $product->setExpiryDate($expiryDate);
                $product->setStatus("new");
                $product->setUpdatedAt($dateTime);
                $product->setCreatedAt($dateTime);
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
