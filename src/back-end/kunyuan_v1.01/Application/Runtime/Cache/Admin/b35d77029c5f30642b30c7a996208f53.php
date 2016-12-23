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
                <i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="#">角色管理</a>

            </div>
        </div>
        <div class="well">

            <a href="<?php echo U('admin/role/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加角色</a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab" width="100%">
                    <thead>
                    <tr>

                        <th width="2%">ID</th>
                        <th width="5%">角色名</th>

                        <th width="6%">角色描述</th>

                        <th width="32%">拥有权限</th>


                        <th width="10%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($role)): $i = 0; $__LIST__ = $role;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($vo["rolename"]); ?></td>
                            <td><?php echo ($vo["description"]); ?>部门</td>
                            <td>
                                <?php if($vo["product"] == 1 ): ?>产品&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["courier"] == 1 ): ?>样品&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["message"] == 1 ): ?>留言&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["question"] == 1 ): ?>问题&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["news"] == 1 ): ?>新闻&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["policy"] == 1 ): ?>政策&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["common"] == 1 ): ?>公司信息&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["recruit"] == 1 ): ?>招聘&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["admin"] == 1 ): ?>用户&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                                <?php if($vo["role"] == 1 ): ?>角色&nbsp;&nbsp;/&nbsp;&nbsp;<?php endif; ?>
                            </td>
                            <td>
                                <a class="btn" href="/index.php/admin/role/manage/id/<?php echo ($vo["roleid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/role/del/id/<?php echo ($vo["roleid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/role/show/id/<?php echo ($vo["roleid"]); ?>" title="查看">查看</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>




                    </tbody>
                </table>
            </div>

        </div>
        <!-- Content end -->
    </div>
</div>
</body>
</html>