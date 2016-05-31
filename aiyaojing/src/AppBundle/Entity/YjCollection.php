<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjCollection
 *
 * @ORM\Table(name="yj_collection")
 * @ORM\Entity
 */
class YjCollection
{
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="text", length=65535, nullable=true)
     */
    private $abstract;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_use", type="boolean", nullable=true)
     */
    private $isUse;

    /**
     * @var integer
     *
     * @ORM\Column(name="show_time", type="integer", nullable=true)
     */
    private $showTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="cate_id", type="smallint", nullable=true)
     */
    private $cateId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set title
     *
     * @param string $title
     * @return YjCollection
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
     * Set abstract
     *
     * @param string $abstract
     * @return YjCollection
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    /**
     * Get abstract
     *
     * @return string 
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return YjCollection
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

    /**
     * Set uid
     *
     * @param integer $uid
     * @return YjCollection
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set isUse
     *
     * @param boolean $isUse
     * @return YjCollection
     */
    public function setIsUse($isUse)
    {
        $this->isUse = $isUse;

        return $this;
    }

    /**
     * Get isUse
     *
     * @return boolean 
     */
    public function getIsUse()
    {
        return $this->isUse;
    }

    /**
     * Set showTime
     *
     * @param integer $showTime
     * @return YjCollection
     */
    public function setShowTime($showTime)
    {
        $this->showTime = $showTime;

        return $this;
    }

    /**
     * Get showTime
     *
     * @return integer 
     */
    public function getShowTime()
    {
        return $this->showTime;
    }

    /**
     * Set cateId
     *
     * @param integer $cateId
     * @return YjCollection
     */
    public function setCateId($cateId)
    {
        $this->cateId = $cateId;

        return $this;
    }

    /**
     * Get cateId
     *
     * @return integer 
     */
    public function getCateId()
    {
        return $this->cateId;
    }

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
     * @var integer
     */
    private $coverImage;


    /**
     * Set coverImage
     *
     * @param integer $coverImage
     * @return YjCollection
     */
    public function setCoverImage($coverImage)
    {
        $this->coverImage = $coverImage;

        return $this;
    }

    /**
     * Get coverImage
     *
     * @return integer 
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }
}
