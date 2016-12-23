<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Flatpoint - Responsive Web App Template</title>
  
    <meta name="description" content="">
    <meta name="author" content="">
      <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.config.js"></script>
      <script type="text/javascript" charset="utf-8" src="/Public/ueditor/ueditor.all.min.js"> </script>
      <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
      <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
      <script type="text/javascript" charset="utf-8" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>

      <style type="text/css">
          div{
              width:100%;
          }
      </style>

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
                           <span>添加新闻</span>
                           
                         </div>

                         <p style="font-size:20px;margin-left:2%;margin-top:1%;">添加新闻</p>
                           <hr/>
                         <div class="result-content">
               <form action="<?php echo U('admin/news/addinsert');?>" method="post" enctype= "multipart/form-data">
                <table class="insert-tab" width="100%">
                        <tbody>
                            
                            <tr>
                                <th width="10%">种类：</th>
                                <td>
                                新闻
                            </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td><input class="common-text" name="title" size="50" type="text"></td>
                            </tr>
                            <tr>
                            <th>内容：</th>
                            <td>
                                <textarea class="common-textarea" name="content" cols="30" style="width: 100%;" rows="5" id="editor"></textarea>
                            </td>
                            </tr>
                            
                            <tr>
                                <th><i class="require-red">*</i>选择图片：</th>
                                <td><input type="file" name="image" id="pic" accept="image/gif, image/jpeg" /></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>管理员账号</th>
                                <td><input class="common-text" name="userid" size="50" type="text"  value="1"/></td>
                                <input class="hidden" name="kindid" value="15">
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="添加" type="submit" name="submit" onclick="getContent()">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>

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
    <script type="text/javascript">
        var ue = UE.getEditor('editor');
        function getContent() {
            var arr = [];

            arr.push(UE.getEditor('editor').getContent());
            document.getElementById("editor").value=arr;
            // alert(arr.join("\n"));
        }
    </script>
  </body>
</html>