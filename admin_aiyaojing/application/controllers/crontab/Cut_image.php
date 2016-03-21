<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/21/16
 * Time: 11:33 AM
 */

class Cut_image extends CI_Controller{
    private $baseDir;
    function __construct(){
        parent::__construct();
        $this->baseDir = 'static/uploads/'.date('Ymd').'/';
        self::makeDir($this->baseDir);
        self::makeDir($this->baseDir.'original/');
        self::makeDir($this->baseDir.'medium/');
        self::makeDir($this->baseDir.'small/');

    }
    const COLLECT_TABLE = 'collecting_data';
    const IMAGES_TABLE = 'images';
    function index(){
        $list = self::getCollectData();
        foreach($list as $val){
            $newData = [];
            if($val){
                $path = pathinfo($val['file_name']);
                $extension = $path['extension'];
                $tmpFile = $val['source'].$val['file_name'];
                $newFileName = sha1($tmpFile).'.'.$extension;
                $newImage = $this->baseDir.'original/'.$newFileName;
                $oldImage = 'static/tmp_uploads/'.$val['file_name'];
                rename($oldImage, $newImage);
                $this->cutImages($newFileName,$newImage, 'medium');
                $this->cutImages($newFileName,$newImage, 'small');
                $newData = [
                    'original_image' => $newImage,
                    'medium_image' => $this->baseDir.'medium/medium_'.$newFileName,
                    'small_image' =>  $this->baseDir.'small/small_'.$newFileName,
                    'add_time' => time(),
                    'source' => 'animu'
                ];
                self::insertImage($newData);
                self::updateCollect($val['id']);
            }
        }
    }
    private static function updateCollect($id){
        return get_instance()->db->from(self::IMAGES_TABLE, ['is_cut' => 1], [ 'id' => $id ]);
    }
    private static function insertImage($data){
        return get_instance()->db->insert(self::IMAGES_TABLE, $data);
    }
    private function cutImages($fileName, $file, $type = 'medium'){
        $image = new lib_image_imagick();
        $image->open($file);
        $saveFilePath = $this->baseDir.$type.'/'.$type.'_'.$fileName;
        if($type == 'medium'){
            $image->resize_to(710, 470, 'scale_fill');
            //$image->add_text('1024i.com', 10, 20);
            //$image->add_watermark('1024i.gif', 10, 50);
            $image->save_to($saveFilePath);
        }elseif($type == 'small'){
            $image->resize_to(430, 250, 'scale_fill');
            //$image->add_text('1024i.com', 10, 20);
            //$image->add_watermark('1024i.gif', 10, 50);
            $image->save_to($saveFilePath);
        }else{
            return;
        }

    }
    private static function getCollectData(){
        $result = get_instance()->db->from(self::COLLECT_TABLE)->where( ['is_cut' => 1 ] )->get()->result_array();
        return $result;
    }
    private static function makeDir($dir, $mode=0755){
        if (!$dir) return false;
        if(!file_exists($dir)) {
            return mkdir($dir,$mode,true);
        } else {
            return true;
        }
    }
}