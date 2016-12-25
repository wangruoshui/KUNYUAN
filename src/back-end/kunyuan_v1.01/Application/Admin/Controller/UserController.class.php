<?php
/**
 * 用户管理
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-12
 * Time: 20:29
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;
class UserController extends Controller
{
    public function index() {
        if (isset($_SESSION['group_id'])){


            //1、获取总记录
            $count=D('user')->relation(true)->count();

            //2、获取每一页显示的个数
            $pageSize=5;

            //3、创建分页对象
            $page = new Page($count,$pageSize);

            //设计分页样式
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','....');
            $page->setConfig('last',"...$count");
            $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

            //4、分页查
            $result =D('user')->relation(true)->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            //传递数据
            $this->assign('user',$result);

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

            if (!$_POST['username']){
                echo "<script>alert('用户名不能空呢！');</script>";
                //获取数据
                $role=M('role');
                $results=$role->select();
                //dump($results);

                //传递数据
                $this->assign('role',$results);

                //显示视图
                $this->display();
            }elseif (!$_POST['password']){
                echo "<script>alert('密码不能空呢！');</script>";
                //获取数据
                $role=M('role');
                $results=$role->select();
                //dump($results);

                //传递数据
                $this->assign('role',$results);

                //显示视图
                $this->display();
            }else{
                $user=M('user');
                $results=$user->where("username='%s'",I('post.username'))->select();
                if ($results){
                    echo "<script>alert('用户名重复');</script>";
                    //获取数据
                    $role=M('role');
                    $results=$role->select();
                    //dump($results);

                    //传递数据
                    $this->assign('role',$results);

                    //显示视图
                    $this->display();
                }else{
                    $condition = array();
                    $condition['username'] = I('post.username');
                    $condition['password'] = md5(I('post.password'));
                    $condition['sex'] = I('post.sex');
                    $condition['roleid'] = I('post.roleid');
                    $condition['phone'] = I('post.phone');
                    $condition['address'] = I('post.address');
                    $condition['department'] = I('department');
//            dump($condition);

                    //连接数据库
                    $user = M('user');
                    $user_add = $user->data($condition)->add();

                    //判断是否添加成功
                    if ($user_add) {
                        $this->redirect('admin/user/index', '', 0, '添加成功!');
                    } else {
                        $this->redirect('admin/user/index', '', 0, '添加失败!');
                    }
                }



            }


        }else{
            //获取数据
            $role=M('role');
            $results=$role->select();
            //dump($results);

            //传递数据
            $this->assign('role',$results);

            //显示视图
            $this->display();
        }
    }
    public function manage(){
        //获取数据
        if (isset($_POST['submit']) ) {
            if (!$_POST['password']){
                echo "<script>alert('密码不能空呢！');</script>";
                $results = D('user')->where('userid=%d',I('get.id'))->relation(true)->select();
                // dump($results);

                //传递数据
                $this->assign('user',$results);

                //获取数据
                $role1=M('role');
                $results1=$role1->select();
                //dump($results);

                //传递数据
                $this->assign('rolelist',$results1);

//           dump($results);
//           dump($results1);

                $this->display();
            }else{
                //dump(I('get.id'));
                $condition = array();
                $condition['username'] = I('post.username');
                $condition['password'] = md5(I('post.password'));
                if (isset($_POST['sex'])){
                    $condition['sex'] = I('post.sex');
                }else{
                    $condition['sex'] = I('post.sex1');
                }
                $condition['roleid'] = I('post.roleid');
                $condition['phone'] = I('post.phone');
                $condition['address'] = I('post.address');
                $condition['department'] = I('post.department');
                //连接数据库
                $user = M('user');

                $user_manage = $user->where("userid='%s'",I('get.id'))->save($condition);
                //dump($question_manage);
                //判断是否修改成功
                if ($user_manage) {
                    $this->redirect('admin/user/index', '', 0, '修改成功!');
                } else {
                    $this->redirect('admin/user/index', '', 0, '修改失败!');
                }

                //$this->display('index');

            }

        }else{



            $results = D('user')->where('userid=%d',I('get.id'))->relation(true)->select();
            // dump($results);

            //传递数据
            $this->assign('user',$results);

            //获取数据
            $role1=M('role');
            $results1=$role1->select();
            //dump($results);

            //传递数据
            $this->assign('rolelist',$results1);

//           dump($results);
//           dump($results1);

            $this->display();
        }
    }

    public function del(){
        $user=M('user');
        $user_list=$user->where('userid=%d',I('get.id'))->delete();
        if ($user_list){
            $this->redirect('admin/user/index', '', 0, '删除成功!');
        }else{
            $this->redirect('admin/user/index', '', 0, '删除失败!');
        }
    }

    public function show(){
        $results = D('user')->where('userid=%d',I('get.id'))->relation(true)->select();
        // dump($results);

        //传递数据
        $this->assign('user',$results);

        //获取数据
        $role1=M('role');
        $results1=$role1->select();
        //dump($results);

        //传递数据
        $this->assign('rolelist',$results1);

//           dump($results);
//           dump($results1);

        $this->display();
    }
}