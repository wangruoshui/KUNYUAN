<?php
/**
 * 招聘管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:13
 */

namespace Admin\Controller;


use Think\Controller;

class RecruitController extends Controller{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){
            $this->_db=M("station");
            $results=$this->_db->select();

            $this->assign('result',$results);
            $this->display();
        }else{
            exit('<script>top.location.href="/admin/log/login"</script>');
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
                $this->success('添加成功,3秒后自动为您跳转到招聘列表','/admin/recruit/index',3);
            }else{
                //插入失败
                $this->error('添加失败，3秒后自动跳回添加页面','/admin/recruit/add',3);
            }
        }


    public function manage(){
        $this->_db=M("station");
        $id=I("get.id");
        $results=$this->_db->where("stationid=$id")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function modify(){
        $this->_db=M("station");
        $results=I("post.");
        $id=$results['stationid'];
        $result=$this->_db->save($results);
        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到招聘列表','/admin/recruit/index',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回招聘修改页面',"/admin/recruit/manage/id/$id",3);
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
            $this->success('删除成功,3秒后自动为您跳转到招聘列表','/admin/recruit/index',3);
        }else{
            //插入失败
            $this->error('删除失败，3秒后自动跳回公司简介列表','/admin/recruit/index',3);
        }
    }
}