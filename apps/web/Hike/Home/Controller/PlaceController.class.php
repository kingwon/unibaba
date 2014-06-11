<?php
/**
* 目的地
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.02.25
*/

namespace Home\Controller;
use Think\Controller;
use \Exception;
class PlaceController extends Controller {
    
    protected $placeLogic = '';
    
    public function index(){
        $this->placeLogic = D('Place');
        $places = $this->placeLogic->getAllPlace();
        // var_dump($place);
        $this->assign('places' , $places);
        $this->display();
    }
    
    /**
    * 新增维修记录
    *
    */
    public function add(){
        $staff = D('Staff')->getAllStaffIdNames();
        $type = D('RepairType')->getAllTypeIdNames();
        $parts = D('Parts')->getAllpartsIdNames();
        
        $this->assign('staff', $staff);
        $this->assign('type', $type);
        $this->assign('parts', $parts);
        $this->display();
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
    * 保存维修记录
    *
    */
    public function save(){
        try{
            $post = I();
            $rs = D('Detail')->save($post);
        }catch(Exception $e){
            json(true, $e->getMessage());
        }
        json(false, null, U('Repair/lists'));
    }
}