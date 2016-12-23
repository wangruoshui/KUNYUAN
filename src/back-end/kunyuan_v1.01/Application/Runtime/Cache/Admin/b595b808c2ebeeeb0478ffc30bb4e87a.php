<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>坤源后台</title>

    <!-- css样式 -->
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/index.css">
    <link rel="stylesheet" href="/Public/admin/css/style.css" media="screen" type="text/css" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- js -->


</head>
<body>
<header>
    <!-- Header start -->
    <div class="top">
        <div class="logo">
            坤源生物质颗粒
        </div>
        <div class="list" style="margin-right: 2%;">
            <img src="/Public/admin/images/chanpin6.png">
            <a href="<?php echo U('/admin/log/logout');?>">退出登录</a>
        </div>
        <div class="list">
            <img src="/Public/admin/images/chanpin1.png">
            <a href="/index.php/admin/product/index" target="right">产品中心</a>
        </div>
        <div class="list">
            <img src="/Public/admin/images/chanpin3.png">
            <a href="/index.php/admin/news/index" target="right">新闻中心</a>
        </div>
        <div class="list" >
            <img src="/Public/admin/images/chanpin5.png">
            <a href="/index.php/home/index/index">网站首页</a>
        </div>
    </div>
    <!-- Header end -->
</header>
<div class="content">


    <div class="navigation">
        <div class="user" style="height: 100px; margin-left: 8%;margin-top:20%;">
            <div style="float: left;margin-right: 7%;">
                <?php if($usersex == 1 ): ?><a  href="/index.php/admin/user/show/id/<?php echo ($userid); ?>" target="right"><img src="/Public/admin/images/user1.png" /></a>
                    <?php else: ?>
                    <a  href="/index.php/admin/user/show/id/<?php echo ($userid); ?>" target="right"><img src="/Public/admin/images/user2.png" /></a><?php endif; ?></span>

            </div>
            <div style="float: left;color: #000;margin-top: 15%;font-size: 12%;">
                <p style="margin-bottom: 3%;"><?php echo ($user); echo ($role_all[0]["rolename"]); ?></p>
                <p style="margin-top: 2%;"><?php echo ($userde); ?>部门</p>
            </div>
        </div>
        <!-- Main navigation start -->
        <ul id="accordion" class="accordion" style="margin-top: 0%;">
            <li>
                <div class="link">内容管理<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu" >
                    <?php if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($vo[0]['id'] == 1) OR ($vo[0]['id'] == 2) OR ($vo[0]['id'] == 3) OR ($vo[0]['id'] == 4)): ?><li><a href="/index.php/admin/<?php echo ($vo[0]['show_url']); ?>" target="right"><?php echo ($vo[0]['show_name']); ?></a></li>
                            <?php else: endif; endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <li>
                <div class="link">站点管理<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <?php if($peizhi == 1): ?><li><a href="/index.php/admin/peizhi/crn" target="right">公司配置信息</a></li>
                        <li><a href="/index.php/admin/peizhi/picture" target="right">网站图片管理</a></li><?php endif; ?>
                    <li><a href="/index.php/admin/user/manage/id/<?php echo ($userid); ?>" target="right">个人信息修改</a></li>
                </ul>
            </li>
            <li>
                <div class="link">样品与留言<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="/index.php/admin/courier/index" target="right">样品列表</a></li>
                    <li><a href="/index.php/admin/message/index" target="right">留言列表</a></li>
                </ul>
            </li>
            <li>
                <div class="link">招聘与问题<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="/index.php/admin/recruit/index" target="right">招聘列表</a></li>
                    <li><a href="/index.php/admin/question/index" target="right">问题列表</a></li>
                </ul>
            </li>
            <?php if($peizhi == 1): ?><li>
                <div class="link">职员管理<i class="fa fa-chevron-down"></i></div>
                <ul class="submenu">
                    <li><a href="/index.php/admin/user/index" target="right">职员列表</a></li>
                    <li><a href="/index.php/admin/role/index" target="right">角色列表</a></li>
                </ul>
            </li><?php endif; ?>
        </ul>

        <!-- Main navigation end -->
    </div>


    <div class="content_right">
        <!-- Content start -->

        <iframe  class="inner_navigation1" name="right" src="/index.php/admin/<?php echo ($role_list[0][0]['show_url']); ?>" frameborder="0" width="100%" scrolling="auto" height="100%"></iframe>

        <!-- Content END -->
    </div>

    <!-- js -->
    <script src='/Public/admin/js/jquery-3.1.1.js'></script>

    <script src="/Public/admin/js/index.js"></script>
</div>
</body>
</html>