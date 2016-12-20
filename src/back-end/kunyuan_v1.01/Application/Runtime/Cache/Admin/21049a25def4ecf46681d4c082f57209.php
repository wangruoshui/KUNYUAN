<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flatpoint - Responsive Web App Template</title>
  
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="/Public/css/allp.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/main.css"/>
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
                           <span>新闻管理</span><span>></span>
                           <span>新闻信息</span>
                           
                         </div>
                        <p style="font-size:26px;margin-left:42%;margin-top:3%;">新闻信息</p>
                           <hr/>
                        <div class="well brown" style="margin-left:20%;margin-right:20%;">
                         <form action="<?php echo U('admin/news/manage');?>">
                            
                           <table class="insert-tab" width="100%">
                        <tbody>
                            <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                                <th width="10%">种类：</th>
                                <td>
                                新闻
                            </td>
                            </tr>
                            <tr>
                                <th>标题：</th>
                                <td><?php echo ($data["title"]); ?></td>
                            </tr>
                            <tr>
                            <th>内容：</th>
                            <td>
                                <?php echo ($data["content"]); ?>
                            </td>
                            </tr>
                            
                            <tr>
                               <th>图片：</th>
                                <td><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="height:50px;width:100px;"></td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                           

                        </tbody></table>
                            
                         </form>   
                           
                          
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

    <script src="/Public/admin/js/flatpoint_core.js"></script>

  </body>
</html>