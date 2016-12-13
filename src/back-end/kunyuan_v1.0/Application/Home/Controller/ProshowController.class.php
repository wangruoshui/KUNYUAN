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
        $this->display();
    }

}