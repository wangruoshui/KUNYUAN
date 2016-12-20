<?php
//前台页面----环境与社会
namespace Home\Controller;
use Think\Controller;

class ESController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
    }
    public function index()
    {
        $config=M('kunyuan_config');
        $bigtu=$config->where('ID=14')->select();
        $this->assign('bigtu',$bigtu);

        $common=M('common');
        //我国的环境问题
        $e=$common->where('kindid=14')->order('commonid desc')->limit(1)->select();
        $this->assign('environment',$e);
        
        //生物质颗粒的优势

        $a=$common->where('kindid=18')->order('commonid desc')->limit(4)->select();
        $this->assign('advantage',$a);
         
        //政策支持
        $policy=$common->where('kindid=19')->order('commonid desc')->limit(5)->select();
        $this->assign('policy',$policy);

    

        $limit=$common->where('kindid=8')->order('commonid desc')->limit(1)->select();
        $this->assign('limit',$limit);
        $this->display();
    }
}