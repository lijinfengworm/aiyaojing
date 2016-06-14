<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjCollectingData
 *
 * @ORM\Table(name="yj_collecting_data")
 * @ORM\Entity
 */
class YjCollectingData
{
    /**
     * @var string
     *
     * @ORM\Column(name="source", type="string", length=255, nullable=true)
     */
    private $source;

    /**
     * @var string
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_use", type="boolean", nullable=true)
     */
    private $isUse;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_cut", type="boolean", nullable=true)
     */
    private $isCut;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set source
     *
     * @param string $source
     * @return YjCollectingData
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     * @return YjCollectingData
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set isUse
     *
     * @param boolean $isUse
     * @return YjCollectingData
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
     * Set type
     *
     * @param integer $type
     * @return YjCollectingData
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isCut
     *
     * @param boolean $isCut
     * @return YjCollectingData
     */
    public function setIsCut($isCut)
    {
        $this->isCut = $isCut;

        return $this;
    }

    /**
     * Get isCut
     *
     * @return boolean 
     */
    public function getIsCut()
    {
        return $this->isCut;
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
}
