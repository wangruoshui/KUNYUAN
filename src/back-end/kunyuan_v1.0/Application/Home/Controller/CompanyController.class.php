<?php

namespace Home\Controller;
use Think\Controller;

class CompanyController extends Controller
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