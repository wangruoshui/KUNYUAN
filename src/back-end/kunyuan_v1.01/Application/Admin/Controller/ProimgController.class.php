<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-23
 * Time: 22:09
 */

namespace Admin\Controller;


use Think\Controller;

class ProimgController extends Controller
{
    public function add(){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

        $upload->rootPath =     './Public/upload/';
        $upload->savePath = '';// 设置附件上传目录

        $info   =   $upload->upload();

        if(!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        }else{
            // 上传成功 获取上传文件信息
            foreach($info as $file) {
                //  echo $file['savepath'].$file['savename'];
                echo $file['name'];
            }
        }

        $proimg=M('proimg');
        $results=array();
        $results['proimgpath']=$file['savepath'].$file['savename'];
        $result=$proimg->add($results);


    }
    public function del(){
        $message = M('proimg');

        $message_manage = $message->where("proimgid=%d",I('post.id'))->delete();
    }
}