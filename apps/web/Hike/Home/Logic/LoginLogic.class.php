<?php
/**
* 目的地
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.06.10
*/

namespace Home\Logic;
use Think\Model;

class LoginLogic extends Model {

    const ADD_ERROR = 101;
    const EDIT_ERROR = 102;
    const NO_DATA_ERRROR = 400;
    
    /**
    * 检查登录
    */
    public function checkLogin(){
        
    }
    
    /**
    * set the session
    *
    */
    public function setSession(){
        
    }
    
    /**
    * check user account
    *
    */
    public function checkAccount($userName, $password){
        
    }
}