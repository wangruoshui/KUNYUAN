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
                        <li >
                            <a href="/index.php/home/index/index">首页</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Company/index">公司简介</a>
                        </li>
                        <li>
                            <a href="/index.php/home/ProTechnology/index">产品中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/News/index">新闻中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/ES/index">环境与社会</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Career/index">职业中心</a>
                        </li>
                        <li>
                            <a href="/index.php/home/Contactus/index">联系我们</a>
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
           <?php if(is_array($weixin2wm)): $i = 0; $__LIST__ = $weixin2wm;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$weixin): $mod = ($i % 2 );++$i;?><div class="sidebox2"><img src="/Public/upload/<?php echo ($weixin["config_content"]); ?>"></div><?php endforeach; endif; else: echo "" ;endif; ?>
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
        // $("div[id='username1']").span(null);
        //alert('22');
        document.getElementById("name").style.visibility="hidden";

    }
    function checkAddress(){
        var name=document.getElementById("address").value;
        var test=document.getElementById("spanaddress");
        if(name==""){
            test.style.visibility="visible";
            test.innerText="邮箱不能为空";
        }else{
            document.getElementById("spanaddress").style.visibility="hidden";
           console.log(name);
           console.log(emailCheck(name));
           console.log("emailcheck");
            var i=emailCheck(name);
            if(i==1){
                test.style.visibility="hidden";
            }else{
                test.style.visibility="visible";
               test.innerText="邮箱格式错误";
            }
        }
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
    function checkContent(){
        var name=document.getElementById("content").value;
        if(name==""){
            document.getElementById("spancontent").style.visibility="visible";
        }else{document.getElementById("spancontent").style.visibility="hidden";}
    }
    function checkContenttwo(){
        document.getElementById("spancontent").style.visibility="hidden";
    }
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

                    <li class="active">

                        联系我们
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 col-xs-12 container">
    <!--第一部分开始-->
    <div class="row xshidden">&nbsp;</div>
    <div class="row xshidden">
        <div class="col-md-7 col-md-offset-3 col-xs-10 col-xs-offset-1">
            <div class="content-nav">
                <div class="col-md-4 text-center col-xs-4">
                    <div class="content-nav-icon">
                        <a href="#box1"><img src="/Public/images/contactus/u289.png" name="u3" class="img-change" /></a>
                        <h3 class="nav-font">联系方式</h3>
                        <p>get more......</p>
                    </div>
                    <img src="/Public/images/contactus/shuxian.png" class="xshidden content-nav-line">
                </div>
            </div>
            <div class="content-nav">
                <div class="col-md-4 text-center col-xs-4">
                    <div class="content-nav-icon">
                        <a href="#box2"><img src="/Public/images/contactus/u291.png" name="u7" class="img-change"></a>
                        <h3 class="nav-font">加入我们</h3>
                        <p>get more......</p>
                    </div>
                    <img src="/Public/images/contactus/shuxian.png" class="xshidden content-nav-line">
                </div>
            </div>
            <div class="content-nav">
                <div class="col-md-3 text-center col-xs-4">
                    <div class="content-nav-icon">
                        <a href="#box3"><img src="/Public/images/contactus/u293.png" name="u9" class="img-change"></a>
                        <h3 class="nav-font">客户留言</h3>
                        <p>get more......</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--第一部分结束-->
    <!--第二部分开始-->
    
    <div class="xshidden row-md-1">&nbsp;</br></br></br><div id="box1"></div></br></div>
    </br>
    <div class="col-md-12 text-center">
        <div class="big">
            <div>
                <img src="/Public/images/protechnology/u321.png">
                联系方式
                <img src="/Public/images/protechnology/u321.png">
            </div>
        </div>
        <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
    </div>
    <!--第二部分结束-->
    <!--第三部分开始-->
    <div class="col-md-12 col-xs-12 contact_third">

        <div class="col-md-4 col-md-push-2 col-xs-12 col-contact_third_img"><?php if(is_array($tele)): $i = 0; $__LIST__ = $tele;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$te): $mod = ($i % 2 );++$i;?><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($te["image"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="mdhidden row-md-1">&nbsp;</div>
        <div class="col-md-4 col-md-push-3">
        
            <p class="contact_third_first">公司地址
            </p>
            <p class="contact-third-second">
                ——<?php if(is_array($addr)): $i = 0; $__LIST__ = $addr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i; echo ($a["config_content"]); endforeach; endif; else: echo "" ;endif; ?>
            </p>
 
       
            <p class="contact_third_first">办公处
            </p>
            <p class="contact-third-second">
                ——<?php if(is_array($off)): $i = 0; $__LIST__ = $off;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i; echo ($o["config_content"]); endforeach; endif; else: echo "" ;endif; ?>
            </p>
        
            <p class="contact_third_first">
                联系电话</p>
            
            <p class="contact-third-second">
                ——<?php if(is_array($numb)): $i = 0; $__LIST__ = $numb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$n): $mod = ($i % 2 );++$i; echo ($n["config_content"]); endforeach; endif; else: echo "" ;endif; ?>
            </p>
         
        </div>
    </div>
    <!--第三部分结束-->
    <!--第四部分开始-->
    
    <div class="xshidden row-md-1">&nbsp;</br><div id="box2"></div></br></br></div>
    <div class="row-md-1">&nbsp;</br></br></br></div>
    
    <div class="col-md-12 text-center">
        <div class="big">
            <div>
                <img src="/Public/images/protechnology/u321.png">
                加入我们
                <img src="/Public/images/protechnology/u321.png">
            </div>
        </div>
        <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
    </div>
    <!--第四部分结束-->
    <!--第五部分开始-->
    <div class="col-md-12  contact_third">
        <div class="col-md-4 col-md-push-2 col-xs-push-1 col-xs-10 contact_third_img">
        <?php if(is_array($phone)): $i = 0; $__LIST__ = array_slice($phone,0,1,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ph): $mod = ($i % 2 );++$i;?><img class="carousel-inner img-responsive img-rounded" src="/Public/upload/<?php echo ($ph["image"]); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="col-xs-12 col-md-4 col-md-push-3 col-xs-push-0 contact_fifth_text">
        <?php if(is_array($phone)): $i = 0; $__LIST__ = $phone;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ph): $mod = ($i % 2 );++$i;?><div class="contact_third_first"><?php echo ($ph["resource"]); ?></div>
            <div class="contact-third-second">
                <div><?php echo ($ph["title"]); ?></div>
                <div>联系方式：<?php echo ($ph["content"]); ?></div>
                <div>负责：商品销售、战略合作、价格洽谈</div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <!--第五部分结束-->
    <!--第六部分开始-->
    
    <div class="xshidden row-md-1">&nbsp;</br><div id="box3"></div></br></br></div>
    <div class=" contact_seventh col-md-12 text-center">
        <div class="big">
            <div>
                <img src="/Public/images/protechnology/u321.png">
                客户留言
                <img src="/Public/images/protechnology/u321.png">
            </div>
        </div>
        <div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
    </div>
    <!--第六部分结束-->
    <!--第七部分开始-->
    <div class="col-md-12  contact_seventh">
        <div class="col-md-8 col-md-push-2 col-xs-12 col-xs-push-0 contact_seventh_form">
            <form role="form" action="/index.php/home/contactus/addmessage" method="post">
                <div class="row contact_seventh_first">
                    <div class="col-md-10 col-md-push-1  contact_seventh_first_input">
                        <input type="text" placeholder="请输入联系人姓名：" class="form-control" onblur='checkName()'  onfocus="checkNametwo()"
                               id="username" name="name">
                        <span class="span" value="姓名不能为空" style="white-space:nowrap;" id="name">姓名不能为空</span>
                    </div>


                </div>
                <div class="row contact_seventh_second">
                    <div class="col-md-10 col-md-push-1 contact_seventh_first_input">
                        <input type="text" placeholder="请输入联系电话：" onblur='checkPhone()'  onfocus="checkPhonetwo()"
                               class="form-control" id="phone" name="phone">
                        <div id="spanphone"></div>
                    </div>
                </div>
                <div class="row contact_seventh_second">
                    <div class="contact_seventh_second col-md-10 col-md-push-1 contact_seventh_first_input">
                        <div class="form-group contact_seventh_second_third">
                            <!--<label for="name">选择列表</label>-->
                            <select class="form-control" name="title">
                                <option>我的需求</option>
                                <option>产品问题</option>
                                <option>价格问题</option>
                                <option>其他问题</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-push-1 col-xs-12  contact_seventh_third_input">
                        <input class="form-control" id="address"  name="email"
                               onblur='checkAddress()'  onfocus="checkAddresstwo()"
                                placeholder="请输入您的邮箱地址">
                        <div id="spanaddress"></div>
                    </div>
                </div>
                <div class="row">&nbsp</div>
                <div class="row">
                    <div class="form-group col-md-10 col-md-push-1 col-xs-12 contact_seventh_fourth">
                        <textarea rows="5" cols="50" id="content" name="content" class="form-control"
                                  onblur='checkContent()'  onfocus="checkContenttwo()"
                                  placeholder="详情描述"></textarea>
                        <span class="span" value="详情不能为空" style="white-space:nowrap;" id="spancontent">详情不能为空</span>
                    </div>
                </div>
                <div class="row contact_seventh_last">
                    <div class="form-group col-md-2 col-xs-2 col-md-push-5 col-xs-push-4  ">
                        <button type="submit" class="anniu btn" value="">提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--第七部分结束-->
</div>
<div class="row-md-1">&nbsp;</br></br></br></br></div>
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