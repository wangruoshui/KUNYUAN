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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">政策管理</a>

            </div>
        </div>
        <div class="well1">

            <a href="<?php echo U('admin/policy/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加内容</a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab">
                    <thead>
                    <tr>

                        <th width="5%">ID</th>
                        <th width="10%">类别名</th>
                        <th width="15%">所在部分</th>
                        <th width="12%">标题</th>
                        <th width="15%">内容</th>

                        <th width="10%">图片</th>
                        <th width="8%">添加时间</th>

                        <th width="15%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                            <td><?php echo ($k); ?></td>
                            <td>环境与社会</td>
                            <?php if($data['kindid'] == 18 ): ?><td>生物质颗粒燃料的优势</td><?php endif; ?>
                            <?php if($data['kindid'] == 19 ): ?><td>政策支持</td><?php endif; ?>
                            <?php if($data['kindid'] == 8 ): ?><td>燃料地域限制</td><?php endif; ?>
                            <?php if($data['kindid'] == 14 ): ?><td>社会需求-我国的环境问题</td><?php endif; ?>

                            <td><?php echo (mb_substr($data["title"],0,7,'utf-8')); ?>...</td>
                            <td>
                                <?php echo (mb_substr($data["content"],0,10,'utf-8')); ?>...
                            </td>
                            <td><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="margin-left: 20%;"></td>
                            <td><?php echo (mb_substr($data["time"],0,7,'utf-8')); ?>...</td>

                            <td>
                                <a class="btn" href="/index.php/admin/policy/manage/id/<?php echo ($data["commonid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/policy/del/id/<?php echo ($data["commonid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/policy/show/id/<?php echo ($data["commonid"]); ?>" title="查看">查看</a>
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