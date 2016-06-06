<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * YjUser
 *
 * @ORM\Table(name="yj_user")
 * @ORM\Entity
 */
class YjUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=true)
     */
    private $userName;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sex", type="boolean", nullable=true)
     */
    private $sex;

    /**
     * @var integer
     *
     * @ORM\Column(name="tel", type="bigint", nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="real_name", type="string", length=255, nullable=true)
     */
    private $realName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="add_time", type="datetime", nullable=true)
     */
    private $addTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="gold", type="integer", nullable=true)
     */
    private $gold;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userName
     *
     * @param string $userName
     * @return YjUser
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set sex
     *
     * @param boolean $sex
     * @return YjUser
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return boolean 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set tel
     *
     * @param integer $tel
     * @return YjUser
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set realName
     *
     * @param string $realName
     * @return YjUser
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * Get realName
     *
     * @return string 
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Set addTime
     *
     * @param \DateTime $addTime
     * @return YjUser
     */
    public function setAddTime($addTime)
    {
        $this->addTime = $addTime;

        return $this;
    }

    /**
     * Get addTime
     *
     * @return \DateTime 
     */
    public function getAddTime()
    {
        return $this->addTime;
    }

    /**
     * Set gold
     *
     * @param integer $gold
     * @return YjUser
     */
    public function setGold($gold)
    {
        $this->gold = $gold;

        return $this;
    }

    /**
     * Get gold
     *
     * @return integer 
     */
    public function getGold()
    {
        return $this->gold;
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
    private $avatar;

    /**
     * @var integer
     */
    private $loginTime;

    /**
     * @var integer
     */
    private $praise;


    /**
     * Set avatar
     *
     * @param string $avatar
     * @return YjUser
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set loginTime
     *
     * @param integer $loginTime
     * @return YjUser
     */
    public function setLoginTime($loginTime)
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * Get loginTime
     *
     * @return integer 
     */
    public function getLoginTime()
    {
        return $this->loginTime;
    }

    /**
     * Set praise
     *
     * @param integer $praise
     * @return YjUser
     */
    public function setPraise($praise)
    {
        $this->praise = $praise;

        return $this;
    }

    /**
     * Get praise
     *
     * @return integer 
     */
    public function getPraise()
    {
        return $this->praise;
    }
}
