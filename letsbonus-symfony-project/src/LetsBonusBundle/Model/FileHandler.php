<?php

namespace LetsBonusBundle\Model;

use LetsBonusBundle\Entity\Producto;

class FileHandler {

    private $content;

    public function __construct($file) {
        $this->content = file_get_contents($file);
    }

    function extractProducts() {
        $data = preg_split('/[\n]/', $this->content);

        //Eliminamos la cabecera del fichero y la ultima entraada (es una entrada en blanco,
        //ya que hace como si el final del fichero fuese un salto de linea)
        $products = array_diff($data, array($data[0], $data[sizeof($data) - 1]));

        $products_objects = [];

        //Recorremos productos y extraemos propiedades
        foreach ($products as $product) {
            $properties = preg_split('/[\t]/', $product);

            //Creamos el new producto
            $producto = new Producto($properties[0], $properties[1], $properties[2], $properties[3], $properties[4], $properties[5], $properties[6]);

            //Lo añadimos al array de productos que devolveremos
            array_push($products_objects, $producto);
        }

        return $products_objects;
    }

    function getTotalPerMonth($em) {
        $total_monthly = array();

        for ($i = 1; $i <= 12; $i++) {
            $query = $em->createQuery(
                    "SELECT COUNT(p)"
                    . "FROM LetsBonusBundle:Producto p"
                    . " WHERE MONTH(p.init_date) = " . $i);
            $total = $query->setMaxResults(1)->getOneOrNullResult();



            $month;

            switch ($i) {
                case 1:
                    $month = 'jan';
                    break;
                case 2:
                    $month = 'feb';
                    break;
                case 3:
                    $month = 'mar';
                    break;
                case 4:
                    $month = 'apr';
                    break;
                case 5:
                    $month = 'may';
                    break;
                case 6:
                    $month = 'jun';
                    break;
                case 7:
                    $month = 'jul';
                    break;
                case 8:
                    $month = 'aug';
                    break;
                case 9:
                    $month = 'sep';
                    break;
                case 10:
                    $month = 'oct';
                    break;
                case 11:
                    $month = 'nov';
                    break;
                case 12:
                    $month = 'dec';
                    break;
            }

//            $total_monthly[$month] = $total[1];

            $total_monthly[$i - 1]['total'] = $total[1];
            $total_monthly[$i - 1]['month'] = $month;
        }

        return $total_monthly;
    }

    function getTotalPerMerchant($em) {
        $total_merchant = array();

        $query = $em->createQuery(
                "SELECT DISTINCT p.merchant_name "
                ."FROM LetsBonusBundle:Producto p");
        $raw_merchants = $query->getResult();
        $merchants = array();
        foreach($raw_merchants as $merchant){
            array_push($merchants, $merchant['merchant_name']);
        }
        
        
        for ($i = 0; $i < sizeof($merchants); $i++){
            $total_merchant[$i]['name'] = $merchants[$i];
            
            $query = $em->createQuery(
                "SELECT COUNT(p) "
                ."FROM LetsBonusBundle:Producto p "
                    . "WHERE p.merchant_name LIKE '" . $merchants[$i] . "'");
            
            
            $total = $query->setMaxResults(1)->getOneOrNullResult();
            
            $total_merchant[$i]['total'] = $total[1];
            
        }
        return $total_merchant;
    }
} 