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

    public function getCollection($cid){
        if($cid){
            $query = $this->em->createQuery('select i from AppBundle:YjCollection i where i.cateId = :id order by i.showTime DESC')->setParameter("id", $cid);

        }else{
            $query = $this->em->createQuery('select i from AppBundle:YjCollection i order by i.showTime DESC ');
        }

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
    public function getImagesByCid($cid){
        $query = $this->em->createQuery('select i from AppBundle:YjImages i where i.cid = :id')->setParameter('id', $cid);
        $image = $query->getArrayResult();
        return $image;
    }
    public function getCollectionById($id){
        $query = $this->em->createQuery('select i from AppBundle:YjCollection i where i.id = :id')->setParameter('id', $id);
        $collection = $query->getArrayResult();
        return $collection;
    }
    public function getUserInfoByCid($uid){

        if($uid){
            $user = $this->em->createQuery('select i from AppBundle:YjUser i where i.id = :id')->setParameter('id', $uid);

            $userInfo = $user->getArrayResult();

            if(!empty($userInfo)){
                $attrQuery = $this->em->createQuery('select l from AppBundle:YjLabel l where l.owner = :owner')->setParameter('owner', $userInfo[0]['id']);
                $attr = $attrQuery->getArrayResult();
                $userInfo[0]['attr'] = $attr;
            }
            return $userInfo;
        }
        return [];
    }

}
