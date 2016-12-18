<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/Public/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">
    <script type="text/javascript" src="/Public/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-md-12">

    <div class="row">
        <div>
            <nav class="navbar navbar-default-me navbar-fixed-top    " role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">坤源</a>
                        <p class="navbar-text">——科技改变生活</p>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav    ">
                        <li class="">
                            <a href="/home/index/index">首页</a>
                        </li>
                        <li>
                            <a href="/home/company/index">公司简介</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">产品中心<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/ProTechnology/index" style="color:#fff">产品技术</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index" style="color:#fff">产品展示</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index"style="color:#fff">销售范围</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index"style="color:#fff">样品寄送</a>
                                </li>



                            </ul>

                        </li>
                        <li>
                            <a href="/home/news/index">新闻中心</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">环境与社会   <strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/ES/index" style="color:#fff">社会需求</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index"style="color:#fff">政策支持</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index"style="color:#fff">燃料地域限制</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">职业中心<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/career/index"style="color:#fff">人才理念</a>
                                </li>
                                <li>
                                    <a href="/home/career/index"style="color:#fff">岗位招聘</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">联系我们<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/contactus/index" style="color:#fff">联系方式</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index"style="color:#fff">加入我们</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index"style="color:#fff">客户留言</a>
                                </li>

                            </ul>

                        </li>

                    </ul>



                    <form action="#" class="navbar-form navbar-right   ">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="请输入关键词" />
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>

                </div>

            </nav>
        </div>
    </div>

    <div class="container col-md-12">
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


            </div>
        </div>
    </div>
</div>

<head>
	<title>新版快递页</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="/Public/css/recruit.css"  type="text/css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="/Public/js/CityJson.js" type="text/javascript"></script>
	<script src="/Public/js/ProJson.js" type="text/javascript"></script>
	<script src="/Public/js/DistrictJson.js" type="text/javascript"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			//测试jquery文件是否引入成功
			console.log('succeed');
			//根据省id获取市
			$("select[name='provice']").change(function(){
				//发送请求
				$.post('../send/province',
						{'parentid':$(this).val()}, function(data){
							//替换市区数据
							$("select[name='city']").html(null);
							var citys=JSON.parse(data);
							for(var i in citys){
								var str = '<option value='+citys[i]['linkageid']+'>'+citys[i]['name']+'</option>'
								var option = $(str);

								$("select[name='city']").append(option);
							}
						});
			});


			//根据省id获取市获取区县
			$("select[name='city']").change(function(){
				//发送请求
				var self=$(this);
//			console.log(self);
				$.post('../send/province',
						{'parentid':self.val()}, function(data){
							//替换市区数据
							var areas=JSON.parse(data);

							for(var i in areas){
								var str = '<option value='+areas[i]['id']+'>'+areas[i]['name']+'</option>'
								var option = $(str);
								$("select[name='district']").append(option);
							}
						});
			});

		});
	</script>


</head>
	<div class="container">
		<div class="text-center">
			<div class="big">
				<div>
				<img src="/Public/images/send/u321.png">
				样品寄送
				<img src="/Public/images/send/u321.png">
				</div>			
			</div>		
			<div style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</div>
		</div>


		<!-- 第一行 -->
		<div class="row ">
			<div class="col-md-10 col-xs-12 col-md-offset-1 col-xs-offset-0 black">
				<form class="form-horizontal" role="form" action="../send/addsend" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="name" class="col-md-2 col-xs-4 control-label font1">姓名</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="username" id="name" style="width:50%;"
							placeholder="请输入姓名">
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-md-2 col-xs-4 control-label font1">姓名</label>
						<div class="col-md-6">
							<p>请输入性别:</p>
							</div>
						<div class="col-md-4 col-md-pull-5">
							<input type="radio" value="男" name="sex">男
							<input type="radio" vaule="女" name="sex">女
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-2 col-xs-4 control-label font1">地址</label>
						<div class="col-md-10 col-xs-6 font2" >
							<!-- json开始 -->
							<select  name="provice" id="selProvince">
								<option value="0">--请选择省份--</option>
								<?php if(is_array($result)): $i = 0; $__LIST__ = array_slice($result,1,34,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><option value="<?php echo ($data["linkageid"]); ?>">--<?php echo ($data["name"]); ?>--</option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<select  name="city" id="selCity">
								<option value="0">--市--</option>
							</select>
							<select  name="district" id="selDistrict">
								<option value="0">--区/县--</option>
							</select>
							<!-- json结束 -->
						</div>
						<div class="col-md-10 col-xs-10 col-xs-push-4 col-md-push-0">

							<input type="text" class="form-control" id="address" style="width:50%;" 
							placeholder="请输入详细街道信息"  name="town">
							<p class="font3">(若无您所在省份请手动全部地址信息)</p>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-md-2 col-xs-4 control-label font1">姓名</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="email" id="email" style="width:50%;"
								   placeholder="请输入邮箱">
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-md-2 col-xs-4 control-label font1">电话</label>
						<div class="col-md-10">
							<input type="text" class="form-control" name="phone" id="phone" style="width:50%;"
							placeholder="请输入手机号">
						</div>
					</div>
					<div class="form-group">
						<label for="yanzhen" class="col-md-2 col-xs-5 col-xs-offset-0 control-label font1">
							验证码
						</label>
						<div class="col-md-10 col-md-12">
						    <div class="col-md-4 col-xs-5 col-xs-pull-1 col-md-pull-0">
							<input type="text" class="form-control" id="phone" style="width:50%;" 
							placeholder="请输入验证码">
							</div>
							<div class="col-md-4 col-xs-2 col-xs-pull-3 col-md-pull-1">
							<img id="img_code" src="/Public/images/send/checkcode.php">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-xs-10 col-md-offset-4 col-xs-offset-4 ">
							<button type="submit" class="btn btn-default">提交</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row-md-1">&nbsp;</br></br></div>


<div class="container col-md-12">
    <div class="row clearfix footer-color">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-10 column">
            <div class="row clearfix">

                <div class="col-md-3 column">
                    <h3 >
                        公司宗旨
                    </h3>
                    <br/>
                    <div>
                        <p>

                            生物质颗粒燃料是大自然恩赐于我们的可再生的能源，它是响应中央号召，创造节约性社会。地球是我家，环保靠大家面对渐渐恶化的环境，面对渐渐加重的雾霾，让我们行动起来吧！！！


                        </p>
                    </div>
                </div>
                <div class="col-md-1 text-cennter crave">
                    <img style="padding-top:55px;margin-left:40px" class="img-responsive " src="/Public/images/index/u165.png" alt="" height="100px">

                </div>
                <div class="col-md-3 column">
                    <h3 >
                        相关链接
                    </h3>
                    <br/>
                    <div class="text-center">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-1 crave">
                    <img style="padding-top:55px;margin-left:30px"class="img-responsive img-rounded" src="/Public/images/index/u165.png" alt="" >
                </div>
                <div class="col-md-3 column ">
                    <h3 >
                        联系我们
                    </h3>

                    <br/>
                    <div class="col-md-4 col-xs-4">
                        <img style="margin-left:10px"class="img-responsive "src="/Public/images/index/rotateimage_u122.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:10px" class="img-responsive "src="/Public/images/index/u126_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:4px;margin-left:10px" class="img-responsive "src="/Public/images/index/u128_mouseOver.png" alt="">
                    </div >

                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:15px;"class="img-responsive "src="/Public/images/index/u134_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:10px" class="img-responsive "src="/Public/images/index/u130_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <a href="#" class="bind_hover_card" data-toggle="popover" data-placement="bottom" data-trigger="hover">
                            <img style="padding-top:14px;margin-left:6px" class="img-responsive "src="/Public/images/index/u132_mouseOver.png" alt="">
                        </a>
                    </div>



                </div>
            </div>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>
</div>
</body>

</html>