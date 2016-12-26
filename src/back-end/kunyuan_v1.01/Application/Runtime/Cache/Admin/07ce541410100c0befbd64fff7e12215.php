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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">网站图片管理</a>

            </div>
        </div>
        <div class="well1">

            <a href="<?php echo U('admin/common/add');?>" style="color:#000;"></a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab" style=" width: 100%;">

                        <thead>
                        <tr>

                            <th width="15%">ID</th>
                            <th width="25%">名称</th>
                            <th width="35%">图片</th>
                            <th width="6%">管理操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                                <td><?php echo ($k); ?></td>
                                <td><?php echo ($data["config_name"]); ?></td>
                                <td><img src="/Public/upload/<?php echo ($data["config_content"]); ?>" style="height: 10%;width: 50%;"></td>
                                <td>
                                    <a class="btn" href="/index.php/admin/peizhi/picturemanage/id/<?php echo ($data["id"]); ?>" title="修改">修改</a>
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