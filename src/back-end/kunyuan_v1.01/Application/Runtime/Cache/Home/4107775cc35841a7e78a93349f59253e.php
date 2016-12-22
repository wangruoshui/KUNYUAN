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
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>

    <!--<script src="/Public/js/main.js"></script>-->
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

						公司简介
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class=" font-family container">

	<div class="text-center">
		<div class="big">
			<div>
				<img src="/Public/images/company/u321.png">
				公司简介
				<img src="/Public/images/company/u321.png">
			</div>
		</div>
		<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
	</div>
	<div class="row-md-1">&nbsp;</div>
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-3 col-xs-5">
				<img src="/Public/images/company/6b.png">
			</div>
			<div class="col-md-8 col-xs-7">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="t1" class="row-md-10">
					公司<a class="ba1">简介</a>
				</div>
			</div>
			<div class="row-md-9">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="col-md-3">&nbsp;</div>
				<div class="col-md-8">
					<p class="comtext"><span>
						<?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><!--<?php dump(data)?>-->
                        &nbsp;&nbsp;&nbsp;<?php echo ($data["content"]); ?>
                        <br/><?php endforeach; endif; else: echo "" ;endif; ?>

					</span></p>
				</div>
			</div>
		</div>
		<div class="row-md-1">&nbsp;</br></div>
		<div class="col-md-6 col-xs-12">
			<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div>
			<div class="col-md-1 col-xs-0">&nbsp;</div>
			<div class="img-thumbnail1 col-md-9 col-xs-12" style="padding:0px;margin:0px;">
				<img class="carousel-inner img-responsive xintu" src="/Public/upload/<?php echo ($data["image"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="col-md-1 col-xs-0">&nbsp;</div>
		</div>
	</div>

	<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div>
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-3  col-xs-5">
				<img src="/Public/images/company/6b.png">
			</div>
			<div class="col-md-8  col-xs-7">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="t1" class="row-md-10">
					我们的<a class="ba1">优势</a>
				</div>
			</div>
		</div>
	</div>


	<div>
		<div class="xshidden row-md-1">&nbsp;</br></br></div>
		<div>
			<div class="col-md-1">&nbsp;</div>

			<div class="col-md-11 col-xs-12">
				<div class="col-md-1 col-xs-0">&nbsp;</div>
				<div class=" col-md-4 col-xs-7">
					<div class="bei3">
						<div>
							<div class="row-md-1"></br></div>
							<div class="col-md-3 col-xs-1">&nbsp;</div>
							<div class="row-md-4 col-md-7 col-xs-8 center3">
								<h1 class="title3">NO.1</h1>
								<p class="title333">
									<?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,1,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["content"]); ?>

								</p>
							</div>
						</div>
						<div class="col-md-1 col-xs-1">&nbsp;</div>
						<div class="col-md-10 col-xs-12">
							<div class="xshidden row-md-1">&nbsp;</div>
							<div class="col-md-3 col-xs-0">&nbsp;</div>
							<div class="col-md-9 col-xs-12">
								<img class="img-responsive" src="/Public/upload/<?php echo ($data["image"]); ?>">
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>

					<div class="row-md-1"></br></br></br></div>
					<div class="bei3">
						<div>
							<div class="row-md-1"></br></div>
							<div class="col-md-3 col-xs-1">&nbsp;</div>
							<div class="row-md-4 col-md-7 col-xs-8 center3">
								<h1 class="title3">NO.2</h1>
								<p class="title333">
                                    <?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,2,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["content"]); ?>

								</p>
							</div>
						</div>
						<div class="col-md-1 col-xs-1">&nbsp;</div>
						<div class="col-md-10 col-xs-12">
							<div class="xshidden row-md-1">&nbsp;</div>
							<div class="col-md-3 col-xs-0">&nbsp;</div>
							<div class="col-md-9 col-xs-12">
								<img class="img-responsive" src="/Public/upload/<?php echo ($data["image"]); ?>">
							</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
						</div>
					</div>
				</div>

				<div class="xshidden row-md-1 row-xs-0">&nbsp;</br></br></br></br></br></br></br></br></br></br></br></div>

				<div class="xshidden col-md-6 col-xs-12 col-xs-pull-1 col-md-pull-0">
					<div class="mdhidden row-md-0 row-xs-1">&nbsp;</br></br></br></div>
					<div class="xshidden col-md-1 col-xs-0">&nbsp;</div>
					<div class="col-md-11 col-xs-7">
						<div class="bei2">
							<div>
								<div class="row-md-1"></br></div>
								<div class="col-md-3 col-xs-1">&nbsp;</div>
								<div class="row-md-4 col-md-7 col-xs-8 col-xs-push-1 col-md-push-0 center3">
									<h1 class="title3">NO.3</h1>
									<p class="title333">
                                        <?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,3,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["content"]); ?>

									</p>
								</div>
							</div>
							<div class="col-md-1 col-xs-1">&nbsp;</div>
							<div class="col-md-10 col-xs-11">
								<div class="xshidden row-md-1">&nbsp;</div>
								<div class="col-md-3 col-xs-0">&nbsp;</div>
								<div class="col-md-9 col-xs-12 col-xs-push-1 col-md-push-0">
									<img class="img-responsive" src="/Public/upload/<?php echo ($data["image"]); ?>">
								</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
							</div>
						</div>
					</div>
					<div class="col-md-0 col-xs-5">&nbsp;</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-md-1">&nbsp;</br></br></div>
	<div class="xshidden row-md-1">&nbsp;</br></br></div>
	<div class="row-md-1">&nbsp;</div>
	<div class="row">
		<div class="col-md-6">
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-3 col-xs-5">
				<img src="/Public/images/company/6b.png">
			</div>
			<div class="col-md-8 col-xs-7">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="t1" class="row-md-10">
					公司<a class="ba1">现状</a>
				</div>
			</div>
			<div class="row-md-9">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="col-md-3">&nbsp;</div>
				<div class="col-md-8">
					<p class="comtext"><span>&nbsp;&nbsp;&nbsp;<?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,4,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["content"]); ?>
                                        &nbsp;&nbsp;</span></p>
				</div>
			</div>
		</div>
		<div class="xshidden row-md-1">&nbsp;</br></br></br></br></br></br></div>
		<div class="col-md-6 row-md-8">
			<div class="col-md-1 col-xs-0">&nbsp;</div>
			<div class="img-thumbnail1 col-md-9 col-xs-12" style="padding:0px;margin: 0px">
				<img class="carousel-inner img-responsive " src="/Public/upload/<?php echo ($data["image"]); ?>">
			</div><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="row-md-1 row-xs-1">&nbsp;</br></br></br></div>
		<div class="col-md-6">
			<div class="col-md-1 col-xs-0"></div>
			<div class="col-md-3  col-xs-5">
				<img src="/Public/images/company/6b.png">
			</div>
			<div class="col-md-8  col-xs-7">
				<div class="row-md-1">&nbsp;</br></br></div>
				<div class="t1" class="row-md-10">					公司<a class="ba1">地址</a>
				</div>
			</div>
		</div>
	</div>
    <style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=Cu1ViXWorAePcfc6OHInokKI2OCH0ohc&v=1.1&services=true"></script>
	<div class="row">
		<div class="row-md-1">&nbsp;</br></br></div>
		<div class="col-md-3 col-xs-1">&nbsp;</div>
		<div class="col-md-6 col-xs-10 img-thumbnail1" style="margin: 0px;padding: 0px">

            <div style="width:559px;height:308px;border:#ccc solid 1px;" id="dituContent"></div>
				<script type="text/javascript">
					//创建和初始化地图函数：
					function initMap(){
						createMap();//创建地图
						setMapEvent();//设置地图事件
						addMapControl();//向地图添加控件
						addMarker();//向地图中添加marker
					}

					//创建地图函数：
					function createMap(){
						var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
						var point = new BMap.Point(116.734307,39.206474);//定义一个中心点坐标
						map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
						window.map = map;//将map变量存储在全局
					}

					//地图事件设置函数：
					function setMapEvent(){
						map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
						map.enableScrollWheelZoom();//启用地图滚轮放大缩小
						map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
						map.enableKeyboard();//启用键盘上下左右键移动地图
					}

					//地图控件添加函数：
					function addMapControl(){
						//向地图中添加缩放控件
						var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
						map.addControl(ctrl_nav);
						//向地图中添加缩略图控件
						var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
						map.addControl(ctrl_ove);
						//向地图中添加比例尺控件
						var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
						map.addControl(ctrl_sca);
					}

					//标注点数组
					var markerArr = [{title:"坤源生物质颗粒有限公司",content:"手机：18134061015&nbsp;<br/>&nbsp;地址：廊坊市永清县里澜城工业园区",point:"116.734172|39.2066",isOpen:1,icon:{w:23,h:25,l:92,t:21,x:9,lb:12}}
					];
					//创建marker
					function addMarker(){
						for(var i=0;i<markerArr.length;i++){
							var json = markerArr[i];
							var p0 = json.point.split("|")[0];
							var p1 = json.point.split("|")[1];
							var point = new BMap.Point(p0,p1);
							var iconImg = createIcon(json.icon);
							var marker = new BMap.Marker(point,{icon:iconImg});
							var iw = createInfoWindow(i);
							var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
							marker.setLabel(label);
							map.addOverlay(marker);
							label.setStyle({
								borderColor:"#808080",
								color:"#333",
								cursor:"pointer"
							});

							(function(){
								var index = i;
								var _iw = createInfoWindow(i);
								var _marker = marker;
								_marker.addEventListener("click",function(){
									this.openInfoWindow(_iw);
								});
								_iw.addEventListener("open",function(){
									_marker.getLabel().hide();
								})
								_iw.addEventListener("close",function(){
									_marker.getLabel().show();
								})
								label.addEventListener("click",function(){
									_marker.openInfoWindow(_iw);
								})
								if(!!json.isOpen){
									label.hide();
									_marker.openInfoWindow(_iw);
								}
							})()
						}
					}
					//创建InfoWindow
					function createInfoWindow(i){
						var json = markerArr[i];
						var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
						return iw;
					}
					//创建一个Icon
					function createIcon(json){
						var icon = new BMap.Icon("http://map.baidu.com/image/us_cursor.gif", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
						return icon;
					}

					initMap();//创建和初始化地图
				</script>
		</div>

	</div>

	<div class="xshidden row-md-1">&nbsp;</br></br></div>
	<div>
		<div class="col-md-3">&nbsp;</div>
		<div class="col-md-9">
			<p class="cu2"><?php if(is_array($results)): $i = 0; $__LIST__ = array_slice($results,5,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$datas): $mod = ($i % 2 );++$i; if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i; echo ($data["content"]); endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
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
                            手机号：18134061015
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