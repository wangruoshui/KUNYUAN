<?php
//前台页面----产品中心
namespace Home\Controller;
use Think\Controller;

class ProTechnologyController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    //产品技术
    public function index()
    {
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=12')->select();
        $this->assign('bigtu',$bigtu);



        $technology=M('common');
        $product=M('product');
        $technology1=$technology->where('kindid=17')->order('commonid asc')->limit(3)->select();
        $p=$product->order('productid desc')->limit(4)->select();
        $range=$technology->where('kindid=9')->order('commonid desc')->limit(1)->select();
        $this->assign('range',$range);
        $this->assign('product',$p);
        $this->assign('technology',$technology1);
        $this->display();
    }
    //产品展示
    public function product()
    {
        $product=M('product');
        $p=$product->order('productid desc')->limit(4)->select();
        $this->assign('product',$p);
        $this->display();
    }
    //销售范围
    public function range()
    {
        $range=M('common');
        $range=$range->where('kindid=9')->order('commonid desc')->limit(1)->select();
        $this->assign('range',$range);
        $this->display();
    }
}