<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjLabel
 */
class YjLabel
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var boolean
     */
    private $category;

    /**
     * @var string
     */
    private $labelName;

    /**
     * @var integer
     */
    private $owner;

    /**
     * @var integer
     */
    private $addTime;


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
     * Set category
     *
     * @param boolean $category
     * @return YjLabel
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return boolean 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set labelName
     *
     * @param string $labelName
     * @return YjLabel
     */
    public function setLabelName($labelName)
    {
        $this->labelName = $labelName;

        return $this;
    }

    /**
     * Get labelName
     *
     * @return string 
     */
    public function getLabelName()
    {
        return $this->labelName;
    }

    /**
     * Set owner
     *
     * @param integer $owner
     * @return YjLabel
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return integer 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return YjLabel
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return integer 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }
}
