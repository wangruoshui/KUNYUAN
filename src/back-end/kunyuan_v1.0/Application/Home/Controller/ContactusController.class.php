<?php
//前台页面----联系我们
/*
 * time:2016-12-7
 * veson:v1.0
 * ahthor:maxing
*/
namespace Home\Controller;
use Think\Controller;

class ContactusController extends Controller
{
    protected  $_db;
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
        $this->_db=M("message");
    }
    public function index()
    {
        $this->display();
    }
    public function addmessage(){
        $messages=I("post.");
        $messages['time']=date("Y-m-d H:i:s",time());
//        dump($messages);
//        exit;
        $result=$this->_db->add($messages);
      //  dump($result);
        if($result){
            //插入成功
            $this->success('提交成功,3秒后自动为您跳转到产品页面','../proTechnology/index',3);
        }else{
            //插入失败
            $this->error('提交失败，3秒后自动跳回留言界面','../contactus/index',3);
        }
    }

}