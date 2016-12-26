<?php
/**
 * 公司信息管理
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/11/22
 * Time: 15:43
 */

namespace Admin\Controller;
use Library\Page;
use Think\Controller;

class CommonController extends Controller{
    protected $_db;
    public function index() {
        if (isset($_SESSION['group_id'])){
        $this->_db=M("common");


            //1、获取总记录
            $count=M('common')->where('kindid between 2 and 7')->count();

            //2、获取每一页显示的个数
            $pageSize=6;

            //3、创建分页对象
            $page = new Page($count,$pageSize);

            //设计分页样式
            $page->setConfig('prev','上一页');
            $page->setConfig('next','下一页');
            $page->setConfig('first','....');
            $page->setConfig('last',"...$count");
            $page->setConfig('theme',' %UP_PAGE% %FIRST%  %LINK_PAGE%  %END% %DOWN_PAGE%');

            //4、分页查

            $results=$this->_db->where("kindid between 2 and 7")->limit($page->firstRow.','.$page->listRows)->select();
            //5、输出查询结果


            //6、输出分页码
            $this->assign('pages',$page->show());

        $this->assign('result',$results);
        $this->display();
        }else{
            exit('<script>top.location.href="/index.php/admin/log/login"</script>');
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
                    //echo $file['name'];
                }
            }
            $this->_db=M("common");
            $results=I("post.");
            $results['image']=$file['savepath'].$file['savename'];
            $result=$this->_db->add($results);

            if($result){
                //插入成功
                $this->success('添加成功,3秒后自动为您跳转到产品列表','/index.php/admin/common/index',3);
            }else{
                //插入失败
                $this->error('添加失败，3秒后自动跳回添加页面','/index.php/admin/common/add',3);
            }
        }else{
            $this->display();
        }

    }
    public function manage(){
        $this->_db=M("common");
        $id=I("get.id");
        $results=$this->_db->where("commonid=%d",$id)->select();

        $this->assign('result',$results);
        $this->display();
    }
    public function modify(){
        if($_FILES['image']['name']) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 3145728;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath = './Public/upload/';
            $upload->savePath = '';// 设置附件上传目录
            $info = $upload->upload();
            if (!$info) {
                // 上传错误提示错误信息
                $this->error($upload->getError());
            } else {
                // 上传成功 获取上传文件信息
                foreach ($info as $file) {
                    //  echo $file['savepath'].$file['savename'];
                    // echo $file['name'];
                }
            }
            $this->_db = M("common");
            $results = I("post.");
//            $id = $results['commonid'];
            $results['image'] = $file['savepath'] . $file['savename'];
            $result = $this->_db->save($results);
            if ($result) {
                //插入成功
                $this->success('修改成功,3秒后自动为您跳转到公司简介列表', '/index.php/admin/common/index', 3);
            } else {
                //插入失败
                $this->error('修改失败，3秒后自动跳回公司简介修改页面', "/index.php/admin/common/manage/id/$id", 3);
            }
        }else{
            $this->_db = M("common");
            $results = I("post.");
//            $id = $results['commonid'];
            $result = $this->_db->save($results);
            if ($result) {
                //插入成功
                $this->success('修改成功,3秒后自动为您跳转到公司简介列表', '/index.php/admin/common/index', 3);
            } else {
                //插入失败
                $this->error('修改失败，3秒后自动跳回公司简介修改页面', "/index.php/admin/common/manage/id/$id", 3);
            }
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
            $this->success('删除成功,3秒后自动为您跳转到公司简介列表','/index.php/admin/common/index',3);
        }else{
            //插入失败
            $this->error('删除失败，3秒后自动跳回公司简介列表','/index.php/admin/common/index',3);
        }
    }
}