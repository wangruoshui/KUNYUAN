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
        $policy=$common->where('kindid=19')->order('commonid desc')->limit(6)->select();
        $this->assign('policy',$policy);

    

        $limit=$common->where('kindid=8')->order('commonid desc')->limit(1)->select();
        $this->assign('limit',$limit);

        //尾部
        $numb=M('kunyuan_config');
        $numb1=$numb->where('ID=2')->select();
        $email=$numb->where('ID=1')->select();
        $qq=$numb->where('ID=19')->select();
        $addr=$numb->where('ID=3')->select();
        $off=$numb->where('ID=4')->select();
        $beian=$numb->where('ID=7')->select();
        $weixin2wm=$numb->where('ID=18')->select();
        $this->assign('numb',$numb1);
        $this->assign('email',$email);
        $this->assign('qq',$qq);
        $this->assign('addr',$addr);
        $this->assign('off',$off);
        $this->assign('beian',$beian);
        $this->assign('weixin2wm',$weixin2wm);
        $this->display();
    }
}