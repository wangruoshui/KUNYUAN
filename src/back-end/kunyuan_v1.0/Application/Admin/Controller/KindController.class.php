<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:43
 */

namespace Admin\Controller;


use Think\Controller;

class KindController extends Controller{
    public function index() {
        echo 'admin/kind/index';
    }

    public function manage()
    {
        $this->display();
    }
}