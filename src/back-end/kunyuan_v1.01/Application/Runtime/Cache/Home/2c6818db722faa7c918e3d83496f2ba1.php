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

						产品中心
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<div class="col-md-12 container">

	<!--content-->
	<!--content-nav-->
	<div class="xshidden row">
		<div class="col-md-9 col-md-offset-2 col-xs-12 col-xs-offset-0">
			<div class="content-nav">
				<div class="col-md-3 text-center col-xs-3">
					<div class="content-nav-icon">
						<a href="#box1"><img src="/Public/images/protechnology/u3.png" name="u3" class="img-change" /></a>
						<h3 class="nav-font">产品技术</h3>
						<p>get more......</p> 
					</div>
					<img src="/Public/images/protechnology/u11.png" class="xshidden content-nav-line">
				</div>
			</div>
			<div class="content-nav">
				<div class="col-md-3 text-center col-xs-3">
					<div class="content-nav-icon">
						<a href="#box2"><img src="/Public/images/protechnology/u7.png" name="u7" class="img-change"></a>
						<h3 class="nav-font">产品展示</h3>
						<p>get more......</p>
					</div>
					<img src="/Public/images/protechnology/u11.png" class="xshidden content-nav-line">
				</div>
			</div>
			<div class="content-nav">
				<div class="col-md-3 text-center col-xs-3">
					<div class="content-nav-icon">
						<a href="#box3"><img src="/Public/images/protechnology/u9.png" name="u9" class="img-change"></a>
						<h3 class="nav-font">销售范围</h3>
						<p>get more......</p>
					</div>
					<img src="/Public/images/protechnology/u11.png" class="xshidden content-nav-line">
				</div>
			</div>
			<div class="content-nav">
				<div class="col-md-3 text-center col-xs-3">
					<div class="content-nav-icon">
						<a href="#box4"><img src="/Public/images/protechnology/u5.png" name="u5" class="img-change"></a>
						<h3 class="nav-font">样品寄送</h3>
						<p>get more......</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--content-nav-end-->
	<!--content1-->
	
	<div class="xshidden row-md-1">&nbsp;</br></br></br>
	<div id="box1"></div></br></div>
	<div class="col-md-12" style="margin-top:1%;">
		<div class="text-center">
			<div class="big">
				<div>
					<img src="/Public/images/protechnology/u321.png">
					产品技术
					<img src="/Public/images/protechnology/u321.png">
				</div>
			</div>
			<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-1-1">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:2%;">
					<div class="mdhidden col-xs-1"></div>
					<?php if(is_array($technology)): $i = 0; $__LIST__ = array_slice($technology,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-5 col-md-push-7 col-xs-12">
						<img src="/Public/upload/<?php echo ($data["image"]); ?>" class="carousel-inner img-responsive img-rounded" style="margin-top:7%;">
					</div>
					<div class="col-md-5 col-md-pull-5 col-md-push-0 fadeInLeft col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div>
							<div class="mdhidden row-xs-1">&nbsp;</div>
							<h3>1.原料选取</h3>
							<p class="content1-text-p">   <volist name="technology" id="data" offset="0" length="1">
								<?php echo ($data["content"]); endforeach; endif; else: echo "" ;endif; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<img src="/Public/images/protechnology/u110.png" class="col-md-10 col-xs-8 col-md-offset-1 col-xs-offset-2" style="margin-top:4%;">
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12 col-md-offset-0 col-xs-offset-0">
			<div class="content-1-2" style="margin-top:1%;">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:2%;">
                    <?php if(is_array($technology)): $i = 0; $__LIST__ = array_slice($technology,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-5 col-md-pull-0 col-xs-12 col-xs-push-0 col-xs-pull-0">
						<img src="/Public/upload/<?php echo ($data["image"]); ?>" class="carousel-inner img-responsive img-rounded" style="margin-top:9%;">
					</div>
					<div class="col-md-5  col-md-push-2 col-md-pull-0 fadeInLeft col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div class=" content1-text" style="margin-top:4%;">
							<div class="mdhidden row-xs-1">&nbsp;</div>
							<h3>2.前提准备</h3>
							<p class="content1-text-p">
								<?php echo ($data["content"]); endforeach; endif; else: echo "" ;endif; ?></p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<img src="/Public/images/protechnology/u110.png" class="col-md-10 col-xs-8 col-md-offset-1 col-xs-offset-2" style="margin-top:5%;">
	</div>

	<div class="col-md-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-1-1">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:1%;">
					<div class="mdhidden col-xs-1"></div>
                    <?php if(is_array($technology)): $i = 0; $__LIST__ = array_slice($technology,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-md-5 col-md-push-7 col-xs-12">
						<img src="/Public/upload/<?php echo ($data["image"]); ?>" class="carousel-inner img-responsive img-rounded" style="margin-top:7%;">
					</div>
					<div class="col-md-5 col-md-pull-5 col-md-push-0 fadeInLeft col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div>
							<div class="mdhidden row-xs-1">&nbsp;</div>
							<h3>3.制作过程</h3>
							<p class="content1-text-p">
								<?php echo ($data["content"]); endforeach; endif; else: echo "" ;endif; ?></p></p></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--content1-end-->
	<!--content2-->
	
	
	<div class="col-md-12">
	<div class="xshidden row-md-1">&nbsp;</br></br></br></div>
	<div id="box2"></div>
		<div class="title" style="margin-top:2%;">
			<div class="text-center">
				<div class="big">
					<div>
						<img src="/Public/images/protechnology/u321.png">
						产品展示
						<img src="/Public/images/protechnology/u321.png">
					</div>
				</div>
				<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-2-1" style="margin-top:4%;">
				<div class="col-md-10 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:2%;">
					<div class="col-md-5 col-md-push-0 col-md-pull-1 col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div class="col-xs-12 col-md-12 ">

							<div class="img-thumbnail1 col-xs-12 col-md-12" style="padding:0px;margin:0px">
                                <?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><img src="/Public/upload/<?php echo ($data["image"]); ?>" class=" carousel-inner img-responsive  " name="u92">
							</div>

						</div>

					</div>
					<div class="col-md-5 col-md-push-1 col-md-pull-0 col-xs-12 col-xs-push-0 col-xs-pull-0 " style="margin-top:2%;">
						<div class="col-xs-12 col-md-11 content2-text">
							<h3>--<a href="/home/Proshow/index/id/<?php echo ($data["productid"]); ?>" class="proContent">



                                <?php echo ($data["name"]); ?></a>生物质材料</h3>
							<p class="content2-text-p"><?php echo ($data["introductions"]); ?></p>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<img src="/Public/images/protechnology/u110.png" class="col-md-12 col-xs-8 col-md-offset-0 col-xs-offset-2" style="margin-top:4%;">
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-2-1" style="margin-top:3%;">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:1%;">
					<div class="col-md-6 col-md-push-7 col-md-pull-1 col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div class="col-xs-12 col-md-12 img-thumbnail1" style="padding:0px;margin:0px">
                            <?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class=" col-xs-12" style="margin:0px;padding: 0px" >
								<img src="/Public/upload/<?php echo ($data["image"]); ?>" class=" carousel-inner img-responsive  " name="u94">
							</div>

						</div>
					</div>
					<div class="col-md-6 col-md-push-0 col-md-pull-7 col-xs-12 col-xs-push-0 col-xs-pull-0 fadeInLeft" style="margin-top:5%;">
						<div class="col-xs-12 content2-text">
							<h3>--<a href="/home/Proshow/index/id/<?php echo ($data["productid"]); ?>" class="proContent"><?php echo ($data["name"]); ?></a>生物质材料</h3>
							<p class="content2-text-p"><?php echo ($data["introductions"]); ?></p>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<img src="/Public/images/protechnology/u110.png" class="col-md-12 col-xs-8 col-md-offset-0 col-xs-offset-2" style="margin-top:4%;">
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-2-1" style="margin-top:3%;">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:1%;">
					<div class="col-md-6 col-md-push-0 col-md-pull-1 col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div class="col-xs-12 col-md-12 img-thumbnail1" >
                            <?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class=" col-xs-12" style="padding:0px;margin:0px">
								<img src="/Public/upload/<?php echo ($data["image"]); ?>" class=" carousel-inner img-responsive  " name="u96">
							</div>

						</div>

					</div>
					<div class="col-md-6 col-md-push-1 col-md-pull-0 col-xs-12 col-xs-push-0 col-xs-pull-0 " style="margin-top:5%;">
						<div class="col-xs-12 content2-text">
							<h3>--<a href="/home/Proshow/index/id/<?php echo ($data["productid"]); ?>" class="proContent"><?php echo ($data["name"]); ?></a>生物质材料</h3>
							<p class="content2-text-p"><?php echo ($data["introductions"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-12">
		<img src="/Public/images/protechnology/u110.png" class="col-md-12 col-xs-8 col-md-offset-0 col-xs-offset-2" style="margin-top:4%;">
	</div>
	<div class="col-md-12 col-xs-12">
		<div class="col-md-12 col-xs-12">
			<div class="content-2-1" style="margin-top:3%;">
				<div class="col-md-8 col-xs-12 col-md-offset-2 col-xs-offset-0" style="margin-top:1%;">
					<div class="col-md-6 col-md-push-7 col-md-pull-1 col-xs-12 col-xs-push-0 col-xs-pull-0">
						<div class="col-xs-12 col-md-12 img-thumbnail1" style="padding:0px;margin:0px">
                            <?php if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="col-xs-12" style="margin:0px;padding: 0px">
								<img src="/Public/upload/<?php echo ($data["image"]); ?>" class=" carousel-inner img-responsive  " name="u98">
							</div>

						</div>
					</div>
					<div class="col-md-6 col-md-push-0 col-md-pull-7 col-xs-12 col-xs-push-0 col-xs-pull-0 fadeInLeft" style="margin-top:5%;">
						<div class="col-xs-12 content2-text">
							<h3>--<a href="/home/Proshow/index/id/<?php echo ($data["productid"]); ?>" class="proContent"><?php echo ($data["name"]); ?></a>生物质材料</h3>
							<p class="content2-text-p"><?php echo ($data["introductions"]); ?></p>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!--content2-end-->
	<!--content3-->
	
	<div class="col-md-12 col-xs-12" style="margin-top:4%;">
	<div class="xshidden row-md-1">&nbsp;</br></br><div id="box3"></div></br></br></div>
		<div class="text-center">
			<div class="big">
				<div>
					<img src="/Public/images/protechnology/u321.png">
					销售范围
					<img src="/Public/images/protechnology/u321.png">
				</div>
			</div>
			<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-12 col-xs-12 col-md-offset-0 col-xs-offset-0">
			<div class="content-3-1" style="margin-top:2%;">
				<div class="col-md-10 col-xs-12 col-md-offset-2 col-xs-offset-0">
					<div class="row-md-1">&nbsp;</div>
					<div class="row-md-1">&nbsp;</div>
					<div class="col-md-5 col-md-push-5 col-md-pull-1 col-xs-12 col-xs-push-0 col-xs-pull-1">
					<?php if(is_array($range)): $i = 0; $__LIST__ = $range;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><img src="/Public/upload/<?php echo ($data["image"]); ?>" class="carousel-inner img-responsive img-rounded content3-img">
					</div>
					<div class="col-md-5 col-md-push-0 col-md-pull-6 col-xs-12 col-xs-push-0 col-xs-pull-0 fadeInLeft">
						<div class="col-xs-12 col-md-10">
							<h2>销售<a href="#" class="content3-h1">范围:</a></h2>
							<p class="content3-text-p"> 
                                <?php echo ($data["content"]); endforeach; endif; else: echo "" ;endif; ?></p>
							<h5>—公司地址<a href="/home/company/index ">（河北省廊坊市永清县里澜城镇-里澜城村）</a></h5>
						</div>
					</div>
				</div>
				<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div>
			</div>
		</div>
	</div>
	<!--content3-end-->

	<!--content4-->
	
	<div class="col-md-12 col-xs-12" style="margin-top:2%;">
	<div  id="box4" class="row-md-1">&nbsp;</br></br></div>
		<div class="text-center">
			<div class="big">
				<div>
					<img src="/Public/images/protechnology/u321.png">
					样品寄送
					<img src="/Public/images/protechnology/u321.png">
				</div>
			</div>
			<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-push-1 col-md-pull-0 col-xs-12 col-xs-push-0 col-xs-pull-0 text-center">
			<h2 class="pro">样品<a class="content4-title">申请</a>流程：</h2>
		</div>
	</div>
	<div class="row col-md-12">
		<div class="col-md-11 col-md-push-1">
			<div class="row">
				<div class="col-md-3 col-md-push-2 col-md-pull-0 col-xs-3 col-xs-push-0 col-xs-pull-0">
					<div class="content4-img-1">
						<img src="/Public/images/protechnology/u144.png" class="content4-img1"/>
						<img src="/Public/images/protechnology/u140.png" class="content4-img2"/>
						<h3>填写信息</h3>
					</div>
				</div>
				<div class="xshidden col-md-4 col-md-offset-1  col-xs-4 col-xs-offset-1" style="margin-top:12%;">
					<img src="/Public/images/protechnology/u170.png">
				</div>
				<div class="col-md-3 col-md-push-0 col-md-pull-1 col-xs-3 col-xs-push-3 col-xs-pull-0">
					<div class="content4-img-2">
						<img src="/Public/images/protechnology/u152.png" class="content4-img1"/>
						<img src="/Public/images/protechnology/u140.png" class="content4-img2"/>
						<h3>收到请求</h3>
					</div>
				</div>
			</div>
			<div class="xshidden row">
				<div class="col-md-1 col-md-pull-2" style="margin-top:2%;padding-left:82%;" >
					<img src="/Public/images/protechnology/u172.png">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-push-2 col-md-pull-0 col-xs-3 col-xs-push-0 col-xs-pull-0">
					<div class="content4-img-3">
						<img src="/Public/images/protechnology/u160.png" class="content4-img1"/>
						<img src="/Public/images/protechnology/u140.png" class="content4-img2"/>
						<h3>发送样品</h3>
					</div>
				</div>
				<div class="xshidden col-md-4 col-md-offset-1  col-xs-4 col-xs-offset-1" style="margin-top:10%;">
					<img src="/Public/images/protechnology/u180.png">
				</div>
				<div class="col-md-3 col-md-push-0 col-md-pull-1 col-xs-3 col-xs-push-3 col-xs-pull-0">
					<div class="content4-img-4">
						<img src="/Public/images/protechnology/u168.png" class="content4-img1"/>
						<img src="/Public/images/protechnology/u140.png" class="content4-img2"/>
						<h3>收到样品</h3>
					</div>
				</div>
			</div>

		</div>
		<div class="row-md-1">&nbsp;</div>
		<div class="container col-md-12">
			<div class="col-md-4 col-md-push-4 col-xs-9 col-xs-push-3" style="margin-top:6%;margin-left:3.6%;">
				<img class="xshidden" src="/Public/images/protechnology/u174.png">
				<a href="/home/send/index"><img src="/Public/images/protechnology/u176.png" style="margin-left:1%;" class="img-change" name="u176"></a>
			</div>
		</div>
	</div>
	<div class="row-md-1">&nbsp;</br></br></div>
	<!--content4-end-->
	<!--content-end-->
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