<?php
/**
* 目的地
* @copyright kingwon <kingwon680@gmail.com>
* @createtime 2014.06.10
*/

namespace Home\Logic;
use Think\Model;

class GroupLogic extends Model {

    protected $groupObj = '';
    const ADD_CUSTOMER_ERROR = 101;
    const EDIT_CUSTOMER_ERROR = 102;
    const ADD_DETAIL_ERROR = 201;
    const EDIT_DETAIL_ERROR = 202;
    
    public function __construct(){
        $this->groupObj = D('Group', 'Model');
    }
    
    /**
    * 创建圈子
    */
    public function add(array $args){
        $args['gr_type'] = $args['gr_type'] ? : 1;
        $this->groupObj->create($args);
        $placeId = $this->groupObj->add();
        if(false === $placeId){
            throw new Exception("新增圈子出错", self::ADD_CUSTOMER_ERROR);
        }
        return $placeId;
    }
    
    /**
    * create group by place
    *
    */
    public function addByPlace(array $args){
        $placeInfo = D('Place')->getOneById($args['pl_id']);
        $args = array(
            'gr_name' =>  $placeInfo['pl_name'] . '圈',
            'pl_id' => $args['pl_id'],
            'gr_create_by' => 1,
            'gr_createtime' => date('Y-m-d H:i:s'),
            'gr_admin' => 1,
            'gr_people_number' => 1,
            'gr_type' => 4,
            'gr_admin_num' => 1,
            'gr_member' => '1'
            );
        return $this->add($args);
    }
    
    /**
    * join the group
    *
    */
    public function join(array $args){
        $placeInfo = D('Place')->getOneById($args['pl_id']);
        
    }
    
    /**
    * find the group by groupId
    *
    */
    public function getOneById(intval $groupId){
        $this->groupObj->where(array('gr_isdelete' => 1, 'gr_id' => $groupId))->find();
    }
}