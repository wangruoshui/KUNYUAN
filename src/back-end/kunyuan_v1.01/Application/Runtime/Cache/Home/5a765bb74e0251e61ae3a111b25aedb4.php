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



<link rel="stylesheet" type="text/css" href="/Public/css/send.css">
<script class="resources library" src="/Public/js/area.js" type="text/javascript"></script>
<script type="text/javascript">
    function checkName(){
       //alert("tian");
        var name2=document.getElementById("username").value;
        if(name2==''){
            //alert('333');
            document.getElementById("name").style.visibility="visible";
        }else{
            document.getElementById("name").style.visibility="hidden";
        }
    }
    function checkNametwo(){
       // $("div[id='username1']").span(null);
        //alert('22');
        document.getElementById("name").style.visibility="hidden";

    }
    function checkAddress(){
        var name=document.getElementById("address").value;
        if(name==""){
        document.getElementById("spanaddress").style.visibility="visible";
        }else{document.getElementById("spanaddress").style.visibility="hidden";}
    }
    function checkAddresstwo(){
        document.getElementById("spanaddress").style.visibility="hidden";
    }
    function checkPhone(){
        var name=document.getElementById("phone").value;
        if(name==""){
        document.getElementById("spanphone").style.visibility="visible";
        }else{document.getElementById("spanphone").style.visibility="hidden";}
    }
    function checkPhonetwo(){
        document.getElementById("spanphone").style.visibility="hidden";
    }
    function checkcheck(){
        var name=document.getElementById("check").value;
        if(name==""){
        document.getElementById("spancheck").style.visibility="visible";
        }else{document.getElementById("spancheck").style.visibility="hidden";}
    }
    function checkchecktwo(){
        document.getElementById("spancheck").style.visibility="hidden";
    }


	$(document).ready(function(){
        _init_area();
        console.log('succeed');
        var Gid  = document.getElementById;
        var showArea = function(){
            Gid('show').innerHTML = "<h3>省" + Gid('s_province').value + " - 市" +
                    Gid('s_city').value + " - 县/区" +
                    Gid('s_county').value + "</h3>"
        }
        Gid('s_county').setAttribute('onchange','showArea()');
	});
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

						样品寄送
					</li>

				</ul>
			</div>
		</div>
	</div>
</div>
<div class="container">
<div class="row-md-1">&nbsp;</br></br></br></br></br></div>
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
<div class="xshidden row-md-1">&nbsp;</br></br></div>
</br></br></br>
	<!-- 第一行 -->
	<div class=" col-md-12 col-xs-12">
		<div class="col-md-1 col-xs-1">
		</div>
		<div class="col-md-4 col-xs-12">
			<img class="yangtugao" src="/Public/upload/recruit.jpg" >
		</div>
		<div class="mdhidden row-xs-1"> &nbsp;</br></br></div>
		<div class="col-md-1 col-xs-1">
		</div>
		<div class="col-md-5 col-xs-12 black">
			<form role="form" action="/home/send/addsend" method="post" enctype="multipart/form-data">
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
						 姓&nbsp;&nbsp;&nbsp;&nbsp;名
					</div>
					
					<div class="col-md-10 col-xs-9" id="username1">
						<input type="text" class="width4" style="height:30px;" onblur='checkName()'  onfocus="checkNametwo()" name="username"  id="username"  placeholder="请输入姓名">
                        <span value="姓名不能为空" style="white-space:nowrap;" id="name">姓名不能为空</span>
                    </div>
				</div>

				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
						地&nbsp;&nbsp;&nbsp;&nbsp;址
					</div>
					<div class="col-md-10 col-xs-9" class="info">
						
                        <select class="bianda2" id="s_province" name="s_province"></select>  
                        <select class="bianda2" id="s_city" name="s_city" ></select>
                        <select class="bianda2" id="s_county" name="s_county"></select>

						<!-- json结束 -->
					</div>
					<div class="col-md-10 col-xs-10 col-md-offset-2 col-xs-offset-3">

						<input type="text" class="width3" style="height:30px;"  onblur='checkAddress()'  onfocus="checkAddresstwo()"name="town" id="address"
							   placeholder="请输入详细街道信息">
                        <span value="详细地址不能为空" style="white-space:nowrap;" id="spanaddress">详细地址不能为空</span>
					</div>
				</div>
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
					电&nbsp;&nbsp;&nbsp;&nbsp;话
					</div>
					<div class="col-md-10 col-xs-9">
						<input type="text" style="height:30px;" class="width4" name="phone" onblur='checkPhone()'  onfocus="checkPhonetwo()" id="phone"
							   placeholder="请输入手机号">
                        <span value="手机号不能为空" style="white-space:nowrap;" id="spanphone">手机号不能为空</span>
					</div>
				</div>
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
						验证码
					</div>
			
						<div class="col-md-3 col-xs-3">
							<input type="text" class="width5" name="check" id="check" onblur='checkcheck()'  onfocus="checkchecktwo()"style="height:40px;"
								   placeholder="请输入验证码">
                            <span value="验证码不能为空" style="white-space:nowrap;" id="spancheck">验证码不能为空</span>
						</div>
						<div class="col-md-6 col-xs-6">
                            <img id="img_code" class="width6" onclick="javascript:this.src='/home/send/verifycode'" style="height:39px;margin-left:24px;" src="/home/send/verifycode">
						</div>
				
				</div>
				
				<div>
				
					<div class="col-md-10 col-xs-10 col-md-offset-4 col-xs-offset-4 ">
					</br></br>
						<button type="submit" class="btn btn-default anniu">提交</button></br></br>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</div>
<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div>
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