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
    public function index()
    {
        $this->display();
    }


}