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
                <i class="icon-font"></i>首页<span class="crumb-step">&gt;</span><a class="crumb-name" href="/index.php/admin/policy/index">政策管理</a><span class="crumb-step">&gt;</span>修改内容
            </div>
        </div>
    </div>
    <div class="well">
        <form action="<?php echo U('admin/policy/modify');?>" method="post" enctype= "multipart/form-data">
            <table class="insert-tab" width="100%">
                <tbody>
                <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                        <th width="10%">种类：</th>
                        <td>
                            政策
                        </td>
                    </tr>
                    <tr>
                        <th>标题：</th>
                        <td><input class="common-text" name="title" size="50" type="text" value="<?php echo ($data["title"]); ?>"></td>
                    </tr>
                    <tr>
                        <th>内容：</th>
                        <td>
                            <textarea class="common-textarea" name="content" cols="30" style="width: 60%;" rows="5"><?php echo ($data["content"]); ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>当前图片：</th>
                        <th>
                            <div class="modify_img"><img src="/Public/upload/<?php echo ($data["image"]); ?>" width="150" hegiht="100" style="float: left;margin-bottom: 1%;margin-top: 1%;margin-left: 1%;"></div></th>
                    </tr>
                    <tr>
                        <th><i class="require-red">*</i>选择图片：</th>
                        <td><input type="file" name="image" id="image" accept="image/gif, image/jpeg" /></td>
                    </tr>

                    <input class="common-text" name="commonid" size="50" type="hidden" value="<?php echo ($data["commonid"]); ?>">
                    <tr>
                        <th></th>
                        <td>
                            <input class="btn btn-primary btn6 mr10" style="color:#ffffff;" value="修改" type="submit" name="submit">
                            <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody></table>
        </form>
    </div>
    <!-- Content end -->
</div>

</body>
</html>