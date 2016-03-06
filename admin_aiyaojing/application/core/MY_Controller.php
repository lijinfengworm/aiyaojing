<?php
/**
 * Created by PhpStorm.
 * User: li
 * Date: 3/4/16
 * Time: 2:46 PM
 */

class MY_Controller extends CI_Controller{
    protected $_data    = '';
    protected $userData = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $tmpUser = $this->session->userdata();

        $this->_data['userInfo'] = $tmpUser;
        //初始化所有人员
        //$this->load->model('Admin_User');
        //$this->_data['allUser'] = $this->Admin_User->getAllUser();
        //左侧菜单栏
        if(!empty($tmpUser['uid']) && $tmpUser){

            $this->userData = $tmpUser;

            $this->admin    = AdminUser::buildFromSession($this->userData);

            $this->load->model('Admin_User');
            if(!empty($this->userData['uid'])) {
                $tmpUserAuth = $this->Admin_User->getMyAuth($this->userData['uid']);
            }

            $tmpTree = $this->db->from('auth')->where(array('is_tree' => 1))->get()->result_array();

            $this->load->vars('adminUser',$this->userData);

            if(!empty($tmpUserAuth)) {
                $tmp = $this->_formatTree($tmpTree, json_decode($tmpUserAuth));

                $this->load->vars('tree', $this->_formatTree($tmpTree, json_decode($tmpUserAuth)));
            }
        }else{
            redirect('/welcome/login');
        }

    }
    private function _formatTree($data, $tmpUserAuth){
        $tmpTree = array();
        if(!$data){
            return $data;
        }


        foreach($data as $v){

            if($v['fid'] == 0 ){
                if(!empty($tmpUserAuth) && in_array($v['id'], $tmpUserAuth) && $this->userData['user_name'] != 'admin') {
                    $tmpTree[$v['id']] = $v;
                    $tmpTree[$v['id']]['uri'] = '/' . $v['class'] . '/' . $v['method'] != '//' ? '/' . $v['class'] . '/' . $v['method'] : '#';
                    $tmpTree[$v['id']]['group'] = [];
                }else{

                    if($this->userData['user_name'] === 'admin'){
                        $tmpTree[$v['id']] = $v;
                        $tmpTree[$v['id']]['uri']    = '/' . $v['class'] . '/' . $v['method'];
                        $tmpTree[$v['id']]['group'] = [];
                    }
                }
            }else{

                if($this->userData['user_name'] != 'admin'){
                    if(in_array($v['id'], $tmpUserAuth)){
                        $tmpTree[$v['fid']]['node'][$v['id']]           = $v;
                        $tmpTree[$v['fid']]['node'][$v['id']]['uri']    = '/' . $v['class'] . '/' . $v['method'];
                        $tmpTree[$v['fid']]['group'][] = $v['class'];
                    }
                }else{
                    $tmpTree[$v['fid']]['node'][$v['id']]           = $v;
                    $tmpTree[$v['fid']]['node'][$v['id']]['uri']    = '/' . $v['class'] . '/' . $v['method'];
                    $tmpTree[$v['fid']]['group'][] = $v['class'];
                }

                //增加三级节点
                foreach($data as $v2){
                    if($v2['fid'] == $v['id']){
                        $tmpTree[$v['fid']]['node'][$v['id']]['node'][$v2['id']]         = $v2;
                        $tmpTree[$v['fid']]['node'][$v['id']]['node'][$v2['id']]['uri']    = '/' . $v2['class'] . '/' . $v2['method'];
                    }
                }
            }
        }
        return $tmpTree;
    }
}
class AdminUser {

    private $id;

    private $username;





    function __construct($id, $username) {
        $this->id = $id;
        $this->username = $username;

    }

    function getId() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }




    /**
     * 检测是否是超级管理员
     */
    function isSuper() {
        return ($this->username == 'admin');
    }

    public static function buildFromSession($userData) {
        if(!empty($userData['uid'])) {
            return new AdminUser($userData['uid'], $userData['user_name']);
        }
        return;
    }

}