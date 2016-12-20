<?php
//author:maxing
namespace Home\Controller;
use Common\Controller\RestfulController;
use Think\Controller;

class CompanyController extends Controller
{
    protected $_db;
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
        $this->_db=M('common');
    }

    /**
     *
     */
    public function index(){
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=11')->select();
        $this->assign('bigtu',$bigtu);

        $results=array(
        );
        $result=$this->_db->where('kindid=2')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=3')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=4')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=5')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=6')->order('commonid desc')->limit(1)->select();
        $results[]=$result;
        $result=$this->_db->where('kindid=7')->order('commonid desc')->limit(1)->select();
        $results[]=$result;

        $results[]=$result;
        //dump($results);
//        exit;
        $this->assign("results",$results);
       $this->display();
    }

}