<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>坤源后台</title>
    <link rel="stylesheet" type="text/css" href="/Public/admin/css/list.css">
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet">
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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">职员管理</a>

            </div>
        </div>
        <div class="well1">

            <a href="<?php echo U('admin/user/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加职员</a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab" width="100%">
                    <thead>
                    <tr>

                        <th width="5%">ID</th>
                        <th width="8%">姓名</th>
                        <th width="4%">性别</th>
                        <th width="8%">职位</th>
                        <th width="10%">手机号</th>
                        <th width="15%">家庭地址</th>
                        <th width="10%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($vo["username"]); ?></td>
                            <?php if($vo["sex"] == 1 ): ?><td>男</td>
                                <?php else: ?>
                                <td>女</td><?php endif; ?>

                            <td><?php echo ($vo['role']['rolename']); ?></td>

                            <td><?php echo ($vo["phone"]); ?></td>
                            <td><?php echo ($vo["address"]); ?></td>

                            <td>
                                <a class="btn" href="/index.php/admin/user/manage/id/<?php echo ($vo["userid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/user/del/id/<?php echo ($vo["userid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/user/show/id/<?php echo ($vo["userid"]); ?>" title="查看">查看</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    </tbody>
                </table>
                <ul class="pagination" style="float: right;margin-left: 5%;">
                    <?php echo ($pages); ?>
                </ul>
            </div>

        </div>
        <!-- Content end -->
    </div>
</div>
</body>
</html>