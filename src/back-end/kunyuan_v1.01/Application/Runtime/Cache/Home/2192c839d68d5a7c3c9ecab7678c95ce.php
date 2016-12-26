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
           <?php if(is_array($weixin2wm)): $i = 0; $__LIST__ = $weixin2wm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weixin): $mod = ($i % 2 );++$i;?><div class="sidebox2"><img  class="img-responsive" src="/Public/upload/<?php echo ($weixin["config_content"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
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

                        新闻列表
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container col-md-12"></br>
<div class="xshidden row">&nbsp</br></br></div>
    <div class="container">
        <div class="text-center">
            <div class="big">
                <div>
                    <img src="/Public/images/newslist/u321.png">
                    新闻中心
                    <img src="/Public/images/newslist/u321.png">
                </div>
            </div>
            <div class="kunyuan">kunyuan</div>
        </div>
        <!--第一部分，内容标题+下划线+产品标题-->
        <div class="row nc_first_top"></div>
        <div class="row nc_first">
        <?php if(is_array($newscontent)): $i = 0; $__LIST__ = $newscontent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-8 nc_first_left">
            <div class="row nc_first_left_title"><div class="col-md-11 col-xs-10 col-md-push-1 col-xs-push-1 xsnewstitle"><?php echo ($data["title"]); ?></div></div>
            <div class="xshidden row">&nbsp</div>
            <div class="col-xs-11 col-md-12 row nc_sat xiao">
                <div class="col-xs-2 col-md-2 col-md-push-5 col-xs-push-2 source">来源：<?php echo ($data["resource"]); ?></div>
                <div class="col-xs-2 col-xs-push-3 col-md-2 col-md-push-5 author">时间：<?php echo ($data["time"]); ?></div>
                <div class="col-xs-6 col-xs-push-4 col-md-6 col-md-push-6 push_time"></div>
            </div>
    
            <div class="col-md-12 col-xs-12">

                <!--第二部分内容-->
 
                <div class="xshidden row">&nbsp</div>
                <div class="col-xs-12 col-md-9 col-md-push-2 col-xs-push-0 ">
             
                        <img  class="leftxin img-responsive" src="/Public/upload/<?php echo ($data["image"]); ?>">
            
                </div>
                <div class="row">&nbsp;</div><div class="row">&nbsp;</div>


                <div class="col-md-11 col-xs-12 col-md-push-1">
                    <p class="nc-second_content">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (htmlspecialchars_decode($data["content"])); ?>
                    </p>
                </div>

                <!--第二部分结束-->
                <!--第三部分开启-->
                <div class="row">&nbsp</div>
                <div class="row">&nbsp</div>
                <div class="col-md-12 nc_third_top">
                    <div class="col-md-4 col-md-offset-8 col-md-push-3 col-xs-4 col-xs-push-8">
                        <a href="#"></a></div>
                </div>
                <div class="xshidden row">&nbsp;</br></br></div>
                
                <div class="row col-md-12 col-xs-11 nc_third_foot">
                    <div class="col-md-2  col-md-offset-6 col-md-push-2 col-xs-2 col-xs-push-3">
                        <script>

                        </script>
                        <a href="/index.php/home/newscontent/index/id/<?php echo ($lastid); ?>" class="<?php echo ($lastid); ?>" id="judgeleft"> <button type="button" class="btn btn-md btn-default">上一篇</button></a>
                    </div>
                    <div class="col-md-4 col-md-push-3 col-xs-2 col-xs-push-6">
                        <a href="/index.php/home/newscontent/index/id/<?php echo ($nextid); ?>" class="<?php echo ($nextid); ?>" id="judgeright"><button type="button" class="btn btn-md btn-default">下一篇</button></a>
                    </div>
                    <script type="text/javascript">
                        x=document.getElementById("judgeleft"); // 找到元素
                        var xclass=x.className;
                        if(xclass==0)
                        {
                            x.style.display="none";
                        }
                        y=document.getElementById("judgeright");//找到元素
                        var yclass=y.className;
                        console.log(yclass);
                        console.log(yclass==0);
                        if(yclass==0)
                        {
                            y.style.display="none";
                        }
                    </script>
                </div>
                <!--第三部分结束--><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
            
            
            <div class="col-md-4 col-md-push-0">
            <div class="col-md-1 hidden-xs"><img src="/Public/images/newslist/u1690.png"></div>
            <div class="mdhidden row">&nbsp;</br></br></br></div>
            <div class="col-md-11">
                <div class="row news_push_title">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-5  col-xs-8 news_push_title_first">产品展示</div>
                </div>
                <div class="row right_first_hr">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-9  right_hr_p"><hr style=" height:2px;border:none;border-top:1px  solid #000;" />
                    </div>
                </div>
                
                <!--第四部分开始-->

                <div class="row">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>">
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>">
                            </a><?php endforeach; endif; else: echo "" ;endif; ?>
                   </div>
                </div>
                <div class="row right_first_word">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-xs-4  col-md-4 right_first_word_first">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                   
                    <div class="col-xs-4 right_first_word_second">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    
                    <div class="col-md-4 col-xs-4">
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($data1["image"]); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
                </div>

                <div class="row right_first_word">
                    <div class="col-md-1 col-xs-1">&nbsp</div>
                    <div class="col-xs-4  col-md-4 right_first_word_first">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
                            <div class="row">&nbsp</div>
                    </div>
                    
                    <div class="col-xs-4 right_first_word_second">
                        <div class="row">&nbsp</div>
                        <?php if(is_array($products)): $i = 0; $__LIST__ = array_slice($products,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data1): $mod = ($i % 2 );++$i;?><a href="/index.php/home/Proshow/index/id/<?php echo ($data1["productid"]); ?>"><?php echo ($data1["name"]); ?>生物材料</a><?php endforeach; endif; else: echo "" ;endif; ?>
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
                <?php if(is_array($recommonnews)): $i = 0; $__LIST__ = $recommonnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="row news_push_content"><div class="col-md-1 col-xs-1">&nbsp</div><div class="col-md-8"><a href="/index.php/home/newscontent/index/id/<?php echo ($data["commonid"]); ?>"><?php echo (mb_substr($data["title"],0,15,'utf-8')); ?>..</a></div></div><?php endforeach; endif; else: echo "" ;endif; ?>

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