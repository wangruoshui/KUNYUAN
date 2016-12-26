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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="/admin/role/index">角色管理</a><span class="crumb-step">&gt;</span>修改角色
            </div>
        </div>
    </div>
    <div class="well">
        <form action="/index.php/admin/role/manage/id/<?php echo ($role[0]["roleid"]); ?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>

                <tr>
                    <th>角色名称：</th>
                    <td><input class="common-text" name="rolename" size="50" type="text" value="<?php echo ($role[0]["rolename"]); ?>"></td>
                </tr>
                <tr>
                    <th>所在部门：</th>
                    <td><input class="common-text" name="description" size="50" type="text" value="<?php echo ($role[0]["description"]); ?>"></td>
                </tr>
                <tr>
                    <th>权限：</th>
                    <td class="tc" >
                        <?php if($role[0]['product'] == 1 ): ?><input  name="product" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="product" type="checkbox"><?php endif; ?>产品管理
                        <?php if($role[0]['courier'] == 1 ): ?><input  name="courier" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="courier" type="checkbox"><?php endif; ?>样品管理
                        <?php if($role[0]['message'] == 1 ): ?><input  name="message" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="message" type="checkbox"><?php endif; ?>留言管理
                        <?php if($role[0]['question'] == 1 ): ?><input  name="question" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="question" type="checkbox"><?php endif; ?>问题管理
                        <?php if($role[0]['news'] == 1 ): ?><input  name="news" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="news" type="checkbox"><?php endif; ?>新闻管理
                        <?php if($role[0]['policy'] == 1 ): ?><input  name="policy" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="policy" type="checkbox"><?php endif; ?>政策管理
                        <?php if($role[0]['common'] == 1 ): ?><input  name="common" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="common" type="checkbox"><?php endif; ?>公司信息管理
                        <?php if($role[0]['recruit'] == 1 ): ?><input  name="recruit" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="recruit" type="checkbox"><?php endif; ?>招聘管理
                        <?php if($role[0]['admin'] == 1 ): ?><input  name="admin" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="admin" type="checkbox"><?php endif; ?>用户管理
                        <?php if($role[0]['role'] == 1 ): ?><input  name="role" type="checkbox" checked="checked">
                            <?php else: ?>
                            <input  name="role" type="checkbox"><?php endif; ?>角色管理</td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input class="btn btn-primary btn6 mr10" style="color:#ffffff;" value="修改" type="submit" name="submit">
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