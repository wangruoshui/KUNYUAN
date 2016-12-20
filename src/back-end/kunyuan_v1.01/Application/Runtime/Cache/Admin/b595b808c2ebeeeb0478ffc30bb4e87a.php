<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flatpoint - Responsive Web App Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/Public/css/allp.css" rel="stylesheet">
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
         <div style="width: 70%;height:35%;" ></div>
         <div style="width: 70%;height: 50px;">
     <a href="<?php echo U('admin/log/logout');?>" style="font-size: 20px;padding-top: 40%;margin-left: 20%;">退出</a>
         </div>
         </div>
    <div class="username">
       Hi <?php echo ($user); ?>
    </div>
    
   

</div>
       
    </header>

    <div id="main_navigation" class="dark_navigation" > <!-- Main navigation start -->
        <div class="inner_navigation" >
        <div class="user" style="width: 80%; margin-right: 5%;margin-top: 10%;">
            <div style="width: 50%;float: left;margin-right: 7%;">
                <?php if($usersex == 1 ): ?><a  href="/admin/user/show/id/<?php echo ($userid); ?>" target="right"><img src="/Public/admin/image/user1.png" /></a>
                    <?php else: ?>
                    <a  href="/admin/user/show/id/<?php echo ($userid); ?>" target="right"><img src="/Public/admin/image/user2.png" /></a><?php endif; ?></span>

            </div>
            <div style="float: left;color: #ffffff;margin-top: 10%;font-size: 12%;">
                <p ><?php echo ($user); echo ($role_all[0]["rolename"]); ?></p>
                <p ><?php echo ($userde); ?>部门</p>
            </div>
        </div>


        <div style="margin-top:65%;"></div>
            <ul class="main" >
                <?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo[0]['id'] == 7) OR ($vo[0]['id'] == 8) ): ?><li ><a class="expand"  href="dashboard.html"><i class="icon-reorder"></i>&nbsp;&nbsp;<?php echo ($vo[0]['name']); ?></a>
                            <ul class="sub_main" style="background-color: #20477C;">
                                <div style=" height:8px; width:100%;"></div>
                                <li><a href="/admin/<?php echo ($vo[0]['show_url']); ?>" target="right" onClick="getclassname(this)"><?php echo ($vo[0]['show_name']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                                <div style=" height:8px; width:100%;"></div>

                            </ul>
                        </li>

                        <?php else: ?>
                        <li ><a class="expand"  href="dashboard.html"><i class="icon-reorder"></i>&nbsp;&nbsp;<?php echo ($vo[0]['name']); ?></a>
                            <ul class="sub_main" style="background-color: #20477C;">
                                <div style=" height:8px; width:100%;"></div>
                                <li><a href="/admin/<?php echo ($vo[0]['add_url']); ?>" target="right" onClick="getclassname(this)"><?php echo ($vo[0]['add_name']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                                <li><a href="/admin/<?php echo ($vo[0]['show_url']); ?>" target="right" onClick="getclassname(this)"><?php echo ($vo[0]['show_name']); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                                <div style=" height:8px; width:100%;"></div>

                            </ul>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                <?php if($peizhi == 1): ?><li ><a class="expand"  href="dashboard.html"><i class="icon-reorder"></i>&nbsp;&nbsp;公司配置信息</a>
                    <ul class="sub_main" style="background-color: #20477C;">
                        <div style=" height:8px; width:100%;"></div>
                        <li><a href="/admin/peizhi/picture" target="right" onClick="getclassname(this)">网站图片管理&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                        <div style=" height:8px; width:100%;"></div>
                        <li><a href="/admin/peizhi/person" target="right" onClick="getclassname(this)">公司联系人&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                        <div style=" height:8px; width:100%;"></div>
                        <li><a href="/admin/peizhi/phone" target="right" onClick="getclassname(this)">公司地址电话&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                        <div style=" height:8px; width:100%;"></div>
                        <li><a href="/admin/peizhi/crn" target="right" onClick="getclassname(this)">公司备案号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="float:right;font-size:20px;">></font></a></li>
                    </ul>
                </li><?php endif; ?>
            </ul>
        </div>
    </div>

    <div id="content" class="no-sidebar">
     <!-- Content start -->
            
            <iframe  class="inner_navigation1" name="right" src="/admin/<?php echo ($role_list[0][0]['show_url']); ?>" frameborder="0" width="100%" scrolling="auto" height="100%"></iframe>

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
    <!--<script src="/Public/admin/js/library/flot/jquery.flot.resize.js"></script>-->
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