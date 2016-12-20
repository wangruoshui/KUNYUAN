<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flatpoint - Responsive Web App Template</title>
  
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
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
  
  </head>

  <body>

    
    <div id="content"> <!-- Content start -->
      <div class="inner_content">
          <div class="widgets_area">
                <div class="row-fluid">
                    <div class="span12">
                         <div  class="daohanglink"style="">
                           <span class="daohang"></span>
                           <span>首页</span><span>></span>
                          
                           <span>政策管理</span>
                           <a  href="<?php echo U('admin/policy/add');?>" class="label label-warning" style="float:right; margin:8px;">添加</a>
                         </div>
                        <div class="well brown">
                            
                           
                            <div class="well-content" style="border:0px;">
                                <table class="table table-striped table-bordered table-hover datatable">
                                    <thead>
                                    <tr><i>*</i>提示：18->生物质颗粒燃料的优势;</tr>
                                    <tr><i>*</i>提示：19->政策支持;</tr>
                                    <tr><i>*</i>提示：8->燃料地域限制;</tr>

                                        <tr>
                                            
                                            <th width="5%">ID</th>
                                            <th width="10%">类别名</th>
                                            <th width="10%">所在部分</th>
                                            <th width="10%">标题</th>
                                            <th width="15%">内容</th>
                                            
                                            <th width="15%">图片</th>
                                            <th width="15%">添加时间</th>
                                            
                                            <th width="15%">管理操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                                            <td><?php echo ($k); ?></td>
                                            <td>环境与社会</td>
                                            <td><?php echo ($data["kindid"]); ?></td>
                                            <td><?php echo ($data["title"]); ?></td>
                                            <td>
                                                <?php echo (mb_substr($data["content"],0,10,'utf-8')); ?>......
                                            </td>
                                            <td><img src="/Public/upload/<?php echo ($data["image"]); ?>"></td>
                                            <td><?php echo ($data["time"]); ?></td>
                                            
                                            <td>
                                            <a class="btn" href="/admin/policy/manage/id/<?php echo ($data["commonid"]); ?>" title="修改">修改</a>
                                            <a class="btn" href="/admin/policy/del/id/<?php echo ($data["commonid"]); ?>" title="删除">删除</a>
                                            <a class="btn" href="/admin/policy/show/id/<?php echo ($data["commonid"]); ?>" title="查看">查看</a>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            
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

    <script src="/Public/admin/js/library/jquery.dataTables.js"></script>

    <script src="/Public/admin/js/flatpoint_core.js"></script>

    <script src="/Public/admin/js/datatables.js"></script>

  </body>
</html>