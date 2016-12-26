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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="/index.php/admin/role/index">角色管理</a><span class="crumb-step">&gt;</span>添加角色
            </div>
        </div>
    </div>
    <div class="well">
        <form action="<?php echo U('admin/role/add');?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>

                <tr>
                    <th>角色名称：</th>
                    <td><input class="common-text" name="rolename" size="50" type="text"></td>
                </tr>
                <tr>
                    <th>所在部门：</th>
                    <td><input class="common-text" name="description" size="50" type="text"></td>
                </tr>
                <tr>
                    <th>权限：</th>
                    <td class="tc" >
                        <input  name="product" type="checkbox">
                        产品管理
                        <input  name="courier" type="checkbox">
                        样品管理
                        <input  name="message" type="checkbox">
                        留言管理
                        <input  name="question" type="checkbox">
                        问题管理
                        <input  name="news" type="checkbox">
                        新闻管理
                        <input  name="policy" type="checkbox">
                        政策管理
                        <input  name="common" type="checkbox">
                        公司信息管理
                        <input  name="recruit" type="checkbox">
                        招聘管理
                        <input  name="admin" type="checkbox">
                        用户管理
                        <input  name="role" type="checkbox">
                        角色管理</td>
                </tr>
                <tr>
                    <th></th>
                    <td>
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