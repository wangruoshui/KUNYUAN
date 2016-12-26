<?php
/**
 * 留言管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:42
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;

class MessageController extends Controller{
    public function index() {
        if (isset($_SESSION['group_id'])){

            //判断权限
            $results = D('user')->relation(true)->where("userid=%d",$_SESSION['group_id'])->select();
//            dump($results);
//            exit;

            //传递数据
//            $this->assign('message',$message_list);
            $this->assign('roleid',$results[0]['role']['roleid']);

            //1、获取总记录
            $count=M('message')->count();

            //2、获取每一页显示的个数
            $pageSize=1;

            //3、创建分页对象
            $page = new Page($count,$pageSize);

            //设计分页样式
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','....');
            $page->setConfig('last',"...$count");
            $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

            //4、分页查
            $message_list =M('message')->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            $this->assign('message',$message_list);

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
        $this->display();
    }
    public function manage(){
        //获取数据
        if (isset($_POST['submit'])) {
            //dump(I('get.id'));
            $condition = array();
            if (isset($_POST['show_cover_pic'])){
                $condition['status'] = $_POST['show_cover_pic'];
            }else{
                $condition['status'] = $_POST['show_cover_pic1'];
            }


            //连接数据库
            $message = M('message');

            $message_manage = $message->where("messageid='%s'",I('get.id'))->save($condition);
            //dump($question_manage);
            //判断是否添加成功
            if ($message_manage) {
                $this->redirect('admin/message/index', '', 0, '修改成功!');
            } else {
                $this->redirect('admin/message/index', '', 0, '修改失败!');
            }

            //$this->display('index');

        }else{
            //连接数据库
            $message=M('message');
            $message_list=$message->where('messageid=%d',I('get.id'))->select();
            //dump($courier_list);

            //传递数据
            $this->assign('message',$message_list);

            $this->display();
        }
    }
    public function show(){
        $message=M('message');
        $message_list=$message->where('messageid=%d',I('get.id'))->select();
        //dump($courier_list);

        //传递数据
        $this->assign('message',$message_list);

        $this->display();
    }
    public function del(){

        $message = M('message');

        $message_manage = $message->where("messageid='%s'",I('get.id'))->delete();
        //dump($question_manage);
        //判断是否添加成功
        if ($message_manage) {
            $this->redirect('admin/message/index', '', 0, '删除成功!');
        } else {
            $this->redirect('admin/message/index', '', 0, '删除失败!');
        }

        //$this->display('index');

    }
public function manage1(){
    $condition = array();
    $condition['status']=1;
    $message = M('message');

    $message_manage = $message->where("messageid='%s'",I('post.id'))->save($condition);
}
}