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
                <i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">职员管理</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">职员信息</a>
            </div>
        </div>
    </div>
    <div class="well">
        <p style="font-size:26px;margin-left:42%;margin-top:3%;">职员信息</p>
        <hr/>
        <div class="well brown" style="margin-left:2%;margin-right:20%;">
            <div class="result-content">
                <div style="width:20%;margin-left:21%;float: left;margin-top:5%;">
                    <?php if($user[0]['sex'] == 1 ): ?><a href="<?php echo U('admin/user/show');?>" target="right"><img src="/Public/admin/images/user3.png" /></a>
                        <?php else: ?>
                        <a href="<?php echo U('admin/user/show');?>" target="right"><img src="/Public/admin/images/user4.png" /></a><?php endif; ?></span>

                </div>
                <div class="result-content" style="margin-left:3%;float: left; margin-top:8%;">
                    <ul class="sys-info-list ">
                        <li>
                            <label >用户名：&nbsp;&nbsp;&nbsp;</label><span class="res-info"><?php echo ($user[0]["username"]); ?></span>
                        </li>
                        <li>
                            <label>性别&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;&nbsp;</label><span class="res-info">
                        <?php if($user[0]['sex'] == 1 ): ?>男
                             <?php else: ?>
                                女<?php endif; ?></span>
                        </li>
                        <li>
                            <label >手机号：&nbsp;&nbsp;&nbsp;</label><span class="res-info"><?php echo ($user[0]["phone"]); ?></span>
                        </li>
                        <li>
                            <label >地址&nbsp;&nbsp;&nbsp;：&nbsp;&nbsp;&nbsp;</label><span class="res-info"><?php echo ($user[0]["address"]); ?></span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Content end -->
    </div>
</div>
</body>
</html>