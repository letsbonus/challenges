<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 30/11/15
 * Time: 20:37
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use AppBundle\Form\Type\ImporterFileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    public function listingAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository('AppBundle:Item')
            ->createQueryBuilder('i')
            ->getQuery()
            ->getResult();

        $form = $this->createForm(new ImporterFileType());

        $form->handleRequest($request);

        if ($form->isValid()) {

            $file = $form->get('file')->getData();
            $file_path = $file->getPathname();

            $skiped_header = false;
            if (($handle = fopen($file_path, 'r')) !== FALSE) {
                while (($row = fgetcsv($handle, 0, "\t")) !== FALSE) {
                    if (!$skiped_header) {
                        $skiped_header = true;
                    } else {
                        $new_item = new Item();

                        $new_item->setTitle($row[0]);
                        $new_item->setDescription($row[1]);
                        $new_item->setPrice($row[2]);
                        $new_item->setInitDate(new \DateTime($row[3]));
                        $new_item->setExpiryDate(new \DateTime($row[4]));
                        $new_item->setMerchantAddress($row[5]);
                        $new_item->setMerchantName($row[6]);
                        $new_item->setStatus('saved');

                        $em->persist($new_item);
                    }
                }
                fclose($handle);
                $em->flush();
            }

            return $this->redirect($this->generateUrl('item_listing'));
        }

        return $this->render('item/listing.html.twig', [
            'items' => $items,
            'importer' => $form->createView()
        ]);
    }
}