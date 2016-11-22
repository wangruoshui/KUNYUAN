<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:13
 */

namespace Admin\Controller;


use Think\Controller;

class RecruitController extends Controller{
    public function index() {
        echo 'admin/recruit/index';
    }

    public function manage()
    {
        $this->display();
    }
}