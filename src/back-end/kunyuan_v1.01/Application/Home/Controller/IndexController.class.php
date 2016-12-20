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
        //公司地址和办公处
        $images1=$numb->where('ID=8')->select();
        $images2=$numb->where('ID=9')->select();
        $images3=$numb->where('ID=10')->select();
        $this->assign('images1',$images1);
        $this->assign('images2',$images2);
        $this->assign('images3',$images3);
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