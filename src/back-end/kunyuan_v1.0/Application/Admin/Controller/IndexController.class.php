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
<<<<<<< HEAD

    	if (isset($_SESSION['group_name'])) {
			//1. 获得数据表admin中的所有记录
			$id=$_SESSION['group_id'];
            $user=M('user');
            $user_role=$user->where("userid=%d",$id)->select();
           // dump($user_role);
            $role=M('role');
            $role_all=$role->where("roleid=%d",$user_role[0]['roleid'])->select();

            //dump($user_role[0]['name']);
=======
    	if ($_SESSION['group_name']) {
			//1. 获得数据表product中的所有记录
			
>>>>>>> b797bdc56f47ac12978cecb0db6bb4d481afbc54
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


<<<<<<< HEAD
=======
        //不显示layout布局
        layout(false);

        //显示视图文件
        $this->display();
    }
>>>>>>> b797bdc56f47ac12978cecb0db6bb4d481afbc54

    //登录方法
    public function captcha(){
        layout(false);
        ob_clean();//验证码清空（擦掉）输出缓冲区

        $config =    array(
            'fontSize'    =>    30,// 验证码字体大小
            'length'      =>    4,// 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            );
        $Verify =     new \Think\Verify($config);
        $Verify->codeSet = '0123456789';
        $Verify->entry(login1);


    }

    public function dologin()
    {
        //执行登陆的处理
        //1、校验验证码
        $captcha =new \Think\Verify();
        if ($captcha->check(I('post.captcha'),'login1')){
            //校验成功
            //2、校验用户名和密码是否有效
            $condition=array();
            $condition['name']=I('post.name');
            $condition['pswd']=I('post.pswd','','');
            //获取指定用户名和密码的详细信息
            //$users=$this->_db->where($condition)->select();
            $user = M('admin')->where($condition)->find();
            //   if ($this->_db->where($condition)->count()){

            if ($user){
                //用户名和密码正确
                //把用户信息写入session中
                session('loginedname',I('post.name'));
                session('group_name',$user['username']);
                session('group_id',$user['password']);


                $this->redirect('admin/index/index', '', 0, '页面跳转中...');

            }else{
                //用户和密码不正确
                echo "<script>alert('用户名或密码不正确！');</script>";
                $this->display('login');
            }
            //3、处理

        }else{
            //校验失败
            echo "<script>alert('验证码错误！');</script>";
            $this->display('login');
        }


    }

    

}