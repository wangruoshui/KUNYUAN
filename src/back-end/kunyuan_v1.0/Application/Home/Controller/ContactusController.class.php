<?php
//前台页面----联系我们
namespace Home\Controller;
use Think\Controller;

class ContactusController extends Controller
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