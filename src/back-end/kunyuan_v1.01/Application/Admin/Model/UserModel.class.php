<?php

/**
 * 用户表模型类
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-15
 * Time: 9:26
 */
namespace Admin\Model;

use Think\Model;
class UserModel extends Model\RelationModel
{
    protected $_link = array(
        'role'  =>  array(
            'mapping_type'  =>  self::BELONGS_TO,
            'class_name'    =>  'role',
            'foreign_key'   =>  'roleid',
        )
    );

    public function getAllUsers() {
        return $this->select();
    }
}