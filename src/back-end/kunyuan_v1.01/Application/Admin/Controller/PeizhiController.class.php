<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/15
 * Time: 16:08
 */

namespace Admin\Controller;

use Library\Page;
use Think\Controller;

class PeizhiController extends Controller
{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){
            $pei=M('kunyuan_config');
            $result=$pei->where('id=7')->select();

            //传递数据
            $this->assign('result',$result);
            $this->display('crn');
        }else{
            exit('<script>top.location.href="/index.php/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }
    }

   //公司备案号
    //列表
    public function crn()
    {


        //1、获取总记录
        $count=M('kunyuan_config')->where('id<8')->count();

        //2、获取每一页显示的个数
        $pageSize=5;

        //3、创建分页对象
        $page = new Page($count,$pageSize);

        //设计分页样式
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','....');
        $page->setConfig('last',"...$count");
        $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

        //连接数据库

        //4、分页查
        $result =M('kunyuan_config')->where('id<8')->limit($page->firstRow.','.$page->listRows)->select();

        //5、输出查询结果
        $this->assign('result',$result);

        //6、输出分页码
        $this->assign('pages',$page->show());

        //显示视图
        $this->display();
    }
    //修改
    public function crnmanage()
    {
        if (isset($_POST['submit'])){
            $condition = array();
            $condition['config_content'] = I('post.config_content');
            $id=I('post.id');
            //连接数据库
            $result = M('kunyuan_config');

            $r = $result->where("id=%d",$id)->save($condition);

            //判断是否修改成功
            if ($r) {
                $this->redirect('/index.php/admin/peizhi/crn', '', 0, '修改成功!');
            } else {
                $this->redirect('/index.php/admin/peizhi/crn', '', 0, '修改失败!');
            }
        }else{
            //连接数据库
            $pei=M('kunyuan_config');
            $result=$pei->where("id=%d",I('get.id'))->select();

            //传递数据
            $this->assign('result',$result);

            //显示视图
            $this->display();
        }
    }

    //公司联系人
    //列表
    public function person()
    {
        //连接数据库
        $pei=M('kunyuan_config');
        $result=$pei->where('id=5 or id=6')->select();

        //传递数据
        $this->assign('result',$result);

        //显示视图
        $this->display();
    }
    //修改
    public function personmanage()
    {
        if (isset($_POST['submit'])){
            $condition = array();
            $condition['config_name'] = I('post.config_name');
            $condition['config_content'] = I('post.config_content');
            $id=I('post.id');

            //连接数据库
            $result = M('kunyuan_config');
//            dump($_GET);
//            exit;
            $r = $result->where("id=%d",$id)->save($condition);

            //判断是否修改成功
            if ($r) {
                $this->redirect('/index.php/admin/peizhi/crn', '', 0, '修改成功!');
            } else {
                $this->redirect('/index.php/admin/peizhi/crn', '', 0, '修改失败!');
            }
        }else{
            //连接数据库
            $pei=M('kunyuan_config');
            $result=$pei->where("id=%d",I('get.id'))->select();

            //传递数据
            $this->assign('result',$result);
//            dump($result);
//            exit;
            //显示视图
            $this->display();
        }
    }

    //公司地址、电话
    //列表
    public function phone()
    {
        //连接数据库
        $pei=M('kunyuan_config');
        $result=$pei->where('id < 5')->select();

        //传递数据
        $this->assign('result',$result);

        //显示视图
        $this->display();
    }
    //修改
    public function phonemanage()
    {
        if (isset($_POST['submit'])){
            $condition = array();
            $condition['config_content'] = I('post.config_content');
            $id=I('post.id');

            //连接数据库
            $result = M('kunyuan_config');
//            dump($_GET);
//            exit;
            $r = $result->where("id=%d",$id)->save($condition);

            //判断是否修改成功
            if ($r) {
                $this->redirect('/index.php/admin/peizhi/phone', '', 0, '修改成功!');
            } else {
                $this->redirect('/index.php/admin/peizhi/phone', '', 0, '修改失败!');
            }
        }else{
            //连接数据库
            $pei=M('kunyuan_config');
            $result=$pei->where("id=%d",I('get.id'))->select();

            //传递数据
            $this->assign('result',$result);
//dump($result);
//            exit;
            //显示视图
            $this->display();
        }
    }

    //网站图片
    //列表
    public function picture()
    {
        //1、获取总记录
        $count=M('kunyuan_config')->where('id>7')->count();

        //2、获取每一页显示的个数
        $pageSize=5;

        //3、创建分页对象
        $page = new Page($count,$pageSize);

        //设计分页样式
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        $page->setConfig('first','....');
        $page->setConfig('last',"...$count");
        $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

        //连接数据库

        //4、分页查
        $result =M('kunyuan_config')->where('id>7')->limit($page->firstRow.','.$page->listRows)->select();

        //5、输出查询结果
        $this->assign('result',$result);

        //6、输出分页码
        $this->assign('pages',$page->show());

        //显示视图
        $this->display();
    }
    //修改
    public function picturemanage()
    {
        if (isset($_POST['submit'])){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath =     './Public/upload/';
            $upload->savePath = 'config_picture';// 设置附件上传目录
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

            $condition['config_content'] = $file['savepath'].$file['savename'];
            $id=I('post.id');

            //连接数据库
            $result = M('kunyuan_config');
//            dump($_GET);
//            exit;
            $r = $result->where("id=%d",$id)->save($condition);

            //判断是否修改成功
            if ($r) {
                $this->redirect('/index.php/admin/peizhi/picture', '', 0, '修改成功!');
            } else {
                $this->redirect('/index.php/admin/peizhi/picture', '', 0, '修改失败!');}

        }else{
            //连接数据库
            $pei=M('kunyuan_config');
            $result=$pei->where("id=%d",I('get.id'))->select();

            //传递数据
            $this->assign('result',$result);

            //显示视图
            $this->display();
        }
    }

}