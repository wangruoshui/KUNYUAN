<?php
//前台页面----首页
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->display();
    }

}