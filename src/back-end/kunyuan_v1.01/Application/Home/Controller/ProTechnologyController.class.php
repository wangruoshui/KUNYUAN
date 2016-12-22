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