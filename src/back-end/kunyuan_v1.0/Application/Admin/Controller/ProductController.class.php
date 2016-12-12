<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 16:18
 */

namespace Admin\Controller;


use Think\Controller;

class ProductController extends Controller{
    public function index() {
        echo 'admin/message/index';
    }

    public function manage()
    {
        $this->display();
    }
}