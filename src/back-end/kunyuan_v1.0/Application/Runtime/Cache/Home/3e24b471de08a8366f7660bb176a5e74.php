<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"  href="/Public/bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">
    <script type="text/javascript" src="/Public/bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container col-md-12">

    <div class="row">
        <div>
            <nav class="navbar navbar-default-me navbar-fixed-top    " role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.html">坤源</a>
                        <p class="navbar-text">——科技改变生活</p>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav    ">
                        <li class="">
                            <a href="/home/index/index">首页</a>
                        </li>
                        <li>
                            <a href="/home/company/index">公司简介</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">产品中心<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/ProTechnology/index" style="color:#fff">产品技术</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index" style="color:#fff">产品展示</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index"style="color:#fff">销售范围</a>
                                </li>
                                <li>
                                    <a href="/home/ProTechnology/index"style="color:#fff">样品寄送</a>
                                </li>



                            </ul>

                        </li>
                        <li>
                            <a href="/home/news/index">新闻中心</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">环境与社会   <strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/ES/index" style="color:#fff">社会需求</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index"style="color:#fff">政策支持</a>
                                </li>
                                <li>
                                    <a href="/home/ES/index"style="color:#fff">燃料地域限制</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">职业中心<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/career/index"style="color:#fff">人才理念</a>
                                </li>
                                <li>
                                    <a href="/home/career/index"style="color:#fff">岗位招聘</a>
                                </li>


                            </ul>

                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">联系我们<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/home/contactus/index" style="color:#fff">联系方式</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index"style="color:#fff">加入我们</a>
                                </li>
                                <li>
                                    <a href="/home/contactus/index"style="color:#fff">客户留言</a>
                                </li>

                            </ul>

                        </li>

                    </ul>



                    <form action="#" class="navbar-form navbar-right   ">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="请输入关键词" />
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>

                </div>

            </nav>
        </div>
    </div>

    <div class="container col-md-12">
        <div>
            <div class="carousel slide" >

                <div class="carousel-inner">
                    <div class="item active" >
                        <img  src="/Public/images/company/5_u286.jpg" width="100%" />
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix" style="margin:0px">
            <div>


            </div>
        </div>
    </div>
</div>


<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/Public/css/index.css">

    <link href="/Public/css/newscontent.css" type="text/css" rel="stylesheet">

    <title>新闻列表页</title>
    <style type="text/css">

        @media(max-width:767px){

            .date{
                display:none;
            }

        }</style>
</head>
<div class="row clearfix" style="margin:0px">
    <div>

        <ul class="breadcrumb ">

            <li>
                您所在的位置:
                <a href="index.html">首页</a>
            </li>

            <li class="active">

                新闻中心
            </li>

        </ul>
    </div>
</div>
<div class="container">

    <div class="col-md-11 col-xs-12 text-center">
        <div class="big">
            <img src="/Public/images/newslist/u321.png" class="kuny-up">
            新闻中心
            <img src="/Public/images/newslist/u321.png" class="kuny-up">
        </div>
        <p style="font-family:Blackadder ITC Normal, Blackadder ITC;font-size:19px">kunyuan</p>


    <!--第一部分，内容标题+下划线+产品标题-->
    <div class="row nc_first_top"></div>
    <div class="row nc_first">
        <div class="col-md-8 nc_first_left">

            <div class="row">

                <div class="row-fluid">

                    <div class="row " >
                        <div class="date col-md-2 text-center" style="-webkit-background-size: ;background-image: url(/Public/images/newslist/u1252.png);background-repeat: no-repeat;width:15%;
                                        margin-top:30px">
                                            <span ><p style="font-family: 'Arial Normal', 'Arial';font-weight:bold;font-style:normal;font-size:20pt;text-align: left;margin-bottom: 0px;
                                            margin-left:18px;
        ">17</p></span>
                            <span ><p style="font-family: 'Arial Normal', 'Arial';
        font-weight: bold;
        font-style: normal;
        font-size: 18pt;
         text-align: left;
         margin-left:10px;
       ">NOV</p></span>
                        </div>
                        <div class="col-md-10">
                                            <span>
                                            <h3>
                                        <a href="/home/newscontent/index" style="font-family: '黑体';
        font-weight: 700;
        font-style: normal;
        font-size: 20pt;">生物质木屑颗粒机不受区域限制更适合国情</a>
                                        </h3></span>
                            <span>
                                            <p style="display: inline ;font-family: '黑体';">来源：</p><p style="display: inline;font-family: '黑体';">网络&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                            <p style="display: inline;text-align: right;font-family: '黑体';">发布时间:&nbsp;&nbsp;</p><p style="display: inline;font-family: '黑体';">2016-11-14 14:36</p>
                                        </span>
                            <hr style=" height:2px;border:none;border-top:1px solid #000;" />
                        </div>

                    </div>


                </div>
                <div class="row-fluid">
                    <div class="col-md-5">
                        <img alt="140x140" height="200px"  width="300px" src="/Public/images/newslist/u1264.jpg" />
                        <p style="margin-top:13px;margin-left:90px">
                            <img src="/Public/images/newslist/u1274.png" height="18" width="18" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">查看原文</a></p>
                    </div>
                    <div class="col-md-2 col-sm-0"></div>
                    <div class="col-md-5 col-sm-12" style="margin-left:0px">
                        <a href="#" style="text-decoration: none"><p style="font-family: '黑体';
        font-style: normal; font-size:17px">
                            &nbsp;&nbsp;&nbsp;我国能够形成风电场只有20万平方公里，主要集中在北部地区，仅内蒙古就占了一半左右的资源，而太阳能则主要集中在青藏高原。根据实际情况看，我国东部、南部、中部都没有形成太阳能、风能大规模运营的客观条件，而生物质能则可以在全国进行分散式布局。

                            相对于需要利用一次能源,加工成二次能源后才能发挥功效的太阳能、风能等新能源我国生物质能研发已在“非粮”技术路径取得了多个领域的突破产业
                        </p></a>
                    </div>
                </div></div>
            <div class="row">
                <div class="row-fluid">

                    <div class="row " >
                        <div class="date col-md-2 text-center" style="-webkit-background-size: ;background-image: url(/Public/images/newslist/u1252.png);background-repeat: no-repeat;width:15%;
                                        margin-top:30px">
                                            <span ><p style="font-family: 'Arial Normal', 'Arial';font-weight:bold;font-style:normal;font-size:20pt;text-align: left;margin-bottom: 0px;
                                            margin-left:18px;
        ">17</p></span>
                            <span ><p style="font-family: 'Arial Normal', 'Arial';
        font-weight: bold;
        font-style: normal;
        font-size: 18pt;
         text-align: left;
         margin-left:10px;
       ">NOV</p></span>
                        </div>
                        <div class="col-md-10">
                                            <span>
                                            <h3>
                                        <a href="/home/newscontent/index" style="font-family: '黑体';
        font-weight: 700;
        font-style: normal;
        font-size: 20pt;">生物质木屑颗粒机不受区域限制更适合国情</a>
                                        </h3></span>
                            <span>
                                            <p style="display: inline ;font-family: '黑体';">来源：</p><p style="display: inline;font-family: '黑体';">网络&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                            <p style="display: inline;text-align: right;font-family: '黑体';">发布时间:&nbsp;&nbsp;</p><p style="display: inline;font-family: '黑体';">2016-11-14 14:36</p>
                                        </span>
                            <hr style=" height:2px;border:none;border-top:1px solid #000;" />
                        </div>

                    </div>


                </div>
                <div class="row-fluid">
                    <div class="col-md-5">
                        <img alt="140x140" height="200px"  width="300px" src="/Public/images/newslist/u1264.jpg" />
                        <p style="margin-top:13px;margin-left:90px">
                            <img src="/Public/images/newslist/u1274.png" height="18" width="18" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">查看原文</a></p>
                    </div>
                    <div class="col-md-2 col-sm-0"></div>
                    <div class="col-md-5 col-sm-12" style="margin-left:0px">
                        <a href="#" style="text-decoration: none"><p style="font-family: '黑体';
        font-style: normal; font-size:17px">
                            &nbsp;&nbsp;&nbsp;我国能够形成风电场只有20万平方公里，主要集中在北部地区，仅内蒙古就占了一半左右的资源，而太阳能则主要集中在青藏高原。根据实际情况看，我国东部、南部、中部都没有形成太阳能、风能大规模运营的客观条件，而生物质能则可以在全国进行分散式布局。

                            相对于需要利用一次能源,加工成二次能源后才能发挥功效的太阳能、风能等新能源我国生物质能研发已在“非粮”技术路径取得了多个领域的突破产业
                        </p></a>
                    </div>
                </div></div>
            <div class="row">
                <div class="row-fluid">

                    <div class="row " >
                        <div class="date col-md-2 text-center" style="-webkit-background-size: ;background-image: url(/Public/images/newslist/u1252.png);background-repeat: no-repeat;width:15%;
                                        margin-top:30px">
                                            <span ><p style="font-family: 'Arial Normal', 'Arial';font-weight:bold;font-style:normal;font-size:20pt;text-align: left;margin-bottom: 0px;
                                            margin-left:18px;
        ">17</p></span>
                            <span ><p style="font-family: 'Arial Normal', 'Arial';
        font-weight: bold;
        font-style: normal;
        font-size: 18pt;
         text-align: left;
         margin-left:10px;
       ">NOV</p></span>
                        </div>
                        <div class="col-md-10">
                                            <span>
                                            <h3>
                                        <a href="/home/newscontent/index" style="font-family: '黑体';
        font-weight: 700;
        font-style: normal;
        font-size: 20pt;">生物质木屑颗粒机不受区域限制更适合国情</a>
                                        </h3></span>
                            <span>
                                            <p style="display: inline ;font-family: '黑体';">来源：</p><p style="display: inline;font-family: '黑体';">网络&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                            <p style="display: inline;text-align: right;font-family: '黑体';">发布时间:&nbsp;&nbsp;</p><p style="display: inline;font-family: '黑体';">2016-11-14 14:36</p>
                                        </span>
                            <hr style=" height:2px;border:none;border-top:1px solid #000;" />
                        </div>

                    </div>


                </div>
                <div class="row-fluid">
                    <div class="col-md-5">
                        <img alt="140x140" height="200px"  width="300px" src="/Public/images/newslist/u1264.jpg" />
                        <p style="margin-top:13px;margin-left:90px">
                            <img src="/Public/images/newslist/u1274.png" height="18" width="18" alt="">&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="#">查看原文</a></p>
                    </div>
                    <div class="col-md-2 col-sm-0"></div>
                    <div class="col-md-5 col-sm-12" style="margin-left:0px">
                        <a href="#" style="text-decoration: none"><p style="font-family: '黑体';
        font-style: normal; font-size:17px">
                            &nbsp;&nbsp;&nbsp;我国能够形成风电场只有20万平方公里，主要集中在北部地区，仅内蒙古就占了一半左右的资源，而太阳能则主要集中在青藏高原。根据实际情况看，我国东部、南部、中部都没有形成太阳能、风能大规模运营的客观条件，而生物质能则可以在全国进行分散式布局。

                            相对于需要利用一次能源,加工成二次能源后才能发挥功效的太阳能、风能等新能源我国生物质能研发已在“非粮”技术路径取得了多个领域的突破产业
                        </p></a>
                    </div>
                </div></div>
            <div class="row-fluid">
                <div class="row-fluid" style="text-align: right">
                    <div class="col-md-12 ">
                        <ul class="pagination" >
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>

                <!--第三部分结束-->
            </div>
        </div>

        <div class="col-md-1 col-md-push-1 no_first_center hidden-xs"><img src="/Public/images/newscontent/u1690.png"></div>
        <div class="col-md-2 col-md-push-0 no_first_right">
            <div class="row product_title">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-7  col-xs-8 product_title_first">产品展示--</div>
                <div class="col-md-2 col-md-pull-1 col-xs-2 col-xs-pull-5 product_title_second">kunyuan</div>
            </div>
            <div class="row">&nbsp</div>
            <div class="row right_first_hr">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-8  right_hr_p"><img src="/Public/images/newscontent/u71.png">
                </div>
            </div>
            <div class="row">&nbsp</div>
            <!--第四部分开始-->
            <div class="row right_first_img">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-4  col-xs-4 right_first_img_first"><a href="#"><img  src="/Public/images/newscontent/u1423.jpg"></a></div>
                <div class="col-md-4 col-md-push-6 col-xs-4 col-xs-push-1"><a href="#"><img  src="/Public/images/newscontent/u1425.jpg"></a></div>
            </div>
            <div class="row right_first_word">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-xs-4  col-md-4 col-md-push-1 right_first_word_first">
                    <div class="row">&nbsp</div>
                    <a href="#">硬杂木生物质材料</a>
                </div>
                <div class="col-xs-4 col-xs-push-1 col-md-push-7 right_first_word_second">
                    <div class="row">&nbsp</div>
                    <a href="#">硬杂木生物质材料</a>
                </div>
            </div>
            <div class="row right_first_img_second">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-4 col-xs-4 right_first_img_first"><a href="#"><img  src="/Public/images/newscontent/u1427.jpg"></a></div>
                <div class="col-md-4 col-md-push-6 col-xs-4 col-xs-push-1"><a href="#"><img  src="/Public/images/newscontent/u345.jpg"></a></div>
            </div>
            <div class="row right_first_word">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-xs-4 col-md-4 col-md-push-1 right_first_word_first">
                    <div class="row">&nbsp</div>
                    <a href="#">硬杂木生物质材料</a></div>
                <div class="col-xs-4 col-xs-push-1 col-md-push-7 right_first_word_second">
                    <div class="row">&nbsp</div>
                    <a href="#">硬杂木生物质材料</a></div>
            </div>
            <!--第四部分结束-->
            <!--第五部分开始-->
            <div class="row">&nbsp</div>
            <div class="row news_push_title">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-5  col-xs-8 news_push_title_first">新闻推荐</div>
                <div class="col-md-3 col-md-push-7 col-xs-3 col-xs-pull-2  news_push_title_more"><a href="#">more</a></div>
            </div>
            <div class="row right_first_hr">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-9  right_hr_p"><img src="/Public/images/newscontent/u71.png">
                </div>
            </div>

            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8">
                <a href="#">》李德金批示：学习习近平新闻...</a>
            </div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》龙岩召开学习习近平新闻舆论...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》坚持龙岩自信，为龙岩创新创...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》《邓子辉》展览昨日开展创历...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》去年腰包最鼓的是新罗市人民...</a></div></div>
            <!--第五部分结束-->
            <!--第六部分开始-->
            <div class="row">&nbsp</div>
            <div class="row news_push_title">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-5  col-xs-8 news_push_title_first">热点新闻</div>
                <div class="col-md-3 col-md-push-7 col-xs-3 col-xs-pull-2 news_push_title_more"><a href="#">more</a></div>
            </div>
            <div class="row right_first_hr">
                <div class="col-md-3 col-xs-1">&nbsp</div>
                <div class="col-md-9 right_hr_p"><img src="/Public/images/newscontent/u71.png">
                </div>
            </div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》李德金批示：学习习近平新闻...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》龙岩召开学习习近平新闻舆论...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》坚持龙岩自信，为龙岩创新创...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》《邓子辉》展览昨日开展创历...</a></div></div>
            <div class="row news_push_content"><div class="col-md-3 col-xs-1">&nbsp</div><div class="col-md-8"><a href="#">》去年腰包最鼓的是新罗市人民...</a></div></div>
            <!--第六部分结束-->
        </div>
    </div>
    <!--第一部分结束-->
</div>
<div class="row-md-1">&nbsp;</br></br></div>

<div class="container col-md-12">
    <div class="row clearfix footer-color">
        <div class="col-md-1 column">
        </div>
        <div class="col-md-10 column">
            <div class="row clearfix">

                <div class="col-md-3 column">
                    <h3 >
                        公司宗旨
                    </h3>
                    <br/>
                    <div>
                        <p>

                            生物质颗粒燃料是大自然恩赐于我们的可再生的能源，它是响应中央号召，创造节约性社会。地球是我家，环保靠大家面对渐渐恶化的环境，面对渐渐加重的雾霾，让我们行动起来吧！！！


                        </p>
                    </div>
                </div>
                <div class="col-md-1 text-cennter crave">
                    <img style="padding-top:55px;margin-left:40px" class="img-responsive " src="/Public/images/index/u165.png" alt="" height="100px">

                </div>
                <div class="col-md-3 column">
                    <h3 >
                        相关链接
                    </h3>
                    <br/>
                    <div class="text-center">
                        <ul class="list-unstyled">
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>
                            <li>
                                <a href="#">————生物质燃料百度百科</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <div class="col-md-1 crave">
                    <img style="padding-top:55px;margin-left:30px"class="img-responsive img-rounded" src="/Public/images/index/u165.png" alt="" >
                </div>
                <div class="col-md-3 column ">
                    <h3 >
                        联系我们
                    </h3>

                    <br/>
                    <div class="col-md-4 col-xs-4">
                        <img style="margin-left:10px"class="img-responsive "src="/Public/images/index/rotateimage_u122.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:10px" class="img-responsive "src="/Public/images/index/u126_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:4px;margin-left:10px" class="img-responsive "src="/Public/images/index/u128_mouseOver.png" alt="">
                    </div >

                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:15px;"class="img-responsive "src="/Public/images/index/u134_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <img style="padding-top:8px;margin-left:10px" class="img-responsive "src="/Public/images/index/u130_mouseOver.png" alt="">
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <a href="#" class="bind_hover_card" data-toggle="popover" data-placement="bottom" data-trigger="hover">
                            <img style="padding-top:14px;margin-left:6px" class="img-responsive "src="/Public/images/index/u132_mouseOver.png" alt="">
                        </a>
                    </div>



                </div>
            </div>
        </div>
        <div class="col-md-1 column">
        </div>
    </div>
</div>
</body>

</html>