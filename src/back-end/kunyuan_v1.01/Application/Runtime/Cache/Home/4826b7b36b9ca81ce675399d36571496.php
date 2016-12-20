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
    <style type="text/css">
img{border:0;}
ul,li{padding:0;margin:0;}
.suspend {z-index:99;right:0;width:128px;height:128px;position:absolute;}
.suspend .press{right:0;width:72px;cursor:pointer;position:absolute;height:128px;}
.suspend .suspend_list{left:0;width:131px;position:absolute;height:128px;}
.suspend .suspend_list ul{padding:43px 0 0 21px;}
.suspend .suspend_list li{height:26px;margin-bottom:11px;_margin-bottom:7px; list-style-type:none;}
</style>
<script type="text/javascript">
window.onload = window.onresize = window.onscroll = function ()
{
 var oBox = document.getElementById("qqbox_zzjs");
 var oLine = document.getElementById("online_wwwzzjsnet");
 var oMenu = document.getElementById("menu_zzjs_net");
 var iScrollTop = document.documentElement.scrollTop || document.body.scrollTop;
 setTimeout(function ()
 {
  clearInterval(oBox.timer);
  var iTop = parseInt((document.documentElement.clientHeight - oBox.offsetHeight)/2) + iScrollTop;
  oBox.timer = setInterval(function ()
  {
   var iSpeed = (iTop - oBox.offsetTop) / 8;
   iSpeed = iSpeed > 0 ? Math.ceil(iSpeed) : Math.floor(iSpeed);
   oBox.offsetTop == iTop ? clearInterval(oBox.timer) : (oBox.style.top = oBox.offsetTop + iSpeed + "px");
  }, 30)
 }, 100)

 oBox.onmouseover = function ()
 {
  this.style.width = 80 + "px";
  oLine.style.display = "block";
  oMenu.style.display = "none";
 };
 oBox.onmouseout = function ()
 {
  this.style.width = '';
  oLine.style.display = "none";
  oMenu.style.display = "block";
 };
};
</script>
</head>
<body>

<div class="container">

    <div class="dangtext row">
        <div>
            <nav class="navbar navbar-default-me     " role="navigation" style="margin:0px;padding:0px;border:0">

                <div class="col-md-2 navbar-brand">
                    <img class="navbar-brand2" src="/Public/images/logo.png">
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
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">产品中心</a>
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



                            </ul>

                        </li>
                        <li>
                            <a href="/home/News/index">新闻中心</a>
                        </li>
                        <li class="dropdown">
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
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">职业中心</a>
                            <ul class="dropdown-menu" style="background-color: #fff">
                                <li>
                                    <a href="/home/Career/index#box1"style="color:#000">人才理念</a>
                                </li>
                                <li>
                                    <a href="/home/Career/index#box2"style="color:#000">岗位招聘</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown" >
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



<div class="suspend" id="qqbox_zzjs" >
<div class="suspend_list" id="online_wwwzzjsnet" style="display:none;">

<ul>
<a href="/home/contactus/index#box3"><li><img src="/Public/images/index/u184_mouseOver.png" alt="留言"></li></a>
<li style="padding-top:15px"><a href="#"><img src="/Public/images/index/u182_mouseOver.png" alt="QQ"></a></li>
<li style="padding-top:37px"><a href="#"><img  src="/Public/images/index/u192_mouseOver.png" alt="微信"></a></li>

</ul>
</div>
<div id="menu_zzjs_net"><img src="/Public/images/index/u177.png" class="press" alt="咨询"></div>
<div id="menu_zzjs_net" class="press" style="padding-left:21px">咨询</div>
</div>

<div class="container col-md-12 font-family"style="padding:0px">
	<div class="container col-md-12" style="padding:0px">
		<div>
			<div class="carousel slide" >

				<div class="carousel-inner">
					<div class="item active" >
						<img  src="/Public/images/company/5_u286.jpg" width="100%" />
					</div>
				</div>
			</div>
		</div>
		<div class="row clearfix" style="margin:0px">
			<div>

				<ul class="breadcrumb ">

					<li>
						您所在的位置:
						<a href="/home/index/index">首页</a>
					</li>
					<li>

						<a href="/home/protechnology/index">产品中心</a>
					</li>
					<li class="active">
						产品内容

					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="xshidden row-md-1">&nbsp;</br></br></br> </div>
<?php if(is_array($product)): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="row">
		<div class="text-center">
			<div class="big">
				<img src="/Public/images/productContent/u321.png">
				<?php echo ($data["name"]); ?>生物质材料
				<img src="/Public/images/productContent/u321.png">
			</div>
			<p style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">&nbsp;</div>
		<div class="text-center content-con1  col-md-10 col-md-offset-0 col-xs-10 col-xs-offset-1">

			<img src="/Public/images/productContent/u1020.jpg" class="xstu21 content-img col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1 col-md-push-4">
			<div class="content-text col-md-2 col-md-offset-1 col-xs-10 col-xs-offset-1 col-md-pull-7 fadeInLeft" style="margin-top: 7%;">
				<h3>--产品简介</h3>
				<p class="content-text-p"><?php echo (substr($data["introductions"],0,174)); ?></p>
			</div>
		</div>


		<div class="col-md-1">&nbsp;</div>
		<div class="col-md-2">&nbsp;</div>

		<div class="xstu text-center content-con2   col-md-10 col-md-offset-0 col-xs-10 col-xs-offset-1">

			<img src="/Public/images/productContent/u1020.jpg" class="xstu22 content-img2 col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="content-text2 col-md-2 col-xs-10 col-xs-offset-1" style="margin-right: 16%;margin-top: 6%;">
				<h3>--产品优势</h3>
				<p class="content-text-p"><?php echo (substr($data["advantage"],0,174)); ?></p>
			</div>

		</div>

		<div class="col-md-1">&nbsp;</div>
		<div class="xstu text-center content-con1  col-md-10 col-md-offset-0 col-xs-10 col-xs-offset-1">

			<img src="/Public/images/productContent/u1020.jpg" class="xstu21 content-img col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1 col-md-push-4">
			<div class="content-text col-md-2 col-md-offset-1 col-xs-10 col-xs-offset-1 col-md-pull-7 fadeInLeft"  style="margin-left: 10%;margin-top: 6%;">
				<h3>--产品指标</h3>
				<p class="content-text-p"><?php echo (substr($data["quota"],0,174)); ?></p>
			</div>
		</div>
		<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">&nbsp;</div>
		<div class="col-md-12 col-md-offset-0 col-xs-10 col-xs-offset-1">&nbsp;</div>
		<div class="col-md-2">&nbsp;</div>
		<div class="xstu text-center content-con2   col-md-10 col-md-offset-0 col-xs-10 col-xs-offset-1">

			<img src="/Public/images/productContent/u1020.jpg" class="xstu22 content-img2 col-md-6 col-md-offset-1 col-xs-10 col-xs-offset-1">
			<div class="content-text2 col-md-2 col-xs-10 col-xs-offset-1" style="margin-right: 14%;margin-top: 7%;">
				<h3>--产品价格</h3>
				<p class="content-text-p"><?php echo ($data["price"]); ?>元每吨，同比其他公司产品，我们的价格更实惠</p>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="end col-md-12 text-center">
			<div style="font-size:25px; font-family:Axure Handwriting ">
				<img src="/Public/images/productContent/u321.png" class="kuny-up">
				END
				<img src="/Public/images/productContent/u321.png" class="kuny-up">
			</div>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
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