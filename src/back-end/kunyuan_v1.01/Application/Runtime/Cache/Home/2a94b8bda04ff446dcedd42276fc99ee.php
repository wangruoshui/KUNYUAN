<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet"  href="/Public/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">
    <script type="text/javascript" src="/Public/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
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


        .right_img a:hover img{
          -webkit-transform:scale(2,2);
          -moz-transform:scale(2,2);
          -transform:scale(2,2);
          }
    </style>

</head>
<body>

<div class="side">
    <ul>
        <li>
            <a href="/home/contactus/index#box3">
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
           <div class="sidebox2"><img src="/Public/images/index/2wm.jpg"></div>
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
                                <a href="/home/index/index">首页</a>
                            </li>
                            <li>
                                <a href="/home/Company/index">公司简介</a>
                            </li>
                            <li>
                                <a href="/home/ProTechnology/index">产品中心</a>
                            </li>
                            <li>
                                <a href="/home/News/index">新闻中心</a>
                            </li>
                            <li>
                                <a href="/home/ES/index">环境与社会</a>
                            </li>
                            <li>
                                <a href="/home/Career/index">职业中心</a>
                            </li>
                            <li>
                                <a href="/home/Contactus/index">联系我们</a>
                            </li>




                        </ul>
                </div>

            </nav>
        </div>
    </div>
</div>

<div class="container col-md-12" >
    <div class="row">
        <div class="carousel slide" id="carousel-780473">
            <div class="carousel-inner">
            <?php if(is_array($images1)): $i = 0; $__LIST__ = $images1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$images): $mod = ($i % 2 );++$i;?><div class="item active">
                    <img class="img-responsive" src="/Public/upload/<?php echo ($images["config_content"]); ?>" />
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($images2)): $i = 0; $__LIST__ = $images2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$images): $mod = ($i % 2 );++$i;?><div class="item">
                    <img class="img-responsive" src="/Public/upload/<?php echo ($images["config_content"]); ?>"/>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <?php if(is_array($images3)): $i = 0; $__LIST__ = $images3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$images): $mod = ($i % 2 );++$i;?><div class="item">
                    <img class="img-responsive" src="/Public/upload/<?php echo ($images["config_content"]); ?>">
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <a class="left carousel-control" href="#carousel-780473" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-780473" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            
        </div>
    </div>
</div>

<div class="col-md-12 container" >
<div class="row-md-1">&nbsp;</div>
<div class="xshidden row-md-1">&nbsp;</br></br></div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4 column">
        <div class="page-header">
            <div class="text-center">
                    <div class="big1">
                        <div>

                            产品简介
                        </div>
                    </div>
                    <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
                </div>
        </div>
    </div>
    <div class="col-md-4">
    </div>
</div>


<div class="xshidden row-md-1">&nbsp;</br></br></br>  </div>
<div class="container">
    <div class="col-md-1 column">
    </div>
    <div class="col-md-10 ">
        <div class="row">
            <div class="text-center">
            <?php if(is_array($index)): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-xs-6">
                    <div class="right_img">
                        <a href=""><img alt="70×70" src="/Public/upload/<?php echo ($vo["image"]); ?>" height="70" width="70" /></a>
                        <div class="caption">
                            <h3 class="yuan4">
                                <?php echo ($vo["title"]); ?>
                            </h3>
                            <p class="yuan44">
                                <?php echo ($vo["content"]); ?>
                            </p>

                        </div>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

            </div>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>



    <div class="row">
        <div class="col-md-4">
        </div>

        <div class="col-md-4 column">
            <div class="row-md-1">&nbsp;</br></br>  </div>
            <div class="page-header">
                <div class="text-center">
                    <div class="big1">
                        <div>

                            公司简介

                        </div>
                    </div>
                    <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="row-md-1">&nbsp;</div>
    <div class="container">

        <div class="col-md-11">
            <div class="row">
            <?php if(is_array($company)): $i = 0; $__LIST__ = $company;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-6" >

                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-9">
                            <h2 class="xiaobiao">
                                公司简介
                            </h2>

                            <p class="textzhu">
                                &nbsp;&nbsp;&nbsp;&nbsp;<span>    
                                <?php echo ($vo["content"]); ?>
                                <a class="more1" href="/home/Company/index">详情>></a></span>
                            </p>

                        </div>

                    </div>
                </div>
                <div class="row-md-1">&nbsp;</br></br></div>
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-5">
                    <div class="row-md-1">&nbsp;</div>
                    <img class="img-responsive xintu"  src="/Public/upload/<?php echo ($vo["image"]); ?>"/>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

    </div>
</div>
<div class="row-md-1">&nbsp;</br></br></div>
<div class="xshidden row-md-1">&nbsp;</br></br></div>
<div class="container col-md-12 footer-color">
    <div class="col-md-12">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-10 text-center weitext">
            <div class="row-md-1">&nbsp;</div>
            <div class="col-md-9 ">
                <div class="row">

                    <div class="col-md-12 col-xs-12" style="padding-top:1%" >
                        <div class="col-md-12 col-xs-12">
                            联系方式：
                            &nbsp;&nbsp;
                            手机号：181-34061015
                            &nbsp;&nbsp;&nbsp;
                            邮箱：kyenergy@vip.sina.com
                            &nbsp;&nbsp;&nbsp;
                            QQ:652846913
                        </div >
                    </div>
                    <div class="col-md-12 col-xs-12" style="padding-top:1%" >
                        <div class="col-xs-12 col-md-12">
                            公司地址：河北省廊坊市永清县里澜城镇（里澜城村）
                            &nbsp;&nbsp;&nbsp;
                            办公处：廊坊市广阳区盛德金地A座0907室
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12" style="padding-top:1%" >
                        <div class="col-xs-11 col-md-12">
                            京公网安备1104013201701号 京ICP备105623622号
                            <div class="row-md-1">&nbsp;</br></br></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="col-md-8">
                    <img class="carousel-inner img-responsive img-rounded" src="/Public/images/index/2wm_u146.png"/>
                    <div style="font-size:20px;">扫一扫</div>
                </div>
            </div>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>
</div>
</body>

</html>