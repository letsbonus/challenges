<?php

namespace LetsBonusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="productos")
 */
class Producto {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=200)
     */
    private $title;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="decimal", scale=1)
     */
    private $price;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $init_date;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $expiry_date;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $merchant_address;
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    private $merchant_name;
    
    public function __construct($title, $description, $price, $init_date, $expiry_date, $merchant_address, $merchant_name) {
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->setDates($init_date, $expiry_date);
        $this->merchant_address = $merchant_address;
        $this->merchant_name = $merchant_name;
    }
    
    //Funcion en la que tratamos las fechas del fichero de texto
    private function setDates($init, $expiry){
        $init_date['full'] = explode("T", $init);
        $init_date['date'] = $init_date['full'][0];
        $init_date['time'] = substr($init_date['full'][1], 0, 8);
        
        $this->init_date = date_create($init_date['date'] . " " . $init_date['time']);
        
        $expiry_date['full'] = explode("T", $expiry);
        $expiry_date['date'] = $expiry_date['full'][0];
        $expiry_date['time'] = substr($expiry_date['full'][1], 0, 8);
        
        $this->expiry_date = date_create($expiry_date['date'] . " " . $expiry_date['time']);
    }
    
}