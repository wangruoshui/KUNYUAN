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
                <i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">职员管理</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">信息修改</a>
            </div>
        </div>
    </div>
    <div class="well">
        <form action="/index.php/admin/user/manage/id/<?php echo ($user[0]["userid"]); ?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>

                <tr>
                    <th><i class="require-red">*</i>用户名：</th>
                    <td><input class="common-text" name="username" size="50" type="text" value="<?php echo ($user[0]["username"]); ?>"></td>
                </tr>
                <tr>
                    <th><i class="require-red">*</i>密码：</th>
                    <td><input class="common-text" name="password" size="50" type="password" id="pas1" onblur="password1()" ></td>
                </tr>
                <tr>
                    <th>性别：</th>
                    <?php if($user[0]['sex'] == 1 ): ?><td>
                            <input name="sex"  type="radio" value="1" checked="checked" />男&nbsp; &nbsp;&nbsp;&nbsp;
                            <input name="sex"  type="radio" value="0" >女
                        </td>
                        <?php else: ?>
                        <td>
                            <input name="sex1"  type="radio" value="1" />男&nbsp; &nbsp;&nbsp;&nbsp;
                            <input name="sex1"  type="radio" value="0" checked="checked" >女
                        </td><?php endif; ?>

                </tr>
                <tr>
                    <th>职位：</th>
                    <td>
                        <select name="roleid">

                            <?php if(is_array($rolelist)): $i = 0; $__LIST__ = $rolelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($user[0]['role']['roleid'] == $vo['roleid']): ?><option value="<?php echo ($vo["roleid"]); ?>" selected="selected"><?php echo ($vo["rolename"]); ?></option>
                                    <?php else: ?>
                                    <option value="<?php echo ($vo["roleid"]); ?>"><?php echo ($vo["rolename"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>部门：</th>
                    <td>
                        <select name="department">


                            <?php if($user[0]['department'] == '销售'): ?><option value="销售" selected="selected">销售</option>
                                <?php else: ?>
                                <option value="销售">销售</option><?php endif; ?>
                            <?php if($user[0]['department'] == '财务'): ?><option value="财务" selected="selected">财务</option>
                                <?php else: ?>
                                <option value="财务">财务</option><?php endif; ?>
                            <?php if($user[0]['department'] == '后勤'): ?><option value="后勤" selected="selected">后勤</option>
                                <?php else: ?>
                                <option value="后勤">后勤</option><?php endif; ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>手机：</th>
                    <td><input class="common-text" name="phone" size="50" type="text" value="<?php echo ($user[0]["phone"]); ?>"></td>
                </tr>
                <tr>
                    <th>家庭地址：</th>
                    <td><input class="common-text" name="address" size="80" type="text" value="<?php echo ($user[0]["address"]); ?>"></td>
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