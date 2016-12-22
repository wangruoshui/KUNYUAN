<?php
//前台页面----职业中心
namespace Home\Controller;
use Think\Controller;

class CareerController extends Controller
{
    protected function _initialize() {
        //启用layout二级布局
        layout("layout");
        }
    //我们的要求
    public function index()
    {
        $career=M('common');
        $career=$career->where('kindid=12')->order('commonid desc')->limit(4)->select();

        $this->assign('career',$career); 
    //岗位招聘

        $station=M('station');
        $station=$station->order('stationid desc')->limit(4)->select();

        $this->assign('station',$station);
        
    //邮箱
        $config=M('kunyuan_config');
    
        $bigtu=M('kunyuan_config');
        $bigtu=$bigtu->where('ID=15')->select();
        $this->assign('bigtu',$bigtu);
       
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