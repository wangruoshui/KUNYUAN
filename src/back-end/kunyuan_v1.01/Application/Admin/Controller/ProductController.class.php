<?php
/**
 * 产品管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 16:18
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;

class ProductController extends Controller{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){


            //1、获取总记录
            $count=M('product')->count();

            //2、获取每一页显示的个数
            $pageSize=2;

            //3、创建分页对象
            $page = new Page($count,$pageSize);

            //设计分页样式
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','....');
            $page->setConfig('last',"...$count");
            $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

            //4、分页查
            $result =M('product')->limit($page->firstRow.','.$page->listRows)->select();

            //5、输出查询结果
            $this->assign('result',$result);

            //6、输出分页码
            $this->assign('pages',$page->show());


            $this->display();
        }else{
            exit('<script>top.location.href="/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }
    }
    public function add(){
        $this->display();
    }
    public function addinsert(){
        if(I('submit')){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

            $upload->rootPath =     './Public/upload/';
            $upload->savePath = '';// 设置附件上传目录

            $info   =   $upload->upload();

            if(!$info) {
                $p1=M('proimg');
                $r=$p1->where('productid=0')->delete();
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 上传成功 获取上传文件信息
                foreach($info as $file) {
                  //  echo $file['savepath'].$file['savename'];
                    echo $file['name'];
                }
            }

            $this->_db=M("product");
        $results=I("post.");
            $results['image']=$file['savepath'].$file['savename'];
        $result=$this->_db->add($results);


        if($result){
            //插入成功

            $proimg=M('proimg');
            $r=$proimg->where('productid=0')->select();
            foreach ($r as $value){
                $r2['productid']=$result;
                $r=$proimg->where('proimgid=%d',$value['proimgid'])->save($r2);
                if ($r){
                    $this->success('添加详情图片成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);

                }else{
                    $p1=M('proimg');
                    $r=$p1->where('productid=0')->delete();
                    $this->error('添加详情图片失败，3秒后自动跳回添加页面','/admin/product/add',0);

                }
            }

            $this->success('添加成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);
        }else{
            //插入失败
            $p1=M('proimg');
            $r=$p1->where('productid=0')->delete();
            $this->error('添加失败，3秒后自动跳回添加页面','/admin/product/add',0);
        }
        }else{
            $this->display('add');
        }

    }
    public function manage(){
        $this->_db=M("product");
        $id=I("get.id");
        $results=$this->_db->where("productid=$id")->select();

        $p=M('proimg');
        $r=$p->where("productid=$id")->select();

        $this->assign('result',$results);
        $this->assign('proimg',$r);
//        dump($results);
//        exit;
        $this->display();
    }
    public function modify(){
//      dump($_FILES);
//        exit;
        if($_FILES['image']['name']){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

            $upload->rootPath =     './Public/upload/';
            $upload->savePath = '';// 设置附件上传目录
            $info   =   $upload->upload();
            if(!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else {
                // 上传成功 获取上传文件信息
                foreach ($info as $file) {
                    //  echo $file['savepath'].$file['savename'];
                    echo $file['name'];
                }
            }
            $this->_db=M("product");
            $results=I("post.");
            $productid=I('post.productid');
//            dump($results);
//            exit;
            $results['image']=$file['savepath'].$file['savename'];
            $result=$this->_db->save($results);
            if($result){
                //插入成功

                $proimg=M('proimg');
                $r=$proimg->where('productid=0')->select();
                foreach ($r as $value){
                    $r2['productid']=$productid;
                    $r=$proimg->where('proimgid=%d',$value['proimgid'])->save($r2);
                    if ($r){
                        $this->success('添加详情图片成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);

                    }else{
                        $p1=M('proimg');
                        $r=$p1->where('productid=0')->delete();
                        $this->error('添加详情图片失败，3秒后自动跳回添加页面','/admin/product/add',0);

                    }
                }

                $this->success('修改成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);
            }else{
                //插入失败

                $p1=M('proimg');
                $r=$p1->where('productid=0')->delete();

                $this->error('修改失败，3秒后自动跳回产品列表','/admin/product/index/id/{$results["productid"]}',0);
            }
        }else{
            $pro=M('product');
//            $results=I("post.");
            $results = array();
            $results['userid'] = $_SESSION['group_id'];
            $results['name'] = I('post.name');
            $results['price'] = I('post.price');

            if ((I('post.introductions')!=NULL)){
                $results['introductions'] = I('post.introductions');
            }
            $productid=I('post.productid');
            $result=$pro->where("productid=%d",$productid)->save($results);
//            dump($result);
//            dump($_POST);
//           dump($results);
//            dump($productid);
//            exit;

            if($result){
                //插入成功

                $proimg=M('proimg');
                $r=$proimg->where('productid=0')->select();
                foreach ($r as $value){
                    $r2['productid']=$productid;
                    $r=$proimg->where('proimgid=%d',$value['proimgid'])->save($r2);
                    if ($r){
                        $this->success('添加详情图片成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);

                    }else{
                        $p1=M('proimg');
                        $r=$p1->where('productid=0')->delete();
                        $this->error('添加详情图片失败，3秒后自动跳回添加页面','/admin/product/add',0);

                    }
                }

                $this->success('修改成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);
            }else{
                //插入失败

                $p1=M('proimg');
                $r=$p1->where('productid=0')->delete();

                $this->error('修改失败，3秒后自动跳回产品列表','/admin/product/index/id/{$results["productid"]}',0);
            }
        }

    }
    public function show(){
        $this->_db=M("product");
        $id=I("get.id");
        $results=$this->_db->where("productid=$id")->select();

        $p=M('proimg');
        $r=$p->where("productid=$id")->select();


        $this->assign('result',$results);
        $this->assign('proimg',$r);
        $this->display();
    }
    public function del(){
        $this->_db=M("product");
        $id=I("get.id");
        $results=$this->_db->where("productid=$id")->delete();
        $proimg=M('proimg');
        $r=$proimg->where("productid=$id")->delete();
        if($results && $r){
            //插入成功
            $this->success('删除成功,3秒后自动为您跳转到产品列表','/admin/product/index',0);
        }else{
            //插入失败
            $this->error('删除失败，3秒后自动跳回产品列表','/admin/product/index',0);
        }
    }
}