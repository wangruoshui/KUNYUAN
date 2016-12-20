<?php
//前台页面----新闻内容
namespace Home\Controller;
use Think\Controller;

class NewscontentController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    //新闻内容
    public function index()
    {

         $config=M('kunyuan_config');
        $bigtu=$config->where('ID=13')->select();
        $this->assign('bigtu',$bigtu);
        
        $newscontent=M('common');//实例化common模型类
        $id=I("get.id");//获取传入参数
        $lastid=$newscontent->where("kindid=15 AND commonid>$id")->limit(1)->select();//获取上一篇数据
        $lastid=$lastid[0]['commonid'];//获取上一篇数据id 值
        $nextid=$newscontent->where("kindid=15 AND commonid<$id")->order("commonid DESC")->limit(1)->select();//获取下一篇数据
        $nextid=$nextid[0]['commonid'];
        $newscontent=$newscontent->where("commonid=$id")->select();//获取新闻数据
        $product=M('product');//实例化product对象
        $productresult=$product->order('time')->limit(4)->select();//获取产品数据
        $news=M('common');//实例化common模型类以便获取按照clickrate排序的的数据
        $recommonNews=$news->where('kindid=15')->order('clickrate DESC')->limit(4)->select();//获取新闻推荐数据
        $clickrate=$newscontent[0]['clickrate'];//获取新闻commonid为$id 的点击量
        $clickrate++;//$clickrate自增
        $data['clickrate']=$clickrate;
        $result=$news->where("commonid=$id")->save($data);//将clickrate字段加1
        $this->assign('recommonnews',$recommonNews);//赋值推荐新闻数据
        $this->assign('products',$productresult);//赋值产品数据

        $this->assign('lastid',$lastid);//赋值上一篇新闻id
        $this->assign('nextid',$nextid);//赋值下一篇新闻id
        $this->assign('newscontent',$newscontent);//赋值新闻数据
        $this->display();//输出到模板
    }
    //产品展示
    public function product(){
        $product=M('product');
        $p=$product->order('productid desc')->limit(4)->select();
        $this->assign('product',$p);
        $this->display();
    }
    //新闻推荐
    public function newsrecommend(){
        $recommend=M('common');
        $recommend=$recommend->where('kindid=20')->order('clickrate desc')->limit(5)->select();
        $this->assign('recommend',$recommend);
        $this->display();
    }
}