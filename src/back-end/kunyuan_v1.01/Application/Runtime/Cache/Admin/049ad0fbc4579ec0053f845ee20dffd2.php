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
                <i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="#">问题管理</a>

            </div>
        </div>
        <div class="well">

            <a href="<?php echo U('admin/question/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加问题</a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab" width="100%">
                    <thead>
                    <tr>

                        <th width="5%">ID</th>
                        <th width="10%">用户名ID</th>
                        <th width="20%">常见问题</th>
                        <th width="45%">回答</th>
                        <th width="17%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($question)): $i = 0; $__LIST__ = $question;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($vo["userid"]); ?></td>
                            <td><?php echo ($vo["question"]); ?></td>
                            <td><?php echo (mb_substr($vo["answer"],0,10,'utf-8')); ?></td>

                            <td>
                                <a class="btn" href="/index.php/admin/question/manage/id/<?php echo ($vo["questionid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/question/del/id/<?php echo ($vo["questionid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/question/show/id/<?php echo ($vo["questionid"]); ?>" title="查看">查看</a>
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