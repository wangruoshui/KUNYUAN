<?php
//前台页面----样本寄送
namespace Home\Controller;
use Think\Controller;

class SendController extends Controller
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