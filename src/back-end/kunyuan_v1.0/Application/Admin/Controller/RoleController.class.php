<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:09
 */

namespace Admin\Controller;

use Think\Controller;

class RoleController extends Controller{
    public function index() {
        echo 'admin/role/index';
    }
    public function manage(){
        $this->display();
    }

}