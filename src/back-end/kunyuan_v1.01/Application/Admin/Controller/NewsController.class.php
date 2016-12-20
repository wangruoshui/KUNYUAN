<?php
/**
 * 新闻管理
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016-12-12
 * Time: 20:12
 */

namespace Admin\Controller;

use Think\Controller;
class NewsController extends Controller
{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){
            $this->_db=M("common");
            $results=$this->_db->where("kindid=15")->select();
            $this->assign('result',$results);
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
                // 上传错误提示错误信息
                $this->error($upload->getError());
            }else{
                // 上传成功 获取上传文件信息
                foreach($info as $file) {
                    //  echo $file['savepath'].$file['savename'];
                    echo $file['name'];
                }
            }
            $this->_db=M("common");
            $results=I("post.");
            $results['image']=$file['savepath'].$file['savename'];
            $result=$this->_db->add($results);
            if($result){
                //插入成功
                $this->success('添加成功,3秒后自动为您跳转到产品列表','/admin/news/index',3);
            }else{
                //插入失败
                $this->error('添加失败，3秒后自动跳回添加页面','/admin/news/add',3);
            }
        }else{
            $this->display();
        }

    }
    public function manage(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=$id")->select();

        $this->assign('result',$results);
        $this->display();
    }
    public function modify(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
//            $upload->rootPath =     $_SERVER['DOCUMENT_ROOT'].__ROOT__.'/Public/';
        $upload->rootPath =     './Public/upload/';
        $upload->savePath = '';// 设置附件上传目录

        //$upload->savePath  =      './Public/Uploads/';
        // 上传单个文件
        $info   =   $upload->upload();
//            dump($info);
//            exit();
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
        $this->_db=M("common");
        $results=I("post.");
        $id=$results['commonid'];
        $results['image']=$file['savepath'].$file['savename'];
        $result=$this->_db->save($results);
        if($result){
            //插入成功
            $this->success('修改成功,3秒后自动为您跳转到新闻列表','/admin/news/index',3);
        }else{
            //插入失败
            $this->error('修改失败，3秒后自动跳回新闻修改页面',"/admin/news/manage/id/$id",3);
        }
    }
    public function show(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=$id")->select();

        $this->assign('result',$results);
        $this->display();
    }
    public function del(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=$id")->delete();
        if($results){
            //插入成功
            $this->success('删除成功,3秒后自动为您跳转到新闻列表','/admin/news/index',3);
        }else{
            //插入失败
            $this->error('删除失败，3秒后自动跳回新闻列表','/admin/news/index',3);
        }
    }
}