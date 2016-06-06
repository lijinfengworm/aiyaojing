<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjImages
 *
 * @ORM\Table(name="yj_images")
 * @ORM\Entity
 */
class YjImages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="cid", type="integer", nullable=true)
     */
    private $cid;

    /**
     * @var integer
     *
     * @ORM\Column(name="uid", type="integer", nullable=true)
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="original_image", type="string", length=255, nullable=true)
     */
    private $originalImage;

    /**
     * @var string
     *
     * @ORM\Column(name="medium_image", type="string", length=255, nullable=true)
     */
    private $mediumImage;

    /**
     * @var string
     *
     * @ORM\Column(name="small_image", type="string", length=255, nullable=true)
     */
    private $smallImage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="source", type="boolean", nullable=true)
     */
    private $source;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_use", type="boolean", nullable=true)
     */
    private $isUse;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set cid
     *
     * @param integer $cid
     * @return YjImages
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return integer 
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set uid
     *
     * @param integer $uid
     * @return YjImages
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
     * Set originalImage
     *
     * @param string $originalImage
     * @return YjImages
     */
    public function setOriginalImage($originalImage)
    {
        $this->originalImage = $originalImage;

        return $this;
    }

    /**
     * Get originalImage
     *
     * @return string 
     */
    public function getOriginalImage()
    {
        return $this->originalImage;
    }

    /**
     * Set mediumImage
     *
     * @param string $mediumImage
     * @return YjImages
     */
    public function setMediumImage($mediumImage)
    {
        $this->mediumImage = $mediumImage;

        return $this;
    }

    /**
     * Get mediumImage
     *
     * @return string 
     */
    public function getMediumImage()
    {
        return $this->mediumImage;
    }

    /**
     * Set smallImage
     *
     * @param string $smallImage
     * @return YjImages
     */
    public function setSmallImage($smallImage)
    {
        $this->smallImage = $smallImage;

        return $this;
    }

    /**
     * Get smallImage
     *
     * @return string 
     */
    public function getSmallImage()
    {
        return $this->smallImage;
    }

    /**
     * Set source
     *
     * @param boolean $source
     * @return YjImages
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return boolean 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return YjImages
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
     * Set isUse
     *
     * @param boolean $isUse
     * @return YjImages
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
     * Set label
     *
     * @param string $label
     * @return YjImages
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
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
     * @var string
     */
    private $title;


    /**
     * Set title
     *
     * @param string $title
     * @return YjImages
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
}
