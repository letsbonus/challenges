<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 30/11/15
 * Time: 20:37.
 */
namespace AppBundle\Controller;

use AppBundle\Form\Type\ImporterFileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\ItemManager;
use AppBundle\Entity\ImportManager;


class ItemController extends Controller
{
    public function listingAction(Request $request)
    {
        $items_by_month = $this->getItemManager()->GroupedByMonth();
        $items_by_merchant = $this->getItemManager()->GroupedByMerchant();

        $form = $this->createForm(new ImporterFileType());
        $form->handleRequest($request);
        if ($form->isValid()) {
            $file = $form->get('file')->getData();
            $file_path = $file->getPathname();
            $this->getImportManager()->FromFile($file_path);

            return $this->redirect($this->generateUrl('item_listing'));
        }

        return $this->render('item/listing.html.twig', [
            'items_by_month' => $items_by_month,
            'items_by_merchant' => $items_by_merchant,
            'importer' => $form->createView(),
        ]);
    }

    /**
     * @return ItemManager
     */
    protected function getItemManager()
    {
        return $this->container->get('app.manager.item');
    }

    /**
     * @return ImportManager
     */
    protected function getImportManager()
    {
        return $this->container->get('app.manager.import');
    }
}
