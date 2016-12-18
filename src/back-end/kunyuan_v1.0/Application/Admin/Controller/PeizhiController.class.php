<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/15
 * Time: 16:08
 */

namespace Admin\Controller;


use Think\Controller;

class PeizhiController extends Controller
{
    protected $_db;
    public function index() {
        $this->_db=M("common");
        $condition=array();
        $results=$this->_db->where("kindid=21")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function contactperson() {
        $this->_db=M("common");
        $condition=array();
        $results=$this->_db->where("kindid=11")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function contactphone() {
        $this->_db=M("common");
        $condition=array();
        $results=$this->_db->where("kindid=10")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function bannermanage(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=$id")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function bannermodify(){
        $this->_db=M("common");
        $results=I("post.");
        $id=$results['commonid'];
        $result=$this->_db->save($results);
        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到首页轮播图列表','/admin/peizhi/banner',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回轮播图修改页面',"/admin/peizhi/bannermanage/id/$id",3);
        }
    }
    public function personmanage(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=$id")->select();
        $this->assign('result',$results);
        $this->display();
    }
    public function personmodify(){
        $this->_db=M("common");
        $results=I("post.");
        $id=$results['commonid'];
        $result=$this->_db->save($results);
        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到加入我们列表','/admin/peizhi/contactperson',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回加入我们修改页面',"/admin/peizhi/personmanage/id/$id",3);
        }
    }
    public function phonemanage(){
    $this->_db=M("common");
    $id=I("get.id");
    $results=$this->_db->where("commonid=$id")->select();
    $this->assign('result',$results);
    $this->display();
}
    public function phonemodify(){
        $this->_db=M("common");
        $results=I("post.");
        $id=$results['commonid'];
        $result=$this->_db->save($results);

        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到联系方式列表','/admin/peizhi/contactphone',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回联系方式修改页面',"/admin/peizhi/phonemanage/id/$id",3);
        }
    }

}