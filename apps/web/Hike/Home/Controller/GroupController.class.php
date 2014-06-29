<?php
/**
* 目的地
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.02.25
*/

namespace Home\Controller;
use Think\Controller;
use \Exception;
class GroupController extends Controller {
    //忽略登录
    protected $ignoreLogin = false;
    
    public function index(){
        echo 'welcome to canyouhike.com  网站建设中，敬请关注！';
        // $this->show('welcome to canyouhike.com', 'utf-8');
    }
    
    /**
    * 创建圈子
    *
    */
    public function addByAjax(){
        try{
            $post = I();
            $post['pl_id'] = 10;
            $rs = D('Group')->addByPlace($post);
        }catch(Exception $e){
            json(true, $e->getMessage());
        }
        json(false, '圈子创建成功', U('Group/myGroup'));
    }

    /**
    * 编辑维修记录
    *
    */
    public function edit(){
        $detailId = I('detail_id');
        $data = D('Detail')->getOneById($detailId);
        $staff = D('Staff')->getAllStaffIdNames();
        $type = D('RepairType')->getAllTypeIdNames();
        $parts = D('Parts')->getAllpartsIdNames();
        
        $this->assign('data', $data);
        $this->assign('staff', $staff);
        $this->assign('type', $type);
        $this->assign('parts', $parts);
        $this->display('add');
    }

    /**
    * create or update group
    *
    */
    public function save(){
        try{
            $post = I();
            $post['pl_id'] = 10;
            $rs = D('Group')->save($post);
        }catch(Exception $e){
            json(true, $e->getMessage());
        }
        json(false, '圈子创建成功', U('Group/myGroup'));
    }
    
    /**
    * my group
    *
    */
    public function myGroup(){
        $groups = D('Group')->getMyGroup();
        
    }
}