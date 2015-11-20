<?php

namespace Import\Bundle\Entity;

/**
 * Merchant
 */
class Merchant
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var \DateTime
     */
    private $createDatetime;

    /**
     * @var \DateTime
     */
    private $modifyDatetime;

    /**
     * @ORM\OneToMany(targetEntity="Products", mappedBy="merchant", cascade={"persist"})
     */
    protected $products;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Merchant
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Merchant
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return Merchant
     */
    public function setCreateDatetime($createDatetime)
    {
        $this->createDatetime = $createDatetime;

        return $this;
    }

    /**
     * Get createDatetime
     *
     * @return \DateTime
     */
    public function getCreateDatetime()
    {
        return $this->createDatetime;
    }

    /**
     * Set modifyDatetime
     *
     * @param \DateTime $modifyDatetime
     *
     * @return Merchant
     */
    public function setModifyDatetime($modifyDatetime)
    {
        $this->modifyDatetime = $modifyDatetime;

        return $this;
    }

    /**
     * Get modifyDatetime
     *
     * @return \DateTime
     */
    public function getModifyDatetime()
    {
        return $this->modifyDatetime;
    }
}
