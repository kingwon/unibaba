<?php
// mod文件只能被入口文件引用，不能直接访问
if(!defined('IN_DISCUZ')) {
    exit('Access Denied');
}

//获取范围
$areas = array();
$query = DB::query("SELECT * FROM ".DB::table('place')." WHERE 1 AND pl_type = 2");
while($area = DB::fetch($query)){
    $areas[]=$area;
}

//获取目的地
$places = array();
$query = DB::query("SELECT * FROM ".DB::table('place')." WHERE 1 AND pl_type = 1");
while($place = DB::fetch($query)){
    $places[]=$place;
}
var_dump($areas);
var_dump($places);
//获得一个简单的分页，只有上一页和下一页，这个不需要count()数据表中的所有记录
$multi = simplepage(count($list), $perpage, $page, 'mood.php?mod=list');

//数据准备完毕，引入相应的模板，准备输出
include_once template("place/index");