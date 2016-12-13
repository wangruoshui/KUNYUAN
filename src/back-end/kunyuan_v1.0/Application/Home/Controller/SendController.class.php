<?php
//前台页面----样本寄送
//author:maxing
namespace Home\Controller;
use Think\Controller;

class SendController extends Controller
{
    protected $_db;
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    public function index()
    {
        $this->_db=M("privince");
        $result=$this->_db->select("parentid=0");
        $this->assign("result",$result);
        $this->display();
    }
    //利用ajax实现省市区
    public function province(){
        $this->_db=M("privince");
       $code=I("post.parentid");
        $result=$this->_db->where("parentid=$code")->select();
        $citys = array();

        while($row = mysqli_fetch_assoc($result)){
            $citys[] = $row;
        }
        $citysStr = json_encode($result);
    echo $citysStr;
    }

    public function addsend(){
        $this->_db=M("courier");
        $messages=I("post.");
        $message['time']=date("Y-m-d H:i:s",time());
        $message['username']=$messages['username'];
        $message['address']=$messages['province'].'-'.$messages['city'].'-'.$messages['area'].'-'.$messages['town'];
        $message['phone']=$messages['phone'];
        $message['email']=$messages['email'];
        $message['sex']=$messages['sex'];
//        dump($messages);
//        exit;
        $result=$this->_db->add($message);
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