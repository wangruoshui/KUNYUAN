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
                <i class="icon-font"></i><a href="#">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="#">信息管理</a>

            </div>
        </div>
        <div class="well">

            <a href="<?php echo U('admin/common/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加内容</a>

            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab">
                    <thead>

                    <tr>

                        <th width="5%">ID</th>
                        <th width="10%">类别名</th>
                        <th width="10%">所在部分</th>
                        <th width="10%">标题</th>
                        <th width="15%">内容</th>

                        <th width="10%">图片</th>
                        <th width="15%">添加时间</th>

                        <th width="15%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                            <td><?php echo ($k); ?></td>
                            <td>公司简介</td>
                            <td><?php echo ($data["kindid"]); ?></td>
                            <td><?php echo ($data["title"]); ?></td>
                            <td>
                                <?php echo (mb_substr($data["content"],0,10,'utf-8')); ?>......
                            </td>
                            <td><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="margin-left: 20%;"></td>
                            <td><?php echo ($data["time"]); ?></td>

                            <td>
                                <a class="btn" href="/index.php/admin/common/manage/id/<?php echo ($data["commonid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/common/del/id/<?php echo ($data["commonid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/common/show/id/<?php echo ($data["commonid"]); ?>" title="查看">查看</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody>
                </table>
            </div>

        </div>
        <!-- Content end -->
    </div>
</div>
</body>
</html>