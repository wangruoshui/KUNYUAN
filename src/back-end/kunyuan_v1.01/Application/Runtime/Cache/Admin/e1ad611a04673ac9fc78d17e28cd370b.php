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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="#">留言管理</a>

            </div>
        </div>
        <div class="well1">

            <a style="margin-bottom: 0%;color:#000;"><i class="icon-font"></i>&nbsp;&nbsp;留言管理</a>
            <div class="well-content" style="margin-top: 2%;">

                <table class="result-tab" style="width: 100%;">
                    <thead>
                    <tr>

                        <th width="5%">ID</th>
                        <th width="5%">姓名</th>
                        <th width="10%">手机号</th>
                        <th width="10%">分类</th>
                        <th width="15%">邮箱</th>

                        <th width="10%">内容</th>
                        <th width="15%">时间</th>
                        <th width="10%">状态</th>
                        <th width="12%">管理操作</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

                            <td><?php echo ($i); ?></td>
                            <td><?php echo ($vo["name"]); ?></td>
                            <td><?php echo ($vo["phone"]); ?></td>

                            <td><?php echo ($vo["title"]); ?></td>
                            <td><?php echo ($vo["email"]); ?></td>
                            <td><?php echo (mb_substr($vo["content"],0,6,'utf-8')); ?>...</td>
                            <td><?php echo ($vo["time"]); ?></td>

                            <?php if($vo["status"] == 0 ): ?><td style="text-align:center;"><button style="color:#FF0033;"  class="status1" href="#" name="<?php echo ($vo["messageid"]); ?>">未回复</button></td>
                                <?php else: ?>
                                <td  style="text-align:center;"><button style="color:#003399;"  class="status2" href="#" name="<?php echo ($vo["messageid"]); ?>">已回复</button></td><?php endif; ?>
                            <?php if($roleid == 1 ): ?><td>

                                    <a class="btn" href="/index.php/admin/message/del/id/<?php echo ($vo["messageid"]); ?>" title="删除">删除</a>
                                    <a class="btn" href="/index.php/admin/message/show/id/<?php echo ($vo["messageid"]); ?>" title="查看">查看</a>
                                </td>
                                <?php else: ?>
                                <td>

                                    <a class="btn" href="/index.php/admin/message/show/id/<?php echo ($vo["messageid"]); ?>" title="查看">查看</a>
                                </td><?php endif; ?>



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

<script src="/Public/admin/js/jquery.min.js">
</script>
<script>
    $(document).ready(function(){
        $(".status1").click(function(){
            var id=$(this).attr('name');
            $(this).addClass("status2").removeClass("status1");
            $.post("<?php echo U('/admin/message/manage1');?>",
                    {
                        id:id
                    },
                    function(){
                        alert('是否确认修改！');
                        $(".status2").css("color","#003399");
                        $(".status2").text('已回复');

                    });

        });

    });
</script>
</body>
</html>