<?php
//前台页面----新闻中心
namespace Home\Controller;
use Think\Controller;

class NewsController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    //新闻简介
    public function index()
    {
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=13')->select();
        $this->assign('bigtu',$bigtu);

        $news = M('common'); // 实例化common对象
        $product=M('product');//实例化product对象
        $productresult=$product->order('time')->limit(4)->select();//获取产品数据

        $result=$news->where('kindid=15')->select();
        $count= $news->where('kindid=15')->count();// 查询满足要求的总记录数
        $Page= new  \Com\Kunyuan\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $Page->setConfig('header', '条数据');   //分页样式可自定义
        $Page->setConfig('prev', "<");
        $Page->setConfig('next', '>');
        $Page->setConfig('first', '<<');
        $Page->setConfig('last', '>>');
        $show       = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $newss = $news->where('kindid=15')->order('time')->limit($Page->firstRow.','.$Page->listRows)->select();
        //dump($newss);
        $recommonNews=$news->where('kindid=15')->order('clickrate DESC')->limit(4)->select();//获取新闻推荐数据

        $this->assign('recommonnews',$recommonNews);//赋值推荐新闻数据
        $this->assign('products',$productresult);//赋值产品数据
        //dump($productresult);
        $this->assign('newss',$newss);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出



        $this->display(); // 输出模板
    }
    //产品展示



}