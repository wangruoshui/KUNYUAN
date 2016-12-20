<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flatpoint - Responsive Web App Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/admin/css/allp.css" rel="stylesheet">
    <link href="/Public/admin/css/bootstrap.css" rel="stylesheet">
    <link href="/Public/admin/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/Public/admin/css/stylesheet.css" rel="stylesheet">
    <link href="/Public/admin/css/index.css" rel="stylesheet">
    <link href="/Public/admin/icon/font-awesome.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/Public/admin/img/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/Public/admin/img/apple-touch-icon-114-precomposed.html">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/Public/admin/img/apple-touch-icon-72-precomposed.html">
                    <link rel="apple-touch-icon-precomposed" href="/Public/admin/img/apple-touch-icon-57-precomposed.html">
                                

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    

    <script>
    function getclassname(obj){
		if(document.getElementsByClassName('link_onclick').length==0){
			obj.className='link_onclick';
			obj.id='link_onclick';
			}else{
				var obj1=document.getElementById('link_onclick');
				obj1.className='111';
				obj1.id='1';
				obj.className='link_onclick';
			   obj.id='link_onclick';
				
			
			}

		
		}
    </script>
  </head>

  <body>

    <header class="dark_grey">
     <!-- Header start -->
       <div class="top" style="border-top-color: #FFF; margin-top:-0.5%;">
    <div class="logo" style="margin-top:0.5%;">
    <img src="/Public/admin/image/kunyuan01.jpg" />
    </div>
     <div class="login">
     <a href="<?php echo U('admin/index/login');?>" style="height: 50px;"><img src="/Public/admin/image/login.png"  /></a>
    </div>
    <div class="username">
       Hi 超级管理员
    </div>
    <div class="user">
    <a href="<?php echo U('admin/user/show');?>" target="right"><img src="/Public/admin/image/user.png" /></a>
    </div>
   

</div>
       
    </header>

    <div id="main_navigation" class="dark_navigation"> <!-- Main navigation start -->
        <div class="inner_navigation" >
        <div style="margin-top:10%;"></div>
            <ul class="main" >
                <li ><a class="expand"  href="dashboard.html"><i class="icon-reorder"></i>&nbsp;&nbsp;产品管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="../product/add" target="right" onClick="getclassname(this)">添加产品&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/product/index');?>" target="right" onClick="getclassname(this)">产品列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-calendar"></i>&nbsp;&nbsp;公司信息管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/common/add');?>" target="right" onClick="getclassname(this)">添加信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/common/index');?>" target="right" onClick="getclassname(this)">信息列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-signal"></i>&nbsp;&nbsp;新闻管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/news/add');?>" target="right" onClick="getclassname(this)">添加新闻&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/news/index');?>" target="right" onClick="getclassname(this)">新闻列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-tasks"></i>&nbsp;&nbsp;政策管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/policy/add');?>" target="right" onClick="getclassname(this)">添加信息&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/policy/index');?>" target="right" onClick="getclassname(this)">政策列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-table"></i>&nbsp;&nbsp;招聘管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/recruit/add');?>" target="right" onClick="getclassname(this)">添加招聘职位&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/recruit/index');?>" target="right" onClick="getclassname(this)">招聘列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-warning-sign"></i>&nbsp;&nbsp;问题管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/question/add');?>" target="right" onClick="getclassname(this)">添加问题&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/question/index');?>" target="right" onClick="getclassname(this)">问题列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-reorder"></i>&nbsp;&nbsp;样品管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          
                          <li><a href="<?php echo U('admin/courier/index');?>" target="right" onClick="getclassname(this)">样品列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-calendar"></i>&nbsp;&nbsp;留言管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          
                          <li><a href="<?php echo U('admin/message/index');?>" target="right" onClick="getclassname(this)">留言列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-inbox"></i>&nbsp;&nbsp;用户管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/user/add');?>" target="right" onClick="getclassname(this)">添加用户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/user/index');?>" target="right" onClick="getclassname(this)">用户列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
                <li ><a class="expand"  href="dashboard.html"><i class="icon-table"></i>&nbsp;&nbsp;角色管理</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                          <div style=" height:8px; width:100%;"></div>
                          <li><a href="<?php echo U('admin/role/add');?>" target="right" onClick="getclassname(this)">添加角色&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                          <li><a href="<?php echo U('admin/role/index');?>" target="right" onClick="getclassname(this)">角色列表&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                           <div style=" height:8px; width:100%;"></div>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div id="content" class="no-sidebar">
     <!-- Content start -->
            
            <iframe  class="inner_navigation1" name="right" src="<?php echo U('admin/user/show');?>" frameborder="0" width="100%" scrolling="auto" height="100%"></iframe>

               <!-- Content END --> 
            </div>
            
        </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/admin/js/jquery-1.10.2.js"></script>
    <script src="/Public/admin/js/jquery-ui-1.10.3.js"></script>
    <script src="/Public/admin/js/bootstrap.js"></script>

    <script src="/Public/admin/js/library/jquery.collapsible.min.js"></script>
    <script src="/Public/admin/js/library/jquery.mCustomScrollbar.min.js"></script>
    <script src="/Public/admin/js/library/jquery.mousewheel.min.js"></script>
    <script src="/Public/admin/js/library/jquery.uniform.min.js"></script>

    
    <script src="/Public/admin/js/library/jquery.sparkline.min.js"></script>
    <script src="/Public/admin/js/library/chosen.jquery.min.js"></script>
    <script src="/Public/admin/js/library/jquery.easytabs.js"></script>
    <script src="/Public/admin/js/library/flot/excanvas.min.js"></script>
    <script src="/Public/admin/js/library/flot/jquery.flot.js"></script>
    <script src="/Public/admin/js/library/flot/jquery.flot.pie.js"></script>
    <script src="/Public/admin/js/library/flot/jquery.flot.selection.js"></script>
    <script src="/Public/admin/js/library/flot/jquery.flot.resize.js"></script>
    <script src="/Public/admin/js/library/flot/jquery.flot.orderBars.js"></script>
    <script src="/Public/admin/js/library/maps/jquery.vmap.js"></script>
    <script src="/Public/admin/js/library/maps/maps/jquery.vmap.world.js"></script>
    <script src="/Public/admin/js/library/maps/data/jquery.vmap.sampledata.js"></script>
    <script src="/Public/admin/js/library/jquery.autosize-min.js"></script>
    <script src="/Public/admin/js/library/charCount.js"></script>
    <script src="/Public/admin/js/library/jquery.minicolors.js"></script>
    <script src="/Public/admin/js/library/jquery.tagsinput.js"></script>
    <script src="/Public/admin/js/library/fullcalendar.min.js"></script>
    <script src="/Public/admin/js/library/footable/footable.js"></script>
    <script src="/Public/admin/js/library/footable/data-generator.js"></script>

    <script src="/Public/admin/js/library/bootstrap-datetimepicker.js"></script>
    <script src="/Public/admin/js/library/bootstrap-timepicker.js"></script>
    <script src="/Public/admin/js/library/bootstrap-datepicker.js"></script>
    <script src="/Public/admin/js/library/bootstrap-fileupload.js"></script>
    <script src="/Public/admin/js/library/jquery.inputmask.bundle.js"></script>

    <script src="/Public/admin/js/flatpoint_core.js"></script>

    <script>
        jQuery('#vmap').vectorMap({
            map:"world_en",
            backgroundColor:null,
            color:"#ffffff",
            hoverOpacity:.7,
            selectedColor:"#2d91ef",
            enableZoom:0,
            showTooltip:1,
            values:sample_data,
            scaleColors:["#8cc3f6","#5c86ac"],
            normalizeFunction:"polynomial",
            onRegionClick:function(){alert("This Region has "+(Math.floor(Math.random()*10)+1)+" users!"
            )}
        });

        jQuery(document).ready(function($) {
            $('.footable').footable();
            $('.responsive_table_container').mCustomScrollbar({
                set_height: 400,
                advanced:{
                  updateOnContentResize: true,
                  updateOnBrowserResize: true
                }
            });

            $('.responsive_table_container_2').mCustomScrollbar({
                set_height: 520,
                advanced:{
                  updateOnContentResize: true,
                  updateOnBrowserResize: true
                }
            });
        });
    </script>

    <script src="/Public/admin/js/calendar.js"></script>
    <script src="/Public/admin/js/forms.js"></script>
    <script src="/Public/admin/js/dashboard.js"></script>
    
  </body>
</html>