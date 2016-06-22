<?php
/**
 * Created by PhpStorm.
 * User: apuig
 * Date: 7/2/16
 * Time: 22:17
 */

namespace AppBundle\Service;

use AppBundle\Entity\Product;
use Symfony\Component\PropertyAccess\PropertyAccess;
use AppBundle\Service\Common\EntityService;

class ProductService extends EntityService
{
    /**
     * Service Constructor.
     * Service dependencies are passed through Dependency Injection.
     * Its definition can be found in the services section of the file config.yml
     *
     * @param EntityManager $_em
     */
    public function __construct($_em) {
        parent::__construct($_em, $_em->getRepository('AppBundle:Product'));
    }

    /**
     * Read file and persist data
     * @param $dir string    file directory
     */
    public function read($dir)
    {
        $titles   = null;

        if ($fh = fopen($dir, "r"))
        {
            for ($i=0; ($line = fgetss($fh, 4096)) !== false; $i++)
            {
                if($i === 0)
                    $titles = self::getNormalizeTitles($line);
                else
                    self::insertProducts($titles, $line, $this->em);
            }

            if (!feof($fh))
                echo "Error: Unexpected error from fgets()\n";

            fclose($fh);
        }
    }

    /**
     * Get normalized titles of the line
     * @param $line array   -
     * @return array|mixed
     */
    private static function getNormalizeTitles($line)
    {
        $titles = str_replace(array(' ', 'item_'), array('_', ''), $line);
        $titles = preg_split('/\s+/', $titles);//explode string by one (or more spaces) or tab
        $titles = array_filter($titles);//remove empty elements

        return $titles;
    }

    /**
     * Insert products in the database
     *
     * @param $titles array     -
     * @param $line   string    -
     * @param $em     object    EntityManager
     */
    private static function insertProducts($titles, $line, $em)
    {
        $content  = explode("\t", $line);
        $accessor = PropertyAccess::createPropertyAccessor();
        $product  = new Product();

        foreach($titles as $k => $t)
        {
            $method = "set$t";
            $value  = (strpos($t, 'date') ? new \DateTime($content[$k]) : $c = trim($content[$k]));

            $accessor->setValue($product, $method, $value);
        }

        $em->persist($product);
        $em->flush();
    }
}