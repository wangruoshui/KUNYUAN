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
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=16')->select();

        $this->assign('bigtu',$bigtu);

        $numb=M('kunyuan_config');
        //公司地址和办公处
        $di=$numb->where('ID=3')->select();
        $ban=$numb->where('ID=4')->select();
        $this->assign('di',$di);
        $this->assign('ban',$ban);
        //联系电话
        $tele=M('common');
        $tele=$tele->where('kindid=10')->order('commonid desc')->limit(1)->select();
        $this->assign('tele',$tele); 
        //加入我们
        $phone=M('common');
        $phone=$phone->where('kindid=11')->order('commonid desc')->limit(2)->select();
        $this->assign('phone',$phone); 
        


        $this->display();
    }
    public function addmessage(){

        $messages=I("post.");
    if($messages["title"]&&$messages["phone"]&&$messages["content"]&&$messages["email"]&&$messages["name"]){

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
    }else{$this->error('都不能为空，请重新填写！');}
    }

}