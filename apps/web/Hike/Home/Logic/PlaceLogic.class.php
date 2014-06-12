<?php
/**
* 目的地
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.06.10
*/

namespace Home\Logic;
use Think\Model;

class PlaceLogic extends Model {

    protected $placeObj = '';
    const ADD_CUSTOMER_ERROR = 101;
    const EDIT_CUSTOMER_ERROR = 102;
    const ADD_DETAIL_ERROR = 201;
    const EDIT_DETAIL_ERROR = 202;
    
    public function __construct(){
        $this->placeObj = D('Place', 'Model');
    }
    
    /**
    * 获取所有的目的地
    *
    */
    public function getAllPlace(array $post){
        $area = $this->getList(array('pl_type' => 2));
        // var_dump($area);die;
        foreach ($area as $key => $value) {
            $area[$key]['places'] = $this->getList(array('pl_type' => 1, 'pl_fid' => $value['pl_id']));
        }
        
        return $area;
    }
    
    /**
    * 保存维修记录
    *
    */
    public function save(array $post){
        if(!empty($post['customer_car_number'])){
            $post['customer_car_number'] = strtoupper($post['customer_car_number']);
        }
        if(empty($post['detail_id'])){
            return $this->add($post);
        }else{
            return $this->edit($post);
        }
    }
    
    /**
    * 新增维修记录
    *
    */
    public function add(array $post){
        $custObj = D('Customer');
        $post['detail_create_time'] = $post['customer_create_time'] = date('Y-h-m H:i:s', time());
        $post['customer_create_by'] = $post['detail_create_by'] = 1;
        $custId = $custObj->add($post);
        if(false === $custId){
            throw new Exception("新增客户出错", self::ADD_CUSTOMER_ERROR);
        }
        $post['customer_id'] = $custId;
        $this->placeObj->create($post);
        $detailRs = $this->placeObj->add();
        return $detailRs;
    }
    
    /**
    * 编辑维修记录
    *
    */
    public function edit(array $post){
        $custObj = D('Customer');
        $post['detail_last_modify_time'] = $post['customer_last_modify_time'] = date('Y-h-m H:i:s', time());
        $post['customer_last_modify_by'] = $post['detail_last_modify_by'] = 1;
        if(empty($post['customer_id'])){
            $custRs= $custObj->add($post);
            $post['customer_id'] = $custRs;
        }else{
            $custRs= $custObj->edit($post);
        }
        
        if(false === $custRs){
            throw new Exception("新增客户出错", self::EDIT_CUSTOMER_ERROR);
        }
        $detailRs = $this->placeObj->save($post);
        return $detailRs;
    }
    
    
    
    /**
    * 获取所有目的地
    *
    */
    public function getList(array $args, &$page = false){
        $p = $args['p'];
        unset($args['p']);
        $this->placeObj
            ->alias('p')
            // ->join('__PARTS__ p ON d.detail_fix_parts_id = p.parts_id', 'LEFT')
            ->field(array('*'));
        if($args['pl_type'] == 1){
            $this->placeObj->join('__GROUP__ g ON g.pl_id = p.pl_id', 'LEFT');
        }
        if(false !== $page){
            $countObj = clone $this->placeObj;
            $page = new \Think\Page($countObj->count(), 10);// 实例化分页类 传入总记录数和每页显示的记录数
            $this->placeObj->page(($p ? : $page->firstRow) , $page->listRows);
        }
        $rs = $this->placeObj->where($args)->select();
        // echo $this->placeObj->getLastSql();
        return $rs;
    }
    
    /**
    * 根据id获取单条记录
    *
    */
    public function getOneById($detailId){
        if (empty($detailId)) {
            return '没有找到数据';
        }
        
        $data = $this->getList(array('detail_id' => $detailId));
        return reset($data);
    }
}
