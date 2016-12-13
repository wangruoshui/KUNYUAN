<?php
/**
 * 后台主页
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:11
 */
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
    	if (1) {
			//1. 获得数据表product中的所有记录
			
			//2、分配数据到视图（模板）
			
		
			//3、显示是视图
			$this->display();
		}else
		{
			 $this->display('login');
		}
        
    }

    //登录方法
    public function login(){

    	$this->display();
    }

}