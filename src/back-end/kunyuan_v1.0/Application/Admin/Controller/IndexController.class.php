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

    	if (isset($_SESSION['group_name'])) {
			//1. 获得数据表admin中的所有记录
			$id=$_SESSION['group_id'];
            $user=M('user');
            $user_role=$user->where("userid=%d",$id)->select();
           // dump($user_role);
            $role=M('role');
            $role_all=$role->where("roleid=%d",$user_role[0]['roleid'])->select();

            //dump($user_role[0]['name']);
			//2、分配数据到视图（模板）
			$this->assign('role_all',$role_all);
            $this->assign('user',$user_role[0]['username']);
            $this->assign('userid',$user_role[0]['userid']);
            $this->assign('usersex',$user_role[0]['sex']);

            //关联表，数据模型类
            $results = D('user')->relation(true)->where("userid=%d",$user_role[0]['userid'])->select();
             //dump($results);
           // exit;

            //获取列表
            $role_notes=M('role_notes');
            $role_list=array();
            if ($results[0]['role']['product']==1){
                $role_list[]=$role_notes->where('id=1')->select();
            }
            if ($results[0]['role']['courier']==1){
                $role_list[]=$role_notes->where('id=7')->select();
            }
            if ($results[0]['role']['message']==1){
                $role_list[]=$role_notes->where('id=8')->select();
            }
            if ($results[0]['role']['question']==1){
                $role_list[]=$role_notes->where('id=6')->select();
            }
            if ($results[0]['role']['news']==1){
                $role_list[]=$role_notes->where('id=3')->select();
            }
            if ($results[0]['role']['policy']==1){
                $role_list[]=$role_notes->where('id=4')->select();
            }
            if ($results[0]['role']['common']==1){
                $role_list[]=$role_notes->where('id=2')->select();
            }
            if ($results[0]['role']['recruit']==1){
                $role_list[]=$role_notes->where('id=5')->select();
            }
            if ($results[0]['role']['admin']==1){
                $role_list[]=$role_notes->where('id=9')->select();
            }
            if ($results[0]['role']['role']==1){
                $role_list[]=$role_notes->where('id=10')->select();
            }
           // dump($role_list);
            //exit;

            //传递数据
            $this->assign('role_list',$role_list);


			//3、显示是视图
			$this->display();
		}else
		{
            $this->redirect('admin/log/login', '', 0, '删除成功!');
		}
        
    }



}