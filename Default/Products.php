<?php

namespace Import\Bundle\Entity\Default;

/**
 * Products
 */
class Products
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $initDatetime;

    /**
     * @var \DateTime
     */
    private $expireDatetime;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $createDatetime;

    /**
     * @var \DateTime
     */
    private $modifyDatetime;


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
     * Set title
     *
     * @param string $title
     *
     * @return Products
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Products
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set initDatetime
     *
     * @param \DateTime $initDatetime
     *
     * @return Products
     */
    public function setInitDatetime($initDatetime)
    {
        $this->initDatetime = $initDatetime;

        return $this;
    }

    /**
     * Get initDatetime
     *
     * @return \DateTime
     */
    public function getInitDatetime()
    {
        return $this->initDatetime;
    }

    /**
     * Set expireDatetime
     *
     * @param \DateTime $expireDatetime
     *
     * @return Products
     */
    public function setExpireDatetime($expireDatetime)
    {
        $this->expireDatetime = $expireDatetime;

        return $this;
    }

    /**
     * Get expireDatetime
     *
     * @return \DateTime
     */
    public function getExpireDatetime()
    {
        return $this->expireDatetime;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Products
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set createDatetime
     *
     * @param \DateTime $createDatetime
     *
     * @return Products
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
     * @return Products
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

