<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjAuth
 *
 * @ORM\Table(name="yj_auth")
 * @ORM\Entity
 */
class YjAuth
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fid", type="integer", nullable=true)
     */
    private $fid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_tree", type="boolean", nullable=true)
     */
    private $isTree;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=true)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=255, nullable=true)
     */
    private $method;

    /**
     * @var integer
     *
     * @ORM\Column(name="add_time", type="integer", nullable=true)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="platform", type="integer", nullable=true)
     */
    private $platform;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set fid
     *
     * @param integer $fid
     * @return YjAuth
     */
    public function setFid($fid)
    {
        $this->fid = $fid;

        return $this;
    }

    /**
     * Get fid
     *
     * @return integer 
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * Set isTree
     *
     * @param boolean $isTree
     * @return YjAuth
     */
    public function setIsTree($isTree)
    {
        $this->isTree = $isTree;

        return $this;
    }

    /**
     * Get isTree
     *
     * @return boolean 
     */
    public function getIsTree()
    {
        return $this->isTree;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return YjAuth
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
     * Set class
     *
     * @param string $class
     * @return YjAuth
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set method
     *
     * @param string $method
     * @return YjAuth
     */
    public function setMethod($method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get method
     *
     * @return string 
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set addTime
     *
     * @param integer $addTime
     * @return YjAuth
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
     * Set platform
     *
     * @param integer $platform
     * @return YjAuth
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * Get platform
     *
     * @return integer 
     */
    public function getPlatform()
    {
        return $this->platform;
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
