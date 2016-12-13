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
    public function index()
    {
        $this->display();
    }
    public function view(){
        $this->display();
    }
}