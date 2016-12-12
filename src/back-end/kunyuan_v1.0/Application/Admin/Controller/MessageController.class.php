<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:42
 */

namespace Admin\Controller;


use Think\Controller;

class MessageController extends Controller{
    public function index() {
        echo 'admin/message/index';
    }

    public function manage()
    {
        $this->display();
    }
}