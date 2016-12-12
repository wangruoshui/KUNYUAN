<?php
//前台页面----环境与社会
namespace Home\Controller;
use Think\Controller;

class ESController extends Controller
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