<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>坤源</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/allp.css">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        *{margin:0;padding:0;list-style-type:none;}
        a,img{border:0;}
        /* side */
        .side{position:fixed;width:54px;height:275px;right:0;top:214px;z-index:100;}
        .side ul li{width:54px;height:54px;float:left;position:relative;border-bottom:1px solid #444;}
        .side ul li .sidebox{position:absolute;width:54px;height:54px;top:0;right:0;transition:all 0.3s;background:#000;opacity:0.8;filter:Alpha(opacity=80);color:#fff;font:14px/54px "微软雅黑";overflow:hidden;}
        .sidebox2{
            position:absolute;width:125px;height:125px;margin-top:-125px;margin-left:-72px;transition:all 1s;opacity:1;filter:Alpha(opacity=80);overflow:hidden;display: none;
        }
        .side ul li .sidetop{width:54px;height:54px;line-height:54px;display:inline-block;background:#000;opacity:0.8;filter:Alpha(opacity=80);transition:all 0.3s;}
        .side ul li .sidetop:hover{background:#777777;opacity:1;filter:Alpha(opacity=100);}
        .side ul li img{float:left;}
    </style>
</head>
<body>

<div class="container">

    <div class="dangtext row">
        <div>
            <nav class="navbar navbar-default-me     " role="navigation" style="margin:0px;padding:0px;border:0">

                <div class="col-md-2 navbar-brand">
                    <img class="navbar-brand2" src="/Public/upload/logo.webp">
                </div>
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div  class="col-md-10 collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li >
                            <a href="/index.php/home/index/index">首页</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Company/index">公司简介</a>
                        </li>
                        <li>
                            <a href="/index.php/home/ProTechnology/index">产品中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/News/index">新闻中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/ES/index">环境与社会</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Career/index">职业中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Contactus/index">联系我们</a>
                        </li>




                    </ul>
                </div>

            </nav>
        </div>
    </div>
</div>



<div class="side">
    <ul>
        <li>
            <a href="/index.php/home/contactus/index#box3">
                <div class="sidebox">
                <img src="/Public/images/index/side_icon01.png">在线留言
                </div>
            </a>
        </li>
      <li>
          <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=652846913&site=qq&menu=yes" >
              <div class="sidebox"><img  title="QQ账号：652846913"src="/Public/images/index/side_icon04.png">QQ客服</div>
          </a>
      </li>

      <li>
           <?php if(is_array($weixin2wm)): $i = 0; $__LIST__ = $weixin2wm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weixin): $mod = ($i % 2 );++$i;?><div class="sidebox2"><img src="/Public/upload/<?php echo ($weixin["config_content"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
          <a href="javascript:void(0);">

            <div class="sidebox weixin"><img src="/Public/images/index/u192.png">微信</div>
          </a>
      </li>
      <li style="border:none;">
          <a href="javascript:goTop();" class="sidetop">
            <img src="/Public/images/index/side_icon05.png">
          </a>
      </li>
  </ul>
</div>

<script>
$(function(){
    $(".side ul li").hover(function(){
        $(this).find(".sidebox").stop().animate({"width":"124px"},200).css({"opacity":"1","filter":"Alpha(opacity=100)","background":"#777777"})    
    },function(){
        $(this).find(".sidebox").stop().animate({"width":"54px"},200).css({"opacity":"0.8","filter":"Alpha(opacity=80)","background":"#000"})   
    });
    $(".weixin").click(function(){
        $(".sidebox2").css({"display":"block"})
    });
    $(".weixin").mouseout(function(){
        $(".sidebox2").css({"display":"none"})
    });

});
//回到顶部函数
function goTop(){
    $('html,body').animate({'scrollTop':0},300);
}
</script>



<div class="container col-md-12 font-family"style="padding:0px">
    <div class="container col-md-12" style="padding:0px">
        <div>
            <div class="carousel slide" >

                <div class="carousel-inner">
                    <div class="item active" >
                        <?php if(is_array($bigtu)): $i = 0; $__LIST__ = $bigtu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$big): $mod = ($i % 2 );++$i;?><img  src="/Public/upload/<?php echo ($big["config_content"]); ?>" width="100%" /><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="margin:0px">
            <div>

                <ul class="breadcrumb ">

                    <li>
                        您所在的位置:
                        <a href="/index.php/home/index/index">首页</a>
                    </li>

                    <li class="active">

                        职业中心
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row xshidden">
        <div class="col-md-2 col-xs-3"></div>
        <div class="col-md-8 col-md-offset-2 col-xs-9 col-xs-offset-0">
            <div class="content-nav">
                <div class="col-md-4 text-center col-xs-5">
                    <div class="content-nav-icon">
                        <a href="#box1"><img src="/Public/images/protechnology/u3.png" name="u3" class="img-change" /></a>
                        <h3 class="nav-font">人才理念</h3>
                        <p>get more......</p>
                    </div>
                    <img src="/Public/images/career/u297.png" class="content-nav-line">
                </div>
            </div>

            <div class="content-nav">
                <div class="col-md-3 text-center col-xs-3">
                    <div class="content-nav-icon">
                        <a href="#box2"><img src="/Public/images/protechnology/u7.png" name="u7" class="img-change"></a>
                        <h3 class="nav-font">岗位招聘</h3>
                        <p>get more......</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    
    <div class="text-center">
    <div class="mdhidden row-md-1">&nbsp;</div>
    <div class="xshidden row-md-1">&nbsp;</br></br></br></br></br>
    <div id="box1"></div>
    </br></div>
        <div class="big">
            <div>
                <img src="/Public/images/career/u321.png">
                人才理念
                <img src="/Public/images/career/u321.png">
            </div>
        </div>
        <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
    </div>
    <div class="xshidden row-md-1">&nbsp;</div>

    <div class="row">

        <div class="col-md-6">
            <div class="col-md-3 col-xs-2">
                <img class="bule6" src="/Public/images/company/6b.png">
            </div>
            <div class="col-md-8 col-xs-7">
                <div class="row-md-1">&nbsp;</br></br></div>
                <div class="t1" class="row-md-10">
                    我们的<a class="ba1">要求</a>
                </div>
            </div>
        </div>
    </div>

    <div class="xshidden row-md-1">&nbsp;</div>
    <div class="row-md-1">&nbsp;</br></br></div>
    <div class="row clearfix">
            <div class="col-md-2 col-xs-1">
            </div>
            <div class="col-md-5 col-xs-7">
                <div class="row center31">
                    <div class="col-md-1"></div>
                    <div class="col-md-9 col-xs-10 gleft">
                        <h2>
                            NO.1
                        </h2>
                        <p class="size4444">
                            <?php if(is_array($career)): $i = 0; $__LIST__ = array_slice($career,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
                        </p>
                        <p>
                        </p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            
                <div class="row-md-6">&nbsp;</br></br></br></br></div>
                <div class="row center31">
                    <div class="col-md-1"></div>
                    <div class="col-md-9 col-xs-10 gleft">
                        <h2>
                            NO.2
                        </h2>
                        <p class="size4444">
                            <?php if(is_array($career)): $i = 0; $__LIST__ = array_slice($career,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
                        </p>
                        <p>
                        </p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <div class="row-md-6">&nbsp;</br></br></br></br></br></br></br></br></div>

            <div class="col-md-5 col-xs-7 col-xs-push-1 col-md-push-0">

                <div class="row-xs-5">&nbsp;</br></br></br></br></div>
                <div class="row center31">
                    <div class="col-md-1"></div>
                    <div class="col-md-9 col-xs-10 gleft">
                        <h2>
                            NO.3
                        </h2>
                        <p class="size4444">
                            
                            <?php if(is_array($career)): $i = 0; $__LIST__ = array_slice($career,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
                            
                        </p>
                        <p>
                        </p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="row-md-6">&nbsp;</br></br></br></br></div>
                <div class="row center31">
                    <div class="col-md-1 col-xs-0"></div>
                    <div class="col-md-9 col-xs-10 gleft">
                        <h2>
                            NO.4
                        </h2>
                        <p class="size4444">
                        <?php if(is_array($career)): $i = 0; $__LIST__ = array_slice($career,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
                        </p>
                        <p>
                        </p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
        </div>

    <div class="xshidden row-md-1">&nbsp;</div></br></br></br>
    <div id="box2"></div>
    <div class="text-center">
        <div class="big">
            <div>
                <img src="/Public/images/career/u321.png">
                岗位招聘
                <img src="/Public/images/career/u321.png">
            </div>
        </div>
        <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
    </div></br>
    <div class="xshidden row-md-1">&nbsp;</br></br></div>

    <div class="row">
        <div class="col-md-1 col-xs-1">
        </div>
        <div class="col-md-10 col-xs-10">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center th">
                                职位名称
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center th">
                                职位类别
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center th">
                                工作地点
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center th">
                                详情
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(is_array($station)): $i = 0; $__LIST__ = array_slice($station,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i;?><div class="row">
                <div class="col-md-12">
                    <div class="row biaobei">
                       <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["name"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["type"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["place"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-185091" href="#panel-element-388476"><img src="/Public/images/career/u2831.png"></a>

                            </h3>
                        </div>
                    
                    </div>
                </div>
            </div>

            <div id="panel-element-388476" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="cu1">岗位描述：</p>
                    <?php echo ($advan["introduce"]); ?>
                    <p class="cu1">职业要求：</p>
                    <?php echo ($advan["require"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($station)): $i = 0; $__LIST__ = array_slice($station,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i;?><div class="row">
                <div class="col-md-12">
                    <div class="row biaobei2">
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["name"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["type"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["place"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-185091" href="#panel-element-388477"><img src="/Public/images/career/u2831.png"></a>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-element-388477" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="cu1">岗位描述：</p>
                    <?php echo ($advan["introduce"]); ?>
                    <p class="cu1">职业要求：</p>
                    <?php echo ($advan["require"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($station)): $i = 0; $__LIST__ = array_slice($station,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i;?><div class="row">
                <div class="col-md-12">
                    <div class="row biaobei">
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["name"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["type"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["place"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-185091" href="#panel-element-388478"><img src="/Public/images/career/u2831.png"></a>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-element-388478" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="cu1">岗位描述：</p>
                    <?php echo ($advan["introduce"]); ?>
                    <p class="cu1">职业要求：</p>
                    <?php echo ($advan["require"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($station)): $i = 0; $__LIST__ = array_slice($station,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i;?><div class="row">
                <div class="col-md-12">
                    <div class="row biaobei2">
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["name"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["type"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <?php echo ($advan["place"]); ?>
                            </h3>
                        </div>
                        <div class="col-md-3 col-xs-3">
                            <h3 class="text-center td">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-185091" href="#panel-element-388479"><img src="/Public/images/career/u2831.png"></a>

                            </h3>
                        </div>
                    </div>
                </div>
            </div>

            <div id="panel-element-388479" class="panel-collapse collapse">
                <div class="panel-body">
                    <p class="cu1">岗位描述：</p>
                    <?php echo ($advan["introduce"]); ?>
                    <p class="cu1">职业要求：</p>
                    <?php echo ($advan["require"]); ?>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>

        <div class="col-md-1">
        </div>
    </div>

</div>
<div class="jianli text-center td col-md-12 col-xs-12 col-md-pull-3 col-xs-pull-1">
    简历发送到：<a><?php if(is_array($email)): $i = 0; $__LIST__ = $email;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$em): $mod = ($i % 2 );++$i; echo ($em["config_content"]); endforeach; endif; else: echo "" ;endif; ?></a>
</div>
<div class="row-md-1">&nbsp;</br></br></br></br></div>
<div class="xshidden row-md-1">&nbsp;</br></br></div>
<div class="container col-md-12 footer-color">
    <div class="col-md-12 col-xs-12">
        <div class="col-md-1 col-xs-0 column">
        </div>
        <div class="col-md-10 col-xs-12 text-center-1 weitext">
            <div class="row-md-1">&nbsp;</div>
            <div class="col-md-9 col-xs-12">

                    <div class="col-md-12 col-xs-12"  >
                            
                            <?php if(is_array($numb)): $i = 0; $__LIST__ = $numb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$numb): $mod = ($i % 2 );++$i;?><br class="xshidden" > 

                            手机号：<?php echo ($numb["config_content"]); ?>&nbsp;&nbsp;<br class="mdhidden" ><?php endforeach; endif; else: echo "" ;endif; ?>

                            <?php if(is_array($email)): $i = 0; $__LIST__ = $email;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$e): $mod = ($i % 2 );++$i;?>邮箱：<?php echo ($e["config_content"]); ?>&nbsp;&nbsp;<br class="mdhidden" ><?php endforeach; endif; else: echo "" ;endif; ?>
                   
                            <?php if(is_array($qq)): $i = 0; $__LIST__ = $qq;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qq): $mod = ($i % 2 );++$i;?>QQ：<?php echo ($qq["config_content"]); ?>&nbsp;&nbsp;<br><br class="topwei xshidden" ><?php endforeach; endif; else: echo "" ;endif; ?>

                            <?php if(is_array($addr)): $i = 0; $__LIST__ = $addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$addr): $mod = ($i % 2 );++$i;?>公司地址：<?php echo ($addr["config_content"]); ?>&nbsp;&nbsp;<br  class="mdhidden" ><?php endforeach; endif; else: echo "" ;endif; ?>
                        
                            <?php if(is_array($off)): $i = 0; $__LIST__ = $off;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$off): $mod = ($i % 2 );++$i;?>办公处：<?php echo ($off["config_content"]); ?>&nbsp;&nbsp;<br><br class="topwei xshidden" ><?php endforeach; endif; else: echo "" ;endif; ?>

                            <?php if(is_array($beian)): $i = 0; $__LIST__ = $beian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bei): $mod = ($i % 2 );++$i;?>备案号：<?php echo ($bei["config_content"]); endforeach; endif; else: echo "" ;endif; ?>

                            <div class="row-md-1">&nbsp;</br></br></div>
                    </div>

            </div>
            <div class="col-md-2">
                <div class="col-md-8">
                    <?php if(is_array($weixin2wm)): $i = 0; $__LIST__ = $weixin2wm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weixin): $mod = ($i % 2 );++$i;?><img class="saoyisao carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($weixin["config_content"]); ?>"/><?php endforeach; endif; else: echo "" ;endif; ?>
                    <div class="text-center" style="margin-top:4%;font-size:20px;">扫一扫</div>
                    <div class="mdhidden"></br></div>
                </div>
            </div>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>
</div>
</body>
<script type="text/javascript">

    $(".img-change").hover(

                    function(){
                        $(this).css("box-shadow","10px 10px 5px #888888");


                    },
                    function(){
                        $(this).css("box-shadow","0px 0px 0px #fff");
                    }

    );



    $(".y-change").click(function(){
        $("#box").scrollTop(100);
    });

</script>
</html>