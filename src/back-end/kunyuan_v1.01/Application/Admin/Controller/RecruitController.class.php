<?php
/**
 * 招聘管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:13
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;

class RecruitController extends Controller{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){

            //1、获取总记录
            $count=M('station')->count();

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
            $result =M('station')->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            $this->assign('result',$result);

            //6、输出分页码
            $this->assign('pages',$page->show());

            $this->display();
        }else{
            exit('<script>top.location.href="/index.php/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }
    }
    public function add(){
        $this->display();
    }
    public function addinsert(){
            $this->_db=M("station");
            $results=I("post.");
            $result=$this->_db->add($results);

            if($result){
                //插入成功
                $this->success('添加成功,3秒后自动为您跳转到招聘列表','/index.php/admin/recruit/index',3);
            }else{
                //插入失败
                $this->error('添加失败，3秒后自动跳回添加页面','/index.php/admin/recruit/add',3);
            }
        }


    public function manage(){
        $this->_db=M("station");
        $id=I("get.id");
        $results=$this->_db->where("stationid=%d",$id)->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function modify(){
        $this->_db=M("station");
        $results=I("post.");
        $id=$results['stationid'];
        $result=$this->_db->where("stationid=%d",$id)->save($results);
        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到招聘列表','/index.php/admin/recruit/index',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回招聘修改页面',"/index.php/admin/recruit/manage/id/$id",3);
        }
    }
    public function show(){
        $this->_db=M("station");
        $id=I("get.id");
        $results=$this->_db->where("stationid=$id")->select();

        $this->assign('result',$results);
        $this->display();
    }
    public function del(){
        $this->_db=M("station");
        $id=I("get.id");
        $results=$this->_db->where("stationid=$id")->delete();
        if($results){
            //插入成功
            $this->success('删除成功,3秒后自动为您跳转到招聘列表','/index.php/admin/recruit/index',3);
        }else{
            //插入失败
            $this->error('删除失败，3秒后自动跳回公司简介列表','/index.php/admin/recruit/index',3);
        }
    }
}