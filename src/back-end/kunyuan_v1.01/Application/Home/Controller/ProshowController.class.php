<?php
//前台页面----产品展示（硬杂木链接）
namespace Home\Controller;
use Think\Controller;

class ProshowController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    public function index()
    {
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=12')->select();
        $this->assign('bigtu',$bigtu);

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


        $id=I("get.id");

        $product=M('product');
        $p=$product->where("productid=$id")->select();
        $proimg=M('proimg');
        $img=$proimg->where("productid=$id")->select();
        $this->assign("img",$img);

        $this->assign('product',$p);
        $this->display();
    }

}