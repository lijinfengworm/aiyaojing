<?php

/**
 * Created by PhpStorm.
 * User: worm
 * Date: 5/29/16
 * Time: 11:29 PM
 */
namespace AppBundle\Service;

class ImagesService
{
    protected $em;
    public function  __construct($em)
    {
        $this->em = $em;
    }

    public function getCollection(){
        //$this->em->createQuery()->getResult();
        return $this->em->getRepository("AppBundle:YjCollection")->findAll();
    }
}