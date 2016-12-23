<?php
//author:maxing
namespace Home\Controller;
use Common\Controller\RestfulController;
use Think\Controller;

class CompanyController extends Controller
{
    protected $_db;
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
        $this->_db=M('common');
    }

    /**
     *
     */
    public function index(){
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=11')->select();
        $this->assign('bigtu',$bigtu);

        $results=array(
        );
        $result=$this->_db->where('kindid=2')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=3')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=4')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=5')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=6')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=7')->order('commonid desc')->limit(1)->select();
        $results[]=$result;

        $results[]=$result;
        //dump($results);
//        exit;
        $this->assign("results",$results);

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

        $phone=M('common');
        $phone=$phone->where('kindid=11')->order('commonid desc')->limit(2)->select();
        $this->assign('phone',$phone); 
       $this->display();

    }

}