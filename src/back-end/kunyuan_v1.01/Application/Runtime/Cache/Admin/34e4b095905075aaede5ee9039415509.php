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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">产品中心</a>

            </div>
        </div>
        <div class="well1">

            <a href="<?php echo U('admin/product/add');?>" style="margin-bottom: 0%;color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加产品</a>

            <div class="well-content" style="margin-top: 2%;">

                <table class="result-tab" style="width: 100%;">
                    <thead>
                    <tr>

                        <th width="5%">ID</th>
                        <th width="12%">商品名</th>
                        <th width="5%">图片</th>
                        <th width="15%">更新时间</th>
                        <th width="15%">价格（元/吨）</th>

                        <th width="11%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>

                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($data["name"]); ?></td>
                            <td><img src="/Public/upload/<?php echo ($data["image"]); ?>" style="margin-left: 15%;"></td>
                            <td><?php echo ($data["time"]); ?></td>
                            <td><?php echo ($data["price"]); ?></td>
                            <td>
                                <a class="btn" href="/index.php/admin/product/manage/id/<?php echo ($data["productid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/product/del/id/<?php echo ($data["productid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/product/show/id/<?php echo ($data["productid"]); ?>" title="查看">查看</a>
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