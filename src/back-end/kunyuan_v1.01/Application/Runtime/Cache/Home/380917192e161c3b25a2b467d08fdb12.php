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

						环境与社会
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container col-md-12">
	<div class="container">
		<!-- 第一行 -->
		<div class="row xshidden">
			<div class="col-md-7 col-md-offset-3 col-xs-10 col-xs-offset-2">
				<div class="content-nav">
					<div class="col-md-4 text-center col-xs-3">
						<div class="content-nav-icon">
							<a href="#box1"><img src="/Public/images/newenvironment/u289.png" name="u3" class="img-change" /></a>
							<h3 class="nav-font">社会需求</h3>
							<p>get more......</p>
						</div>
						<img src="/Public/images/newenvironment/shuxian.png" class="content-nav-line">
					</div>
				</div>
				<div class="content-nav">
					<div class="col-md-4 text-center col-xs-3">
						<div class="content-nav-icon">
							<a href="#box2"><img src="/Public/images/newenvironment/u291.png" name="u7" class="img-change"></a>
							<h3 class="nav-font">政策支持</h3>
							<p>get more......</p>
						</div>
						<img src="/Public/images/newenvironment/shuxian.png" class="content-nav-line">
					</div>
				</div>
				<div class="content-nav">
					<div class="col-md-3 text-center col-xs-3">
						<div class="content-nav-icon">
							<a href="#box3"><img src="/Public/images/newenvironment/u293.png" name="u9" class="img-change"></a>
							<h3 class="nav-font">地域限制</h3>
							<p>get more......</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- 第二行 -->
		<div id="box1"></div>
		<div class="row rowheight">
			<div class="text-center">
				
				<div class="font7">
					<img src="/Public/images/newenvironment/hengxian.png">
					社会需求
					<img src="/Public/images/newenvironment/hengxian.png">
				</div>
				<p style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</p>
			</div>
		</div>
		<!-- 第三行 -->
		<div class="row rowheight2">
			<div class="col-md-6 col-xs-12">
				<div class="col-md-3 col-xs-5">
					<img src="/Public/images/newenvironment/littlelogo.png">
				</div>
				<div class="col-md-9 col-xs-7">
					<div class="row-md-1 row-xs-1">&nbsp;</br></br></div>
					<div class="t1" class="row-md-10 row-xs-10">我国的
						<a class="ba1">环境问题</a>
					</div>
				</div>
			</div>
		</div>
		<!-- 第四行 -->
		<div class="row ">
			<div class="col-md-9 col-xs-10 col-md-offset-2 col-xs-offset-1 center41">
				<?php if(is_array($environment)): $i = 0; $__LIST__ = $environment;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-5 col-xs-12 col-xs-offset-0 col-md-offset-1 col-md-pull-1 col-xs-pull-0">
					<div class="row-xs-1">&nbsp;</div>
					<div>
						<img src="/Public/upload/<?php echo ($vo["image"]); ?>" class="img-responsive" />
					</div>
					<div class="row-xs-1">&nbsp;</div>
				</div>
				<div class="col-md-6 col-xs-12 col-md-offset-0 col-xs-pull-0 col-md-pull-0">
					<div class="col-md-11 col-xs-12">

						<div class="row-md-1 row-xs-1">&nbsp;</br></br></div>
						<p class="comtext">
							&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["content"]); ?>
							<a class="more1" href="#">详情>></a>
						</p>

						<div class="row-md-1 row-xs-1">&nbsp;</div>

					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!-- 第五行 -->

		<div class="row-md-1">&nbsp;</br></br></div>
		<div class="row">

			<div class="col-md-6">
				<div class="col-md-3  col-xs-5">
					<img src="/Public/images/company/6b.png">
				</div>
				<div class="col-md-9  col-xs-7">
					<div class="row-md-1">&nbsp;</br></br></div>
					<div class="t1" class="row-md-10">					生物质颗粒的<a class="ba1">优势</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row-md-6">&nbsp;</br></br></br></div>
		
		<div class="row clearfix">
			<div class="col-md-2 col-xs-1">
			</div>
			<div class="col-md-5 col-xs-7">
				<div class="row center31">
					<div class="col-md-1"></div>
					<div class="col-md-8 col-xs-12 left4">
						<h2>
							NO.1
						</h2>
						<p class="size4444">
							<?php if(is_array($advantage)): $i = 0; $__LIST__ = array_slice($advantage,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
						</p>
						<p>
						</p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			
				<div class="row-md-6">&nbsp;</br></br></br></br></div>
				<div class="row center31">
					<div class="col-md-1"></div>
					<div class="col-md-8 col-xs-12 left4">
						<h2>
							NO.2
						</h2>
						<p class="size4444">
							<?php if(is_array($advantage)): $i = 0; $__LIST__ = array_slice($advantage,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
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
					<div class="col-md-8 col-xs-12 left4">
						<h2>
							NO.3
						</h2>
						<p class="size4444">
							
							<?php if(is_array($advantage)): $i = 0; $__LIST__ = array_slice($advantage,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
							
						</p>
						<p>
						</p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
				<div class="row-md-6">&nbsp;</br></br></br></br></div>
				<div class="row center31">
					<div class="col-md-1"></div>
					<div class="col-md-8 col-xs-12 left4">
						<h2>
							NO.4
						</h2>
						<p class="size4444">
						<?php if(is_array($advantage)): $i = 0; $__LIST__ = array_slice($advantage,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$advan): $mod = ($i % 2 );++$i; echo ($advan["content"]); ?>
						</p>
						<p>
						</p><img alt="140x140" src="/Public/upload/<?php echo ($advan["image"]); ?>" />
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
		
		<!-- 第七行 -->
		<div class="row rowheight3" >
		<div class="row-xs-5">&nbsp;</br></br></br></div>
			<div  class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1 center3-3 text1">
				<div class="row-md-1">&nbsp;</div>
				<div class="col-md-12 col-xs-12">
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;生物质颗粒作为一种新型的颗粒燃料以其特有的优势赢得了广泛的认可；与传统的燃料相比，不仅具有经济优势也具有环保效益.
					</p>
					<p>
						&nbsp;&nbsp;&nbsp;&nbsp;生物质颗粒燃烧时有害气体成分含量极低，排放的有害气体少，具有环保效益。
					</p>
				</div>
				<div class="row-md-1">&nbsp;</div>
			</div>
		</div>
		<!-- 第八行 -->
		<div class="row-md-1">&nbsp;</br></br></br><div id="box2"></div></br></div>
		<div class="row rowheight">
			<div class="text-center">
				
				<div class="font7">
					<img src="/Public/images/newenvironment/hengxian.png">
					政策支持
					<img src="/Public/images/newenvironment/hengxian.png">
				</div>
				<p style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</p>
			</div>
		</div>
		<!-- 第九行 -->
		<div class="row rowheight">
		
			<div class="col-md-6  col-xs-12">
				<div class="col-md-1">&nbsp;</div>
				<div class="col-md-9 col-xs-12 col-md-offset-1 col-xs-offset-0 picture"><?php if(is_array($policy)): $i = 0; $__LIST__ = array_slice($policy,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($vi["image"]); ?>"/>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="col-md-5 col-xs-12 col-md-offset-1 col-xs-offset-0">
				<div class="col-md-10 col-xs-12">
					<div class="row-xs-1">&nbsp;</div>
					<?php if(is_array($policy)): $i = 0; $__LIST__ = $policy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vi): $mod = ($i % 2 );++$i;?><p><img src="/Public/images/newenvironment/u1404.png" />&nbsp;
					<a href="<?php echo ($vi["content"]); ?>" class="wtext">
						<?php echo ($vi["title"]); ?>
					</a>
					</p><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		
		</div>
		<div class="row-md-1">&nbsp;</br></br></br></div>
		<!-- 第十行 -->
		<div class="row rowheight">
			<div class="text-center">\
				<div id="box3"></div>
				<div class="font7">
					<img src="/Public/images/newenvironment/hengxian.png">
					燃料地域限制
					<img src="/Public/images/newenvironment/hengxian.png">
				</div>
				<p style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</p>
			</div>
		</div>
		<!-- 第十一行 -->
		<div class="row rowheight">
		<?php if(is_array($limit)): $i = 0; $__LIST__ = $limit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ky): $mod = ($i % 2 );++$i;?><div class="col-md-6">
				<div class="col-md-1">&nbsp;</div>
				<div class="col-md-9 col-xs-12 col-md-offset-1 col-xs-offset-0 picture">
					<img src="/Public/upload/<?php echo ($ky["image"]); ?>" style="width:100%"/>
				</div>

			</div>

			<div class="col-md-5 col-xs-12 col-xs-offset-0 col-md-offset-1">

				<div class="col-md-10 col-xs-12">
					<div class="row-md-1">&nbsp;</div>
					<p class="etext">
						<?php echo ($ky["content"]); ?>
						<a class="more1" href="#">详情>></a>
					</p>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="row-md-6">&nbsp;</br></br></br></br></div>
	</div>
	</div>

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