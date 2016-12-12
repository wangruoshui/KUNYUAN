<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:12
 */

namespace Admin\Controller;


use Think\Controller;

class QuestionController extends Controller{
    public function index() {
        echo 'admin/question/index';
    }

    public function manage()
    {
        $this->display();
    }
}