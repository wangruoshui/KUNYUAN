<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-15
 * Time: 19:37
 */

namespace Admin\Controller;


use Think\Controller;

class LogController extends Controller
{
    //登录方法
    public function login(){



        //显示视图文件
        $this->display();
    }

    public function logout(){

        //session_destroy( );
        session('group_id',NULL);
        session('group_name',NULL);
//        session('[destroy]');
        session('[destroy]');

        if (isset($_SESSION)){
            $this->redirect('login');
        }

    }

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
            $condition['username']=I('post.name');
            $condition['password']=md5(I('post.pswd'));
            //获取指定用户名和密码的详细信息
            //$users=$this->_db->where($condition)->select();
            $user = M('user')->where($condition)->find();
            //   if ($this->_db->where($condition)->count()){

            if ($user){
                //用户名和密码正确
                //把用户信息写入session中
//                dump($user);
//                exit;
                session('group_name',$user['username']);
                session('group_id',$user['userid']);
//                dump($_SESSION);
//                exit;


                $this->redirect('/admin/index/index');

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