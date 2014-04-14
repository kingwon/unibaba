<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: plan.php 01 2014.04.15 01:19:00  kingwon680@gmail.com $
 */

// 定义应用 ID 全局记录当前用户所在位置，不需要可定义为0 不要省略
define('APPTYPEID', 0);
define('CURSCRIPT', 'plan');


//====================================
// 基础文件引入
//====================================
require './source/class/class_core.php';

//====================================
//模块定义以及模块缓存定义
//====================================
$modarray = array('plan');

// 判断 $mod 的合法性

$mod = !in_array($discuz->var['mod'], $modarray) ? 'index' : $discuz->var['mod'];

//定义当前模块常量
define('CURMODULE', $mod);

//====================================
// 加载核心处理,各程序入口文件代码相同
//====================================
C::app()->init();

//====================================
// 以下内容由各个模块根据需要自行撰写程序运行环境
// 位于核心处理与mod加载之前，可以处理一些各mod共用的一些数据，或入口权限判断等...
// 由于本功能只需要游客做发布的限制，所以判断就要放到module/mood/publish.php中去了。
//====================================
if(!$a){
    //showmessage('heheh');
}
echo 'hello world!';die;
//===================================
//加载 mod
//===================================

require DISCUZ_ROOT.'./source/module/plan/plan_'.$mod.'.php';
