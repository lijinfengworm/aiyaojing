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
        $query = $this->em->createQuery('select i from AppBundle:YjCollection i ');
        return $query->getArrayResult();
        //return $this->em->getRepository("AppBundle:YjCollection")->findAll();
    }
    public function getCollectionCategoryForLeft(){
        return $this->em->getRepository("AppBundle:YjCollectionCategory")->findAll();
    }

    /**
     * @param $id
     * @param int $type ='SmallImage' 小图， ='MediumImage' 中图 ='OriginalImage'  原始图
     */
    public function getImagesByType($id, $type= 'OriginalImage'){
        $query = $this->em->createQuery('select i from AppBundle:YjImages i where i.id = :id')->setParameter('id', $id);
        $image = $query->getArrayResult();
        if(!empty($image[0])){
            return $image[0][$type];
        }
        return '';
    }
    public function getLeftTree(){
        return 12312;
    }
}