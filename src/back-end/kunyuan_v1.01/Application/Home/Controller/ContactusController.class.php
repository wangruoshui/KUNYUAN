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

        //联系电话
        $tele=M('common');
        $tele=$tele->where('kindid=10')->order('commonid desc')->limit(1)->select();
        $this->assign('tele',$tele); 
        //加入我们
        $phone=M('common');
        $phone=$phone->where('kindid=11')->order('commonid desc')->limit(2)->select();
        $this->assign('phone',$phone); 
        
        //尾部
        $numb=M('kunyuan_config');
        $numb1=$numb->where('ID=2')->select();
        $email=$numb->where('ID=1')->select();
        $qq=$numb->where('ID=19')->select();
        $addr=$numb->where('ID=3')->select();
        $off=$numb->where('ID=4')->select();
        $beian=$numb->where('ID=7')->select();
        $weixin2wm=$numb->where('ID=18')->select();
        $this->assign('numb',$numb1);
        $this->assign('email',$email);
        $this->assign('qq',$qq);
        $this->assign('addr',$addr);
        $this->assign('off',$off);
        $this->assign('beian',$beian);
        $this->assign('weixin2wm',$weixin2wm);

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
            $this->success('提交成功','../proTechnology/index',3);
        }else{
            //插入失败
            $this->error('提交失败','../contactus/index',3);
        }
    }else{$this->error('都不能为空，请重新填写！');}
    }

}