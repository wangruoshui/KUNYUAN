<?php
/**
 * 角色管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:09
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;

class RoleController extends Controller{
    public function index() {
        if (isset($_SESSION['group_id'])){
            //1、获取总记录
            $count=M('role')->count();

            //2、获取每一页显示的个数
            $pageSize=2;

            //3、创建分页对象
            $page = new Page($count,$pageSize);

            //设计分页样式
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','....');
            $page->setConfig('last',"...$count");
            $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

            //4、分页查
            $role_list =M('role')->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            //传递数据
            $this->assign('role',$role_list);

            //6、输出分页码
            $this->assign('pages',$page->show());



            //显示视图
            $this->display();
        }else{
            exit('<script>top.location.href="/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }
    }
    public function add(){
        //获取数据
        if (isset($_POST['submit'])) {

            $condition = array();
            $condition['rolename'] = I('post.rolename');
            $condition['description'] = I('post.description');
            if (I('post.product')){
                $condition['product']=1;
            }
            if (I('post.courier')){
                $condition['courier']=1;
            }
            if (I('post.message')){
                $condition['message']=1;
            }
            if (I('post.question')){
                $condition['question']=1;
            }
            if (I('post.news')){
                $condition['news']=1;
            }
            if (I('post.policy')){
                $condition['policy']=1;
            }
            if (I('post.common')){
                $condition['common']=1;
            }
            if (I('post.recruit')){
                $condition['recruit']=1;
            }
            if (I('post.admin')){
                $condition['admin']=1;
            }
            if (I('post.role')){
                $condition['role']=1;
            }


            //连接数据库
            $role = M('role');
            $role_add = $role->data($condition)->add();

            //判断是否添加成功
            if ($role_add) {
                $this->redirect('admin/role/index', '', 0, '添加成功!');
            } else {
                $this->redirect('admin/role/add', '', 0, '添加失败!');
            }
        }else{
            $this->display();
        }
    }
    public function manage(){
        //获取数据
        if (isset($_POST['submit'])) {

            $condition = array();
            $condition['rolename'] = I('post.rolename');
            $condition['description'] = I('post.description');
            if (I('post.product')){
                $condition['product']=1;
            }else{$condition['product']=0;}
            if (I('post.courier')){
                $condition['courier']=1;
            }else{$condition['courier']=0;}
            if (I('post.message')){
                $condition['message']=1;
            }else{$condition['message']=0;}
            if (I('post.question')){
                $condition['question']=1;
            }else{ $condition['question']=0;}
            if (I('post.news')){
                $condition['news']=1;
            }else{$condition['news']=0;}
            if (I('post.policy')){
                $condition['policy']=1;
            }else{$condition['policy']=0;}
            if (I('post.common')){
                $condition['common']=1;
            }else{$condition['common']=0;}
            if (I('post.recruit')){
                $condition['recruit']=1;
            }else{$condition['recruit']=0;}
            if (I('post.admin')){
                $condition['admin']=1;
            }else{ $condition['admin']=0;}
            if (I('post.role')){
                $condition['role']=1;
            }else{$condition['role']=0;}
//            dump($condition);
//            dump($_GET['id']);
//            dump($_POST);
//            exit;

            //连接数据库
            $role = M('role');
            $role_add = $role->where("roleid='%s'",I('get.id'))->save($condition);

            //判断是否添加成功
            if ($role_add) {
                $this->redirect('admin/role/index', '', 0, '修改成功!');
            } else {
                $this->redirect("admin/role/index", '', 0, '修改失败!');
            }
        }else{
            $role = M('role');
            $role_add = $role->where("roleid='%s'",I('get.id'))->select();

            $this->assign('role',$role_add);

            $this->display();
        }
    }
    public function show(){
        $role=M('role');
        $role_list=$role->where('roleid=%d',I('get.id'))->select();
        //dump($courier_list);

        //传递数据
        $this->assign('role',$role_list);

        $this->display();
    }
    public function del(){
        $role=M('role');
        $user=M('user');
        $r=$user->where("roleid='%s'",I('get.id'))->select();
        if ($r){
            echo "<script>alert('请把相应用户删除，再删除此角色！');</script>";
            $this->display('index');
        }else{
            $role_list=$role->where('roleid=%d',I('get.id'))->delete();
            if ($role_list){
                $this->redirect('admin/role/index', '', 0, '删除成功!');
            }else{
                $this->redirect('admin/role/index', '', 0, '删除失败!');
            }
        }


    }

}