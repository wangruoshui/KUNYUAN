<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>坤源</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public/css/recruit.css"  type="text/css" rel="stylesheet">
    <link href="/Public/css/environment.css"  type="text/css" rel="stylesheet">

    <link href="/Public/css/newscontent.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="/Public/css/ProductContent2.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/ProductList.css">
    <link href="/Public/css/contactus.css" type="text/css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/Public/bootstrap/css/bootstrap-theme.css">

    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">
    <!--<script type="text/javascript" src="/Public/bootstrap/js/npm.js"></script>-->
    <script type="text/javascript" src="/Public/bootstrap/js/jquery.js"></script>

    <!--<script src="/Public/js/main.js"></script>-->
    <script type="text/javascript" src="/Public/bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript" src="/Public/js/broad.js"></script>
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
                            <a href="/home/index/index">首页</a>
                        </li>
                        <li>
                            <a href="/home/Company/index">公司简介</a>
                        </li>
                        <li class="dropdown" onmouseover="show(this)" onmouseout="hide(this)">
                            <a href="" class="dropdown-toggle"  data-toggle="dropdown">产品中心</a>
                            <ul class="dropdown-menu" style="background-color: #fff">
                                <li>
                                    <a href="/home/ProTechnology/index#box1" style="color:#000">产品技术</a>
                                </li>
                                <li>
                                    <a href="/home/protechnology/index#box2" style="color:#000">产品展示</a>
                                </li>
                                <li>
                                    <a href="/home/protechnology/index#box3"style="color:#000">销售范围</a>
                                </li>
                                <li>
                                    <a href="/home/protechnology/index#box4"style="color:#000s">样品寄送</a>
                                </li>
                                <script type="text/javascript">
                                    function show(li) {
                                        var ul = li.firstChild.nextSibling.nextSibling.nextSibling;
                                        ul.style.display = "block";
                                    }
                                    function hide(li) {
                                        var ul = li.firstChild.nextSibling.nextSibling.nextSibling;
                                        ul.style.display = "none";
                                    }
                                </script>


                            </ul>

                        </li>
                        <li>
                            <a href="/home/News/index">新闻中心</a>
                        </li>
                        <li class="dropdown" onmouseover="show(this)" onmouseout="hide(this)">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">环境与社会</a>
                            <ul class="dropdown-menu" style="background-color: #fff">
                                <li>
                                    <a href="/home/ES/index#box1" style="color:#000">社会需求</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index#box2"style="color:#000">政策支持</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index#box3"style="color:#000">燃料地域限制</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown" onmouseover="show(this)" onmouseout="hide(this)">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown" >职业中心</a>
                            <ul class="dropdown-menu" style="background-color: #fff">
                                <li>
                                    <a href="/home/Career/index#box1"style="color:#000">人才理念</a>
                                </li>
                                <li>
                                    <a href="/home/Career/index#box2"style="color:#000">岗位招聘</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown" onmouseover="show(this)" onmouseout="hide(this)">
                            <a class="dropdown-toggle" data-toggle="dropdown">联系我们</a>
                            <ul class="dropdown-menu" style="background-color: #fff">
                                <li>
                                    <a href="/home/contactus/index#box1" style="color:#000">联系方式</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index#box2"style="color:#000">加入我们</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index#box3"style="color:#000">客户留言</a>
                                </li>

                            </ul>

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
            <a href="/home/contactus/index#box3">
                <div class="sidebox">
                <img src="/Public/images/index/side_icon01.png">在线留言
                </div>
            </a>
        </li>
      <li>
          <a href="/home/qq/index" >
            <div class="sidebox"><img src="/Public/images/index/side_icon04.png">QQ客服</div>
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
<script src="http://www.lanrenzhijia.com/ajaxjs/jquery.min.js"></script>    
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
                        <a href="index.html">首页</a>
                    </li>

                    <li class="active">

                        新闻列表
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12">
<div class="row">&nbsp</br></br></br></div>
    <div class="container">
        <div class="text-center">
            <div class="big">
                <div>
                    <img src="/Public/images/newslist/u321.png">
                    新闻中心
                    <img src="/Public/images/newslist/u321.png">
                </div>
            </div>
            <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
        </div>
        <!--第一部分，内容标题+下划线+产品标题-->
        <div class="row">&nbsp</br></br></div>
        <div class="row nc_first_top"></div>
        <div class="row nc_first">
        <div class="xshidden row">&nbsp</br></br></div>
        <?php if(is_array($newscontent)): $i = 0; $__LIST__ = $newscontent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-7 nc_first_left">
            <div class="row nc_first_left_title"><div class="col-md-11 col-xs-10 col-md-push-1 col-xs-push-1 xsnewstitle text-center"><?php echo ($data["title"]); ?></div></div>
            <div class="row">&nbsp</div>
            <div class="col-xs-11 col-md-12 row nc_sat xiao">
                <div class="col-xs-2 col-md-2 col-md-push-4 col-xs-push-2 source">来源：<?php echo ($data["resource"]); ?></div>
                <div class="col-xs-2 col-xs-push-3 col-md-2 col-md-push-5 author">时间：<?php echo ($data["time"]); ?></div>
                <div class="col-xs-6 col-xs-push-4 col-md-6 col-md-push-6 push_time"></div>
            </div>
            <div class="row-md-1">&nbsp;</div>
            <div class="col-md-12 col-xs-12">

                <!--第二部分内容-->
                <div class="row xshidden">&nbsp</div>
                <div class="row xshidden">&nbsp</div>
                <div class="row">&nbsp</div>
                <div class="col-xs-12 col-md-9 col-md-push-2 col-xs-push-0 ">
             
                        <img  class="leftxin img-responsive" src="/Public/upload/<?php echo ($data["image"]); ?>">
            
                </div>
                <div class="row">&nbsp;</div><div class="row">&nbsp;</div>


                <div class="col-md-12 col-xs-12 col-md-push-1">
                    <p class="nc-second_content">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($data["content"]); ?></p>
                </div>

                <!--第二部分结束-->
                <!--第三部分开启-->
                <div class="row">&nbsp</div>
                <div class="row">&nbsp</div>
                <div class="col-md-12 nc_third_top">
                    <div class="col-md-4 col-md-offset-8 col-md-push-3 col-xs-4 col-xs-push-8">
                        <a href="#"></a></div>
                </div>
                <div class="row">&nbsp</div>
                <div class="row">&nbsp</div>
                <div class="row col-md-12 col-xs-11 nc_third_foot">
                    <div class="col-md-2  col-md-offset-6 col-md-push-2 col-xs-2 col-xs-push-3">
                        <script>

                        </script>
                        <a href="/home/newscontent/index/id/<?php echo ($lastid); ?>" class="<?php echo ($lastid); ?>" id="judgeleft"> <button type="button" class="btn btn-md btn-default">上一篇</button></a>
                    </div>
                    <div class="col-md-4 col-md-push-3 col-xs-2 col-xs-push-6">
                        <a href="/home/newscontent/index/id/<?php echo ($nextid); ?>" class="<?php echo ($nextid); ?>" id="judgeright"><button type="button" class="btn btn-md btn-default">下一篇</button></a>
                    </div>
                    <script type="text/javascript">

                        x=document.getElementById("judgeleft"); // 找到元素
                        if(<?php echo ($lastid); ?>){
                        x.style.display="none" ;}
                    </script>
                </div>
                <!--第三部分结束--><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
            
            
            <div class="col-md-4 col-md-push-0">
            <div class="col-md-1 hidden-xs"><img src="/Public/images/newslist/u1690.png"></div>
            <div class="col-md-11">
                <div class="col-md-12 row product_title">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-5  col-xs-8 product_title_first">产品展示</div>

                </div>
                <div class="row">&nbsp</div>
                <div class="row right_first_hr">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-9  right_hr_p"><hr style=" height:2px;border:none;border-top:1px  solid #000;" />
                    </div>
                </div>
                
                <!--第四部分开始-->

                <div class="row">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>">
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>">
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div>
                </div>
                <div class="row right_first_word">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-xs-4  col-md-4 right_first_word_first">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                   
                    <div class="col-xs-4 right_first_word_second">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
                </div>

                <div class="row right_first_word">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-xs-4  col-md-4 right_first_word_first">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                    
                    <div class="col-xs-4 right_first_word_second">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                </div>

                <!--第四部分结束-->
                <!--第五部分开始-->
                <div class="row">&nbsp</div>
                <div class="row news_push_title">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-5  col-xs-8 news_push_title_first">新闻推荐</div>
                </div>
                <div class="row right_first_hr">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-9  right_hr_p"><hr style=" height:2px;border:none;border-top:1px  solid #000;" />
                    </div>
                </div>

                <div class="row news_push_content"><div class="col-md-2 col-xs-1">&nbsp</div><div class="col-md-8">
                                    </div></div>
                <?php if(is_array($recommonnews)): $i = 0; $__LIST__ = $recommonnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="row news_push_content"><div class="col-md-1 col-xs-1">&nbsp</div><div class="col-md-8"><a href="/home/newscontent/index/id/<?php echo ($data["commonid"]); ?>">》<?php echo (mb_substr($data["title"],0,15,'utf-8')); ?>..</a></div></div><?php endforeach; endif; else: echo "" ;endif; ?>

                <!--第五部分结束-->
                <!--第六部分开始-->
                <div class="row">&nbsp</div>


                               <!--第六部分结束-->
            </div>
        </div>
        </div>
        <!--第一部分结束-->
    </div>
</div>
<div class="row-md-1">&nbsp;</br></br></div>
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
                        </div>
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
<script type="text/javascript">

    $(".img-change").mouseover(function () {
        var str = $(this).attr("name");
        var addstr ='/Public/images/ProTechnology/' + str + "_mouseOver.png";
        $(this).attr("src",addstr);
    });
    $(".img-change").mouseout(function () {
        var str = $(this).attr("name");
        var addstr ='/Public/images/ProTechnology/' + str + ".png";
        $(this).attr("src",addstr);
    });
    $(".img-change1").mouseover(function () {
        var str = $(this).attr("name");
        var addstr ='/Public/images/ProTechnology/' + str + "_mouseOver.png";
        $(this).attr("src",addstr);
    });
    $(".img-change1").mouseout(function () {
        var str = $(this).attr("name");
        var addstr ='/Public/images/ProTechnology/' + str + ".jpg";
        $(this).attr("src",addstr);
    });
    $(".y-change").click(function(){
        $("#box").scrollTop(100);
    });

</script>
</html>