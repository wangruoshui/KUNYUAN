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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">招聘管理</a>

            </div>
        </div>
        <div class="well1">

            <a href="<?php echo U('admin/recruit/add');?>" style="color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;添加招聘信息</a>
            <div class="well-content" style="margin-top: 1%;">

                <table class="result-tab" width="100%">
                    <thead>
                    <tr>

                        <th width="10%">ID</th>
                        <th width="20%">职位名称</th>
                        <th width="20%">职位类别</th>
                        <th width="20%">工作地点</th>

                        <th width="15%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($result)): $k = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($k % 2 );++$k;?><tr>
                            <td><?php echo ($k); ?></td>
                            <td><?php echo ($data["name"]); ?></td>
                            <td><?php echo ($data["type"]); ?></td>
                            <td><?php echo ($data["place"]); ?></td>
                            <!--<td><?php echo (mb_substr($data["introduce"],0,10,'utf-8')); ?>......</td>-->
                            <!--<td><?php echo (mb_substr($data["require"],0,10,'utf-8')); ?>......</td>-->

                            <td>
                                <a class="btn" href="/index.php/admin/recruit/manage/id/<?php echo ($data["stationid"]); ?>" title="修改">修改</a>
                                <a class="btn" href="/index.php/admin/recruit/del/id/<?php echo ($data["stationid"]); ?>" title="删除">删除</a>
                                <a class="btn" href="/index.php/admin/recruit/show/id/<?php echo ($data["stationid"]); ?>" title="查看">查看</a>
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