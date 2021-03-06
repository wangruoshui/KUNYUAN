<?php
//前台页面----样本寄送
//author:maxing
namespace Home\Controller;
use Think\Controller;
use Think\Verify;

class SendController extends Controller
{
    protected $_db;
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    public function index()
    {
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=17')->select();
        $this->assign('bigtu',$bigtu);


        $this->_db=M("privince");
        $result=$this->_db->select("parentid=0");
        $this->assign("result",$result);
        //dump($result);
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
    //利用ajax实现省市区
    public function province(){
        $this->_db=M("privince");

       $code=I("post.parentid");

        $result=$this->_db->where("parentid=$code")->select();

        $citysStr = json_encode( $result);

    echo $citysStr;
    }
    public function verifycode(){
        $config =    array(
            'fontSize'    =>    20,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
            'codeSet'     =>   '0123456789', //指定验证码的字符
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }
    public function checkcode(){

}
    public function addsend(){
        $this->_db=M("courier");
        $messages=I("post.");
        $Verify= new \Think\Verify();
        if($Verify->check($messages['check'])) {


        if(($messages['username'])&&($messages['town'])&&($messages['s_province'])&&($messages['s_city'])&&($messages['s_county'])&&($messages['phone'])) {


            $message['time'] = date("Y-m-d H:i:s", time());
            $message['username'] = $messages['username'];
            $message['address'] = $messages['s_province'] .  $messages['city'] . $messages['s_county'] .  $messages['town'];
            $message['phone'] = $messages['phone'];

            $message['sex'] = $messages['sex'];
//        dump($messages);
//        exit;
            $result = $this->_db->add($message);
            //  dump($result);
            if ($result) {
                //插入成功
                $this->success('提交成功', '/index.php/home/proTechnology/index', 2);
            } else {
                //插入失败
                $this->error('提交失败', '/index.php/home/send/index', 2);
            }
        }else{
            $this->error('信息不能为空，请重新填写', '/index.php/home/send/index', 2);
        }
        }else{$this->error('验证码错误！');}
    }

}