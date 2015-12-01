<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 1/12/15
 * Time: 3:33
 */
namespace AppBundle\Entity;

use Doctrine\ORM\EntityManager;

class ImportManager
{
    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }


    public function FromFile($file_path)
    {
        $skiped_header = false;
        if (($handle = fopen($file_path, 'r')) !== false) {
            while (($row = fgetcsv($handle, 0, "\t")) !== false) {
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

                    $this->em->persist($new_item);
                }
            }
            fclose($handle);
            $this->em->flush();
        }
    }
}