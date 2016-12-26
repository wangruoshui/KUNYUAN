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



<script class="resources library" src="/Public/js/area.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/js/checkEmail.js"></script>
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
         var test=document.getElementById("spanphone");
        if(name==""){
        test.style.visibility="visible";
        test.innerText="电话不能为空";
        }else{
        	document.getElementById("spanphone").style.visibility="hidden";
            var i=phoneCheck(name);
            console.log(i);
            if(i==1){
                test.style.visibility="hidden";
            }else{
                console.log(name);
                console.log(i);
                test.style.visibility="visible";
                test.innerText="电话格式错误";
            }
        }
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
	function checkSubmit() {
		console.log('check()');
		var name=document.getElementById("username").value;
		var address=document.getElementById("address").value;
		var address1=document.getElementById("s_province").value;
		var address2=document.getElementById("s_city").value;
		var address3=document.getElementById("s_county").value;
		var phone=document.getElementById("phone").value;
		var check=document.getElementById("check").value;
		if(name!=''&&address!=''&&address1!=''&&address2!=''&&address3!=''&&phone!=''&&check!=''){
			var i=phoneCheck(phone);
			if(i==1){
					if(address1!='省份'){
						if(address2!='地级市'){
							if(address3!='市、县级市'){
								return true;
							}else{
								alert("请选择市、县级市");
								return false;
							}
						}else{
							alert("请选择地级市");
							return false;
						}
					}else{
						alert("请选择省份");
						return false;
					}
			}else{
				alert("电话格式错误");
				return false;
			}

		}else{
			alert("信息不能为空");
			return false;
		}

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
	console.log('before');
</script>
<style type="text/css">
    .span{
        visibility: hidden;
        color:red;
    }
    #spanphone{
    color:red;
}
#spanaddress{
    color:red;
}
</style>
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
					<li>

						<a href="/index.php/home/proTechnology/index">产品中心</a>
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
<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div></br>
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
<div class="xshidden row-md-1">&nbsp;</br></br></br></br></div>
</br>
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
			<form role="form" action="/index.php/home/send/addsend" method="post" enctype="multipart/form-data" onsubmit="return checkSubmit()">
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
						 姓&nbsp;&nbsp;&nbsp;&nbsp;名
					</div>
					
					<div class="col-md-10 col-xs-9" id="username1">
						<input type="text" class="width4" style="height:30px;" onblur='checkName()'  onfocus="checkNametwo()" name="username"  id="username"  placeholder="请输入姓名">
                        <span class="span" value="姓名不能为空" style="white-space:nowrap;" id="name">姓名不能为空</span>
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
                        <span class="span" value="详细地址不能为空" style="white-space:nowrap;" id="spanaddress">详细地址不能为空</span>
					</div>
				</div>
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text4">
					电&nbsp;&nbsp;&nbsp;&nbsp;话
					</div>
					<div class="col-md-10 col-xs-9">
						<input type="text" style="height:30px;" class="width4" name="phone" onblur='checkPhone()'  onfocus="checkPhonetwo()" id="phone"
							   placeholder="请输入手机号">
                        <div id="spanphone"></div>
					</div>
				</div>
				<div class="kuang">
					<div class="col-md-2 col-xs-3 text5">
						验证码
					</div>
			
						<div class="col-md-3 col-xs-3">
							<input type="text" class="width5" name="check" id="check" onblur='checkcheck()'  onfocus="checkchecktwo()"style="height:40px;"
								   placeholder="请输入验证码">
                            <span class="span" value="验证码不能为空" style="white-space:nowrap;" id="spancheck">验证码不能为空</span>
						</div>
						<div class="col-md-6 col-xs-6">
                            <img id="img_code" class="width6" onclick="javascript:this.src='/index.php/home/send/verifycode'" style="height:39px;margin-left:24px;" src="/index.php/home/send/verifycode">
						</div>
				
				</div>
				
				<div>
				
					<div class="col-md-10 col-xs-10 col-md-offset-4 col-xs-offset-4 ">
					</br>
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