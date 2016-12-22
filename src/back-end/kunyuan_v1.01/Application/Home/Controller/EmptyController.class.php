<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/20
 * Time: 12:33
 */

namespace Home\Controller;


use Think\Controller;

class  EmptyController extends Controller {
    function   _empty(){
        header( " HTTP/1.0  404  Not Found" );
        $this->display( ' Public:404 ' );
       // $this->display();
    }

    function  index(){
        header( " HTTP/1.0  404  Not Found" );
      // $this->display( ' Public:404 ' );
        $this->display();
    }

}