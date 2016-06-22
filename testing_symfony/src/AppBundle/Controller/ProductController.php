<?php

namespace AppBundle\Controller;

use AppBundle\Application\Exception\PropertyNotExist;
use AppBundle\Application\Handler\Command\MigrateProductCommand;
use AppBundle\Application\Handler\Command\MigrateProductFromFileCommand;
use AppBundle\Domain\Objects\Products;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @Route("/product/info", name="product_info")
     */
    public function indexAction(Request $request)
    {
        return $this->render(':product:product_info.html.twig');
    }

    /**
     * @Route("/product/form", name="product_form")
     */
    public function showFormAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $product = new Products();

        $form = $this->createFormBuilder($product)
            ->add('file', FileType::class)
            ->add('upload', SubmitType::class, array('label' => 'migrate'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ... perform some action, such as saving the task to the database
            /** @var MigrateProductFromFileCommand $migrateProductFromFileCommand */
            $migrateProductFromFileCommand = $this->get('migrate_product_from_file');
            $migrateProductFromFileRequest = new MigrateProductCommand($product->file());

            try {
                $migrateProductFromFileCommand->execute($migrateProductFromFileRequest);
            } catch(PropertyNotExist $e) {
                return $this->render(':exceptions:exception_invalid_file_data.html.twig');
            }

            return $this->redirectToRoute('product_migrated');
        }

        return $this->render(':product:product_form.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/product/success", name="product_migrated")
     */
    public function dataMigratedAction()
    {
        return $this->render(':product:migration_complete.html.twig');
    }
}
