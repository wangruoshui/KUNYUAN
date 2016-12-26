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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="/index.php/admin/news/index">新闻管理</a><span class="crumb-step">&gt;</span>新闻信息
            </div>
        </div>
    </div>
    <div class="well">
        <p style="font-size:26px;margin-left:42%;margin-top:3%;">新闻信息</p>
        <hr/>
        <div class="well brown" style="margin-left:2%;margin-right:20%;">
            <form action="#">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <th width="10%">种类：</th>
                            <td>
                                新闻
                            </td>
                        </tr>
                        <tr>
                            <th>图片：</th>
                            <th><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="height:100px;width:150px;float: left;margin-bottom: 1%;margin-top: 1%;margin-left: 1%;"></th>
                        </tr>
                        <tr>
                            <th>标题：</th>
                            <td><?php echo ($data["title"]); ?></td>
                        </tr>
                        <tr>
                            <th>内容：</th>
                            <td>

                                <?php echo (htmlspecialchars_decode($data["content"])); ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>


                    </tbody></table>

            </form>
        </div>
        <!-- Content end -->
    </div>

</body>
</html>