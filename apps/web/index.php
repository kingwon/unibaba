<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
$_top_domain_name = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST'];
$_top_domain_name = ltrim(strtolower(substr($_top_domain_name, -3)), '.');
define('DOMAIN_TOP', $_top_domain_name);
if(DOMAIN_TOP == 'me' || $_GET['debug']){
    define('APP_DEBUG',true);
}

// 定义应用目录
define('APP_PATH','./Hike/');
include './Hike/Common/Conf/config_ucenter.php';
include './uc_client/client.php';
$_POST['submit'] = 1;
$_POST['username'] = 'admin';
$_POST['password'] = '820910';
if(empty($_POST['submit'])) {
    //登录表单
    echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'?example=login">';
    echo '登录:';
    echo '<dl><dt>用户名</dt><dd><input name="username"></dd>';
    echo '<dt>密码</dt><dd><input name="password" type="password"></dd></dl>';
    echo '<input name="submit" type="submit"> ';
    echo '</form>';
} else {
    //通过接口判断登录帐号的正确性，返回值为数组
    list($uid, $username, $password, $email) = uc_user_login($_POST['username'], $_POST['password']);

    setcookie('Example_auth', '', -86400);
    if($uid > 0) {
        //用户登陆成功，设置 Cookie，加密直接用 uc_authcode 函数，用户使用自己的函数
        setcookie('Example_auth', uc_authcode($uid."\t".$username, 'ENCODE'));
        //生成同步登录的代码
        $ucsynlogin = uc_user_synlogin($uid);
        echo '登录成功'.$ucsynlogin.'<br><a href="'.$_SERVER['PHP_SELF'].'">继续</a>';
        exit;
    } elseif($uid == -1) {
        echo '用户不存在,或者被删除';
    } elseif($uid == -2) {
        echo '密码错';
    } else {
        echo '未定义';
    }
}

//检测登录状态
// if(){
    
// }
// $_SERVER['REDIRECT_URL'] = '/Home/Group/index.html';
// var_dump($_SERVER);die;

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
// redirect('/Home/Group/index.html', 5, '页面跳转中……');

// 亲^_^ 后面不需要任何代码了 就是如此简单