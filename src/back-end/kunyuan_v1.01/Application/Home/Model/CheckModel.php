<?php

namespace  Home\Model;
use Think\Model;

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/20
 * Time: 16:04
 */
class CheckModel extends Model
{
    protected $_validate =array(
        array('verify','require','验证码必须！'), //默认情况下用正则进行验证
        array('name','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
        array('value',array(1,2,3),'值的范围不正确！',2,'in'), // 当值不为空的时候判断是否在一个范围内
        array('repassword','password','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致
        array('password','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
    );

}