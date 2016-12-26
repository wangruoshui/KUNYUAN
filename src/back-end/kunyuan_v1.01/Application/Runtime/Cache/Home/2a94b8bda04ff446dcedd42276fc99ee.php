<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>坤源</title>
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css">
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


        .right_img a:hover img{
          transition: transform 0.7s;
          -moz-transition: -moz-transform 0.7s;
          -webkit-transition: -webkit-transform 0.7s;
          -o-transition: -o-transform 0.7s;
          transform:scale(2,2);
            -ms-transform:scale(2,2); /* IE 9 */
            -moz-transform:scale(2,2); /* Firefox */
            -webkit-transform:scale(2,2); /* Safari and Chrome */
            -o-transform:scale(2,2); /* Opera */
          }
          .right_img a img{
          transition: transform 0.7s;
          -moz-transition: -moz-transform 0.7s;
          -webkit-transition: -webkit-transform 0.7s;
          -o-transition: -o-transform 0.7s;
          transform:scale(1,1);
            -ms-transform:scale(1,1); /* IE 9 */
            -moz-transform:scale(1,1); /* Firefox */
            -webkit-transform:scale(1,1); /* Safari and Chrome */
            -o-transform:scale(1,1); /* Opera */
          }
    </style>
</head>
<body>

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

      <li><?php if(is_array($weixin2wm)): $i = 0; $__LIST__ = $weixin2wm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weixin): $mod = ($i % 2 );++$i;?><div class="sidebox2"><img class="img-responsive" src="/Public/upload/<?php echo ($weixin["config_content"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
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
                        <li>
                            <a href="/index.php/home/index/index">首页
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/Company/index">公司简介
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/ProTechnology/index">产品中心
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/News/index">新闻中心
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/ES/index">环境与社会
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/Career/index">职业中心
                            <img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
                        </li>
                        <hr class="mdhidden hrme">
                        <li>
                            <a href="/index.php/home/Contactus/index">联系我们<img class="mdhidden moreyou" src="/Public/upload/more.png" /></a>
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
<div class="xshidden row-md-1">&nbsp;</div>
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
                    <div class="kunyuan">kunyuan</div>
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
            <?php if(is_array($index)): $i = 0; $__LIST__ = $index;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-xs-6 divgao">
                    <div class="right_img" >
                        <a href=""><img class="img-circle" src="/Public/upload/<?php echo ($vo["image"]); ?>" height="70" width="70" /></a>
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
            <div class="xshidden row-md-1">&nbsp;</br></br>  </div>
            <div class="page-header">
                <div class="text-center">
                    <div class="big1">
                        <div>

                            公司简介

                        </div>
                    </div>
                    <div class="kunyuan">kunyuan</div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
    <div class="xshidden row-md-1">&nbsp;</div>
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
                                <a class="more1" href="/index.php/home/Company/index">详情>></a></span>
                            </p>

                        </div>

                    </div>
                </div>
                <div class="xshidden row-md-1">&nbsp;</br></br></div>
                <div class="col-md-1">&nbsp;</div>
                <div class="col-md-5">
                    <div class="xshidden row-md-1">&nbsp;</div>
                    <img class="img-responsive xintu"  src="/Public/upload/<?php echo ($vo["image"]); ?>"/>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

    </div>
</div>
<div class="row-md-1">&nbsp;</br></br></div>
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

</html>