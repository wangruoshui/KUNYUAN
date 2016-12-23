<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

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
                <i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">信息管理</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">添加内容</a>
            </div>
        </div>
    </div>
    <div class="well">
        <form action="<?php echo U('admin/common/addinsert');?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>

                <tr>
                    <th width="10%">种类：</th>
                    <td>
                        公司简介
                    </td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>请输入要添加部分：</th>
                    <td>
                        <select name="kindid">
                            <option value="2">公司介绍</option>
                            <option value="3">我们的优势的一部分</option>
                            <option value="4">我们的优势的二部分</option>
                            <option value="4">我们的优势的三部分</option>
                            <option value="6">公司现状</option>
                            <option value="7">公司地址</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>标题：</th>
                    <td><input class="common-text" name="title" size="50" type="text" value=""></td>
                </tr>
                <tr>
                    <th>内容：</th>
                    <td>
                        <textarea class="common-textarea" name="content" cols="30" style="width: 60%;" rows="5"></textarea>
                    </td>
                </tr>

                <tr>
                    <th><i class="require-red">*</i>选择图片：</th>
                    <td><input type="file" name="image" id="pic" accept="image/gif, image/jpeg" /></td>
                </tr>

                <tr>
                    <th></th>
                    <td><input name="userid" value="5" type="hidden">
                        <input class="btn btn-primary btn6 mr10" style="color:#ffffff;" value="添加" type="submit" name="submit">
                        <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                    </td>
                </tr>

                </tbody></table>
        </form>
    </div>
    <!-- Content end -->
</div>

</body>
</html>