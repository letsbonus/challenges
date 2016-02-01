<?php

/*
 * Esta clase conforma el modelo de la aplicación, se encarga de persistir en BD
 * y realizar las consultas necesarias para mostrar la información en 
 * la vista
 */

namespace LetsBonusBundle\Model;

use LetsBonusBundle\Entity\Producto;

class FileHandler {

    //Atributo cuyo objetivo es almacenar el contenido del fichero
    private $content;

    public function __construct($file) {
        $this->content = file_get_contents($file);
    }

    //Función para extraer los productos del fichero
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

    //Función para obtener el total de productos por mes
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

            $total_monthly[$i - 1]['total'] = $total[1];
            $total_monthly[$i - 1]['month'] = $month;
        }

        return $total_monthly;
    }

    //Función para obtener el total de productos por cada merchant de l BD
    function getTotalPerMerchant($em) {
        $total_merchant = array();

        //Creamos la query
        $query = $em->createQuery(
                "SELECT DISTINCT p.merchant_name "
                . "FROM LetsBonusBundle:Producto p");
        //Capturamos el resultado
        $raw_merchants = $query->getResult();
        
        $merchants = array();
        
        //Damos formato de salida más amigable al resultado
        foreach ($raw_merchants as $merchant) {
            array_push($merchants, $merchant['merchant_name']);
        }

        //A continuación, para cada merchant que encontramos realizamos una query a 
        //BD para sacar el total de productos de ese merchant en concreto
        for ($i = 0; $i < sizeof($merchants); $i++) {
            $total_merchant[$i]['name'] = $merchants[$i];

            $query = $em->createQuery(
                    "SELECT COUNT(p) "
                    . "FROM LetsBonusBundle:Producto p "
                    . "WHERE p.merchant_name LIKE '" . $merchants[$i] . "'");


            $total = $query->setMaxResults(1)->getOneOrNullResult();
            
            //Capturamos el valor total (count)
            $total_merchant[$i]['total'] = $total[1];
        }
        return $total_merchant;
    }

}
