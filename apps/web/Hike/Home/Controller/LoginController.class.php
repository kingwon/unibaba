<?php
/**
* 登录控制器
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.06.17
*/

namespace Home\Controller;
use Think\Controller;
use \Exception;
class LoginController extends Controller {
    
    
    public function index(){
        echo 'welcome to canyouhike.com  网站建设中，敬请关注！';
        // $this->show('welcome to canyouhike.com', 'utf-8');
    }
    
    /**
    * login
    *
    */
    public function login(){
        $this->display();
    }
    
    /**
    * do login
    *
    */
    public function doLogin(){
        try{
            $post = I();
            D('User')->checkAccount($post['username'], $post['password']);
        }catch(Exception $re){
            json(true, $e->getMessage());
        }
        json(false, '登录成功', U('Group/myGroup'));
    }
    
}