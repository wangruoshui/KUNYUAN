<?php
//前台页面----首页
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        //轮播图
        $numb=M('kunyuan_config');
        
        $images1=$numb->where('ID=8')->select();
        $images2=$numb->where('ID=9')->select();
        $images3=$numb->where('ID=10')->select();
        $this->assign('images1',$images1);
        $this->assign('images2',$images2);
        $this->assign('images3',$images3);
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
        //四个图片
        $index=M('common');
        $index=$index->where('kindid=1')->order('commonid desc')->limit(4)->select();
        $this->assign('index',$index);

        //公司简介

        $company=M('common');
        $company=$company->where('kindid=2')->order('commonid desc')->limit(1)->select();
        $this->assign('company',$company);
        $this->display();

      

    }
}