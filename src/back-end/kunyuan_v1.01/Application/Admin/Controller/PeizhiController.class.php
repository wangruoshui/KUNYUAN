<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2016/12/15
 * Time: 16:08
 */

namespace Admin\Controller;


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
            exit('<script>top.location.href="/admin/log/login"</script>');
            //$this->redirect('/admin/index/login', '', 0, '请登录!');
        }
    }

   //公司备案号
    //列表
    public function crn()
    {
        //连接数据库
        $pei=M('kunyuan_config');
        $result=$pei->where('id=7')->select();

        //传递数据
        $this->assign('result',$result);

        //显示视图
        $this->display();
    }
    //修改
    public function crnmanage()
    {
        if (isset($_POST['submit'])){
            $condition = array();
            $condition['config_content'] = I('post.config_content');

            //连接数据库
            $result = M('kunyuan_config');

            $r = $result->where("id=7")->save($condition);

            //判断是否修改成功
            if ($r) {
                $this->redirect('admin/peizhi/crn', '', 0, '修改成功!');
            } else {
                $this->redirect('admin/peizhi/crn', '', 0, '修改失败!');
            }
        }else{
            //连接数据库
            $pei=M('kunyuan_config');
            $result=$pei->where('id=7')->select();

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
                $this->redirect('admin/peizhi/person', '', 0, '修改成功!');
            } else {
                $this->redirect('admin/peizhi/person', '', 0, '修改失败!');
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
                $this->redirect('admin/peizhi/phone', '', 0, '修改成功!');
            } else {
                $this->redirect('admin/peizhi/phone', '', 0, '修改失败!');
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
        //连接数据库
        $pei=M('kunyuan_config');
        $result=$pei->where('id > 7')->select();

        //传递数据
        $this->assign('result',$result);

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
                $this->redirect('admin/peizhi/picture', '', 0, '修改成功!');
            } else {
                $this->redirect('admin/peizhi/picture', '', 0, '修改失败!');}

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