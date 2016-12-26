<?php
/**
 * 问题管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:12
 */

namespace Admin\Controller;


use Library\Page;
use Think\Controller;
use Think\Crypt\Driver\Think;

class QuestionController extends Controller{




    public function index() {
        if (isset($_SESSION['group_id'])){

            //1、获取总记录
            $count=M('question')->count();

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
            $ques_list =M('question')->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            $this->assign('question',$ques_list);

            //6、输出分页码
            $this->assign('pages',$page->show());


            //显示视图
            $this->display();
        }else{
            exit('<script>top.location.href="/index.php/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }

    }
    public function add(){
        //获取数据
        if (isset($_POST['submit'])) {

            $condition = array();
            $condition['userid'] = $_SESSION['group_id'];
            $condition['question'] = I('post.question');
            $condition['answer'] = I('post.answer');


            //连接数据库
            $question = M('question');
            $question_add = $question->data($condition)->add();

            //判断是否添加成功
            if ($question_add) {
                $this->redirect('/index.php/admin/question/index', '', 0, '添加成功!');
            } else {
                $this->redirect('/index.php/admin/question/index', '', 0, '添加失败!');
            }


        }else{
            $this->display();
        }

    }
    public function manage(){

        //获取数据
        if (isset($_POST['submit'])) {
            //dump(I('get.id'));
            $condition = array();
            $condition['userid'] = $_SESSION['group_id'];
            $condition['question'] = I('post.question');
            $condition['answer'] = I('post.answer');
            //dump($condition);

            //连接数据库
            $question = M('question');

            $question_manage = $question->where("questionid='%s'",I('get.id'))->save($condition);
            //dump($question_manage);
            //判断是否添加成功
            if ($question_manage) {
                $this->redirect('/index.php/admin/question/index', '', 0, '修改成功!');
            } else {
                $this->redirect('/index.php/admin/question/index', '', 0, '修改失败!');
            }

            //$this->display('index');

        }else{
            //连接数据库
            $question=M('question');
            $ques_list=$question->where('questionid=%d',I('get.id'))->select();
            //dump($ques_list);

            //传递数据
            $this->assign('question',$ques_list);

            $this->display();
        }
    }
    public function show(){
        $question=M('question');
        $ques_list=$question->where('questionid=%d',I('get.id'))->select();
        //dump($ques_list);

        //传递数据
        $this->assign('question',$ques_list);

        $this->display();
    }
    public function del(){
        $question=M('question');
        $ques_list=$question->where('questionid=%d',I('get.id'))->delete();
        if ($ques_list){
            $this->redirect('/index.php/admin/question/index', '', 0, '删除成功!');
        }else{
            $this->redirect('/index.php/admin/question/index', '', 0, '删除失败!');
        }

    }
}