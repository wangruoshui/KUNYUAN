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
    public function index()
    {
        $this->display();
    }

}