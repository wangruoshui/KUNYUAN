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
        $config=$config->where('ID=1')->select();

        $this->assign('config',$config);

        $bigtu=M('kunyuan_config');
        $bigtu=$bigtu->where('ID=15')->select();
        $this->assign('bigtu',$bigtu);
        $this->display();
    }
}