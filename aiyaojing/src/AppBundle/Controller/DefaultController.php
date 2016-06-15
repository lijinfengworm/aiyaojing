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
        $currentCid = $request->get('cate', 0);


        $request->getSession()->set("tree", $this->leftTree);

        $list = $this->get("image_service")->getCollection($currentCid);
        $data = $this->_formatImageList($list);

        return $this->render('AppBundle:default:index.html.twig',[ "list" => $data, 'cate' =>$currentCid ]);

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

    /**
     * @param Request $request
     * @Route("/detail", name="detail")
     */
    public function detailAction(Request $request){
        $currentCate = $request->get('cate', 0);
        $collect = $request->get('collect', 0);
        $images = $this->get("image_service")->getImagesByCid($collect);
	foreach($images as &$val){
		$val['base'] = self::base64_encode_image("../../admin_aiyaojing/".$val['mediumImage']);
	}
        $collection = $this->get("image_service")->getCollectionById($collect);
        $userInfo = [];
        if(!empty($collection)){
            $userInfo = $this->get("image_service")->getUserInfoByCid($collection[0]['uid']);
        }


        return $this->render('AppBundle:default:detail.html.twig', [ 'list' => $images, 'collect' => $collection,  'cate' =>$currentCate, 'user' => $userInfo ]);
    }
    private static function  base64_encode_image($filename='', $filetype='') {
        if ($filename) {
            $type = getimagesize($filename);
            $imgbinary = fread(fopen($filename, "r"), filesize($filename));
            return 'data:' . $type['mime'] . ';base64,' . base64_encode($imgbinary);
        }
    }

}
