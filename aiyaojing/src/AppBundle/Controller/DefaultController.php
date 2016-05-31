<?php

namespace AppBundle\Controller;

use AppBundle\Core\MyController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends MyController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $list = $this->get("image_service")->getCollection();
        $data = $this->_formatImageList($list);
        return $this->render('AppBundle:default:index.html.twig',[ "list" => $data ]);

    }
    private  function _formatImageList($list){
        $newData = [];

        foreach($list as $k => $val){
            $newData[$k] = $val;
            $coverImage = $val['coverImage'];
            if($coverImage) {
                $newData[$k]['cover'] = $this->get("image_service")->getImagesByType($coverImage, 'smallImage');
            }
        }
        return $newData;
    }

}
