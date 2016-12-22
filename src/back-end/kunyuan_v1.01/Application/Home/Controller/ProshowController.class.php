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