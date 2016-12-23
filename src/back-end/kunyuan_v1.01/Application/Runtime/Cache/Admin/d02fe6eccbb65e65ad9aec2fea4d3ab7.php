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
                <i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">产品中心</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">产品信息</a>
            </div>
        </div>
    </div>
    <div class="well">
        <p style="font-size:26px;margin-left:42%;margin-top:3%;">产品信息</p>
        <hr/>
        <div class="well brown" style="margin-left:2%;margin-right:20%;">
            <form action="<?php echo U('admin/product/manage');?>">
                <table class="insert-tab" width="100%">
                    <tbody>
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                            <th width="15%">产品名称：</th>
                            <td><?php echo ($data["name"]); ?></td>
                        </tr>
                        <tr>
                            <th>图片：</th>
                            <td><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="height:100px;width:120px;margin-top: 2%;margin-left: 1%;margin-bottom: 2%;"></td>
                        </tr>

                        <tr>
                            <th>介绍：</th>
                            <td>
                                <?php echo (htmlspecialchars_decode($data["introductions"])); ?>
                            </td>
                        </tr>

                        <tr>
                            <th>价格：</th>
                            <td><?php echo ($data["price"]); ?>&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;吨</td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody></table>

            </form>
        </div>
    <!-- Content end -->
</div>

</body>
</html>