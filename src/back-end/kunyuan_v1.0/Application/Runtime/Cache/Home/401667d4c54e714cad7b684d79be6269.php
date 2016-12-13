<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>导航栏V2.0</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/Public//self/navigation.css" type="text/css" rel="stylesheet">
    <link href="/Public//bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/Public//bootstrap/js/jquery.js"></script>
    <script src="/Public//bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="jumbotron navigation_bg">
       <div class="nav">
            <div class="container">
               <!--logo+导航栏--->
                <div class="row">
                    <div class="col-md-2 col-xs-2 navbar_logo_first">坤源</div>
                    <div class="col-md-2 col-xs-2 col-md-pull-2 navbar_logo_second">——生物科技有限公司</div>
                    <div class="col-md-1 nav_word_fist_first">
                            <div class="row nav_word_fist_second">
                                <a href="#"><div class="col-md-4 nav_word_first_third">首</div>
                                <div class="col-md-4 col-md-offset-1 ">页 </div></a>
                            </div>
                    </div>
                    <div class="col-md-1 nav_word_second_first">
                        <div class="row nav_word_second_second">
                            <div class="col-md-12 nav_word_second_third"><a href="#">公司简介</a></div>
                        </div>
                    </div>
                    <div class="col-md-1 nav_word_third_first">
                        <div class="row nav_word_second_second">
                            <div class="col-md-12 nav_word_second_third"><a href="#">产品中心</a></div>
                        </div>
                    </div>
                    <div class="col-md-1 nav_word_third_first">
                        <div class="row nav_word_second_second">
                            <div class="col-md-12 nav_word_second_third"><a href="#">新闻中心</a></div>
                        </div>
                    </div>
                    <div class="col-md-2 nav_word_fifth_first">
                        <div class="row nav_word_fifth_second">
                            <div class="col-md-12 nav_word_fifth_third"><a href="#">环境与社会</a></div>
                        </div>
                    </div>
                    <div class="col-md-1 nav_word_sixth_first">
                        <div class="row nav_word_second_second">
                            <div class="col-md-12 nav_word_second_third"><a href="#">职业中心</a></div>
                        </div>
                    </div>
                    <div class="col-md-1 nav_word_third_first">
                        <div class="row nav_word_second_second">
                            <div class="col-md-12 nav_word_second_third"><a href="#">联系我们</a></div>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="row">
                                 <div id="search-wrap">
                                     <div class="col-md-8 nav_word_second_third">
                                         <input class="search-content"  type="text" placeholder="输入搜索内容" name="word">
                                     </div>
                                     <div class="col-md-2 col-md-pull-1 serach_second_div">
                                         <button class="search-btn" type="submit">搜索</button>
                                     </div>
                                 </div>
                        </div>
                    </div>
                </div>
                <!--导航栏结束-->
            </div>
       </div>
    </div>
    <!--面包屑开始-->
    <div class="crumbs">
        <div class="container">
            <div class="row crumbs_div_al">
                <div class="col-md-1 col-md-offset-3 col-md-pull-1"><img src="/Public//images/company/u15.png"></div>
                <div class="col-md-3 col-md-pull-2 crumbs_word_first">您当前的位置：<a href="#">首页 </a>></div>
                <div class="col-md-2 col-md-pull-4 crumbs_word_second">产品中心</div>
            </div>
        </div>
    </div>
    <!---面包屑结束-->

</body>
</html>