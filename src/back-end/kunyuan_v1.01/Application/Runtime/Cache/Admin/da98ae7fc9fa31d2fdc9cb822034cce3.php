<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="author" content="">


    <!--引入CSS-->
    <link rel="stylesheet" type="text/css" href="/Public/proimg/style/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/proimg/style/syntax.css">
    <link rel="stylesheet" type="text/css" href="/Public/proimg/style/style.css">
    <link rel="stylesheet" type="text/css" href="/Public/proimg/style/webuploader.css">

    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <!--引入JS-->
    <script type="text/javascript" src="/Public/proimg/style/webuploader.min.js"></script>
    <script type="text/javascript" src="/Public/proimg/style/proimg.js"></script>


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

    <title>坤源后台</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/list.css">
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/Public/admin/js/modernizr.min.js"></script>
</head>

<body>


<div>
    <!-- Content start -->
    <div  class="daohanglink">

        <div class="crumb-wrap">
            <div class="crumb-list">
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="/index.php/admin/product/index">产品中心</a><span class="crumb-step">&gt;</span>添加产品
            </div>
        </div>
    </div>
    <div class="well1">
        <form action="<?php echo U('admin/product/modify');?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>

                <tr>
                    <th width="10%"><i class="require-red">*</i>产品名称：</th>
                    <td><input class="common-text" name="name" size="50" type="text" value="<?php echo ($result[0]["name"]); ?>"></td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>当前图片：</th>
                    <th>
                        <div class="modify_img"><img src="/Public/upload/<?php echo ($result[0]["image"]); ?>" width="150" hegiht="100" style="float: left;margin-bottom: 1%;margin-top: 1%;margin-left: 1%;"></div></th>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>选择图片：</th>
                    <td><input type="file" name="image" id="pic" accept="image/gif, image/jpeg" /></td>
                </tr>


                <tr>
                    <th><i class="require-red">*</i>价格：</th>
                    <td><input class="common-text" name="price" size="50" type="text" value="<?php echo ($result[0]["price"]); ?>"></td>
                </tr>
                <?php if(is_array($proimg)): $i = 0; $__LIST__ = $proimg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="<?php echo ($vo["proimgid"]); ?>1">
                        <th id="<?php echo ($vo["proimgid"]); ?>2">详情页图片：<?php echo ($i); ?></th>
                        <td id="<?php echo ($vo["proimgid"]); ?>3"><img src="/Public/upload/<?php echo ($vo["proimgpath"]); ?>" style="height:100px;width:120px;margin-top: 2%;margin-left: 1%;margin-bottom: 2%;">&nbsp;&nbsp;&nbsp;<a href="#" class="proimg" name="<?php echo ($vo["proimgid"]); ?>"><i class="icon-font"></i></a></td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                    <th><i class="require-red">*</i>添加产品详情页图片：

                    </th>
                    <td><div id="uploader-demo">
                        <!--用来存放item-->
                        <div id="fileList" class="uploader-list"></div>
                        <div id="filePicker" style="width:60px;margin-top: 1%;"><i class="icon-font"></i></div>
                    </div></td>
                </tr>

                <input class="common-text" name="productid" size="50" type="hidden" value="<?php echo ($result[0]["productid"]); ?>">

                </tbody></table>
            <div style="float: left;width: 10%;text-align: center;margin-top: 10%;"> 内容编辑：</div>
            <textarea  name="introductions" style="width: 90%;float: right;"  id="editor"  value="<?php echo ($result[0]["introductions"]); ?>"><?php echo ($result[0]["introductions"]); ?></textarea>
            <div >
                <input class="btn btn-primary btn6 mr10"  value="修改" type="submit" name="submit" onclick="getContent()" style="margin-top:2%;margin-left: 10%;">
                <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button" style="margin-top:2%;">
            </div>
        </form>
    </div>
    <!-- Content end -->
</div>
<script type="text/javascript">
    var ue = UE.getEditor('editor',
            //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
            {
                //默认的编辑区域高度
                initialFrameHeight:150,
                toolbars:[[
                    'undo', //撤销
                    'redo', //重做
                    'bold', //加粗
                    'indent', //首行缩进
                    'snapscreen', //截图
                    'italic', //斜体
                    'underline', //下划线
                    'strikethrough', //删除线
                    'subscript', //下标
                    'fontborder', //字符边框
                    'superscript', //上标
                    'formatmatch', //格式刷
                    'source', //源代码
                    'pasteplain', //纯文本粘贴模式
                    'selectall', //全选
                    'preview', //预览
                    'horizontal', //分隔线
                    'removeformat', //清除格式
                    'time', //时间
                    'date', //日期
                    'insertrow', //前插入行
                    'insertcol', //前插入列
                    'mergeright', //右合并单元格
                    'mergedown', //下合并单元格
                    'deleterow', //删除行
                    'deletecol', //删除列
                    'splittorows', //拆分成行
                    'splittocols', //拆分成列
                    'splittocells', //完全拆分单元格
                    'deletecaption', //删除表格标题
                    'inserttitle', //插入标题
                    'mergecells', //合并多个单元格
                    'deletetable', //删除表格
                    'cleardoc', //清空文档
                    'insertparagraphbeforetable', //"表格前插入行"
                    'fontfamily', //字体
                    'fontsize', //字号
                    'paragraph', //段落格式
                    'simpleupload', //单图上传
                    'insertimage', //多图上传
                    'edittable', //表格属性
                    'edittd', //单元格属性
                    'link', //超链接
                    'map', //Baidu地图
                    'justifyleft', //居左对齐
                    'justifyright', //居右对齐
                    'justifycenter', //居中对齐
                    'justifyjustify', //两端对齐
                    'forecolor', //字体颜色
                    'backcolor', //背景色
                    'fullscreen', //全屏
                    'rowspacingtop', //段前距
                    'rowspacingbottom', //段后距
                    'imageleft', //左浮动
                    'imageright', //右浮动
                    'imagecenter', //居中
                    'lineheight', //行间距
                    'edittip ', //编辑提示
                    'touppercase', //字母大写
                    'tolowercase', //字母小写
                    'inserttable', //插入表格
                    'charts', // 图表
                ]]});
    function getContent() {
        var arr = [];

        arr.push(UE.getEditor('editor').getContent());
        document.getElementById("editor").value=arr;
        // alert(arr.join("\n"));
    }
</script>
<script src="/Public/admin/js/jquery.min.js">
</script>
<script>
    $(document).ready(function(){
        $(".proimg").click(function(){
            var id=$(this).attr('name');
            var parent=document.getElementById(id+'1');
            var child1=document.getElementById(id+'2');
            var child2=document.getElementById(id+'3');
            parent.removeChild(child1);
            parent.removeChild(child2);
            $.post("<?php echo U('/admin/proimg/del');?>",
                    {
                        id:id
                    },
                    function(){
                        alert('删除成功！');
                    });

        });

    });
</script>
</body>
</html>