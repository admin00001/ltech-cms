<?php if (!defined('THINK_PATH')) exit(); $webConfig = D("Basic")->get_basic_config('basic_config'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="google-site-verification" content="Ap3aAbK3WYZe77RFgYACzXWARoz37rST9HfbsqfB7-w"/>
    <meta charset="utf-8">
    <title><?php echo ($webConfig["name"]); ?></title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo ($webConfig["description"]); ?>">
    <meta name="keywords" content="<?php echo ($webConfig["keywords"]); ?>">

    <link rel="icon" href="/favicon.ico">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/font-awesome.css" rel="stylesheet">
    <!--banner插件css-->
    <link href="/Public/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet">
    <link href="/Public/owl.carousel.2.0.0-beta.2.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--自定义的CSS，一定要放在bootstrap后面-->
    <link href="/Public/css/common.css" rel="stylesheet">
    <style>

        /*首页banner*/
        .banner-container {
            max-width: 100%;
        }

        .banner-container .banner {
            max-height: 550px;
            overflow: hidden;
        }

        /*首页中间五图和底部四个栏目的阴影、缩放动画*/
        .advcontainer > .adv-left-box > .adv-item img,
        .advcontainer > .adv-right-box img,
        .bottom-container > .item-container > .item-wrapper > .item {
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.1);
            transition: all 500ms;

        }
        .advcontainer > .adv-left-box > .adv-item img:hover,
        .advcontainer > .adv-left-box > .adv-item img:active,
        .advcontainer > .adv-left-box > .adv-item img:focus,
        .advcontainer > .adv-right-box img:hover,
        .advcontainer > .adv-right-box img:active,
        .advcontainer > .adv-right-box img:focus,
        .bottom-container > .item-container > .item-wrapper > .item:hover,
        .bottom-container > .item-container > .item-wrapper > .item:active,
        .bottom-container > .item-container > .item-wrapper > .item:focus {
            -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
            -o-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
            -ms-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
            box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
            transform: scale(1.02);
        }

        /*调字体行距*/
        .advcontainer > .adv-left-box > .adv-item figcaption p {
            margin-bottom: 5px;
        }

        .advcontainer > .adv-right-box > figcaption p {
            margin-bottom: 8px;
        }

        /*多行溢出显示省略号*/
        .advcontainer > .adv-left-box > .adv-item > figcaption p.title {
            height: 20px;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            font-weight: bold;
        }

        .advcontainer > .adv-left-box > .adv-item > figcaption p.description {
            display: -webkit-box;
            word-break: normal;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            max-height: 40px;
            line-height: 1.2;
            overflow: hidden;
        }

        /*首页5个图片容器*/
        .advcontainer {
            width: 1170px;
            padding-bottom: 35px;
            padding-top: 20px;

        }

        /*左边盒子*/
        .advcontainer > .adv-left-box {
            float: left;
            width: 640px;
        }

        .advcontainer > .adv-left-box > .adv-item {
            float: left;
            position: relative;
            width: 300px;
            margin: 0 20px 20px 0;
        }

        .advcontainer > .adv-left-box > .adv-item figcaption {
            position: absolute;
            left: 20px;
            right: 20px;
            bottom: 10%;
        }

        /*右边盒子*/
        .advcontainer > .adv-right-box {
            float: left;
            position: relative;
            width: 510px;
            background-color: transparent;
        }

        .advcontainer > .adv-right-box figcaption {
            position: absolute;
            left: 20px;
            bottom: 20%;
            right: 20px;
        }

        .advcontainer > .adv-right-box figcaption p.title {
            color: #c4a03f;
            font-weight: bold;
            font-size: 20px;
        }

        @media screen and (max-width: 1280px) {
            .advcontainer {
                width: 950px;
            }

            /*左边盒子*/
            .advcontainer > .adv-left-box {
                width: 530px;
            }

            .advcontainer > .adv-left-box > .adv-item {
                width: 245px;
            }

            .advcontainer > .adv-left-box > .adv-item figcaption {
                left: 10px;
                right: 10px;
                bottom: 5%;
            }

            /*右边盒子*/
            .advcontainer > .adv-right-box {
                width: 420px;
            }

            .advcontainer > .adv-right-box figcaption {
                left: 10px;
                right: 10px;
            }

        }

        @media screen and (max-width: 991px) {
            .advcontainer {
                width: 760px;
                padding: 20px 20px 10px 20px;
            }

            /*左边盒子*/
            .advcontainer > .adv-left-box {
                width: 400px;
            }

            .advcontainer > .adv-left-box > .adv-item {
                width: 190px;
                margin: 0 10px 10px 0;
            }

            .advcontainer > .adv-left-box > .adv-item figcaption {
                font-size: 12px;
            }

            /*右边盒子*/
            .advcontainer > .adv-right-box {
                width: 320px;
            }

            .advcontainer > .adv-right-box figcaption {
                bottom: 15%;
            }

            .advcontainer > .adv-right-box figcaption p.title {
                font-size: 18px;
            }
        }

        @media screen and (max-width: 767px) {
            .advcontainer {
                width: 100%;
                padding: 20px 0;
            }

            /*左边盒子*/
            .advcontainer > .adv-left-box {
                width: 100%;
                max-width: 510px;
                float: none;
            }

            .advcontainer > .adv-left-box > .adv-item {
                float: left;
                width: 50%;
                padding: 5px;
                margin: 0;
            }

            .advcontainer > .adv-left-box > .adv-item:nth-child(2n+1) {
                padding-left: 10px;
            }

            .advcontainer > .adv-left-box > .adv-item:nth-child(2n) {
                padding-right: 10px;
            }

            .advcontainer > .adv-left-box > .adv-item figcaption p.description {
                display: none;
            }

            /*右边盒子*/
            .advcontainer > .adv-right-box {
                width: 100%;
                max-width: 510px;
                padding: 5px 10px 0 10px;
                float: none;
            }

        }

        /*底部四个栏目容器.item-container*/
        .bottom-container > .item-container {
            width: 100%;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .bottom-container > .item-container > .item-wrapper {
            width: 25%;
            float: left;
            padding-left: 10px;
            padding-right: 10px;
        }
        .item-container > .item-wrapper:first-child{
            padding-left: 0
        }
        .item-container > .item-wrapper:last-child{
            padding-right: 0;
        }


        .item-container > .item-wrapper > .item {
            position: relative;
            width: 100%;
            height: 250px;
            padding: 20px;
            font-size: 0;
            background-color: #fafafa;
        }
        .item-container > .item-wrapper > .catalogue-item {
            padding: 0 !important;
            background: url('/Public/img/home/catalogue.jpg') no-repeat center;
            background-size: cover;
        }

        .item-container > .item-wrapper > .catalogue-item .catalogue-img {
            opacity: 0;
            filter: alpha(opacity=0);
            -moz-opacity: 0;
            -khtml-opacity: 0;
        }
        .item-container > .item-wrapper > .item > img.new {
            position: absolute;
            left: 0;
            top: 0;
        }
        .item-container > .item-wrapper > .item > .img-box,
        .item-container > .item-wrapper > .item > .content {
            display: inline-block;
            width: 50%;
            vertical-align: top;
            font-size: 14px;
        }
        .item-container > .item-wrapper > .item > .img-box{
            padding-right: 7px;
            max-height: 200px;
            overflow: hidden;
        }
        .item-container > .item-wrapper > .item > .content {
            position: relative;
            height: 200px;
            padding-left: 7px;

        }

        .item-container > .item-wrapper > .item > .content >.title {
            font-size: 20px;
            font-weight: bold;
            line-height: 1.1;
            margin-top: 0;
            margin-bottom: 20px;
        }

        .item-container > .item-wrapper > .item > .content .name {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            max-height: 34px;
            margin-bottom: 10px;
            overflow: hidden;
            color: #fa1d1d;
            font-weight: bold;
            font-size: 12px;
        }

        .item-container > .item-wrapper > .item > .content .description {
            font-size: 12px;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            max-height: 51px;
            overflow: hidden;
        }

        .item-container > .item-wrapper > .item > .content .date {
            font-size: 12px;
            font-weight: bold;
        }

        .item-container > .item-wrapper > .item > .content > a.btn {
            position: absolute;
            display: block;
            left: 7px;
            bottom: 0;
            width: 130px;
            padding: 2px 4px;
            font-size: 12px;
            color: #646464;
            border: 1px solid #ed2424;
            border-radius: 0;
            outline: none;
            background-color: #fff;
            text-align: center;
        }
        .item-container > .item-wrapper > .item > .content > a.btn:hover,
        .item-container > .item-wrapper > .item > .content > a.btn:active,
        .item-container > .item-wrapper > .item > .content > a.btn:focus {
            background-color: #ed2424;
            color: #fff;
        }


        @media screen and (max-width: 1280px) {
            .bottom-container > .item-container {
                width: 970px;
                padding-bottom: 0;
            }
            .bottom-container > .item-container > .item-wrapper {
                width: 50%;
                margin-bottom: 20px;
            }
            .item-container > .item-wrapper:first-child{
                padding-left: 10px;
            }
            .item-container > .item-wrapper:last-child{
                padding-right: 10px;
            }

        }
        @media screen and (max-width: 991px) {
            .bottom-container > .item-container {
                width: 740px;
            }
            .item-container > .item-wrapper > .item {
                height: auto;
            }

            .item-container > .item-wrapper > .item > .img-box{
                padding-right: 5px;
            }
            .item-container > .item-wrapper > .item > .content {
                height: 150px;
            }
            .item-container > .item-wrapper > .item > .content >.title{
                margin-bottom: 10px;
                font-size: 16px;
            }

            .bottom-container>.bottom-info>.container>.row{
                margin-left: 0;
            }
        }

        @media screen and (max-width: 767px) {
            .bottom-container > .item-container {
                width: 100%;
            }
            .bottom-container > .item-container > .item-wrapper {
                float: none;
                width: 100%;
                max-width: 510px;
                margin: 0 auto 20px;
            }
            .item-container > .item-wrapper > .item > .content {
                height: 155px;
            }

            .bottom-container>.bottom-info>.container>.row{
                margin-left: -10px;
            }

        }

    </style>
</head>
<body>
<?php
$nav = D("Menu")->getHomeNav(); $productsType = D("ProductsType")->getType(); ?>
<!--[if lt IE 9]>
<div class="container">
    <p style="color:#e50012; margin: 50px auto">You are using an outdated internet browser which may cause some website content to display incorrectly.
        To improve your browsing experience and to increase your browsing security it is recommended to install one of
        <a href="http://browsehappy.com/?locale=en" target="_blank">the latest browsers</a>.
    </p>
</div>
<![endif]-->
<nav class="navbar navbar-default navbar-fixed-top m-b-0" style="box-shadow: 0 2px 7px rgba(100,100,100,.5);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img width="117" height="40" src="/logo.png" alt="logo" /></a>
        </div>
        <div class="collapse navbar-collapse pull-right nav-p-r-0" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">

                <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='<?php if(($vo["name"] == 'Products') OR ($vo["name"] == 'About us')): ?>dropdown<?php endif; ?>'>
                    <a href="<?php echo (getHomeNavUrl($vo)); ?>" title="<?php echo ($vo["name"]); ?>" class='<?php if(($vo["name"] == 'Products') OR ($vo["name"] == 'About us')): ?>dropdown-toggle<?php endif; ?> <?php if($active == $vo[name]): ?>active<?php endif; ?>' <?php if(($vo["name"] == 'Products') OR ($vo["name"] == 'About us')): ?>data-toggle="dropdown"<?php endif; ?> >
                    <?php echo ($vo["name"]); ?>
                    <?php if(($vo["name"] == 'Products') OR ($vo["name"] == 'About us')): ?><b class="caret"></b><?php endif; ?>

                    </a>
                    <?php if($vo["name"] == 'Products'): ?><ul class="dropdown-menu">
                            <?php if(is_array($productsType)): $i = 0; $__LIST__ = $productsType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Products/type','id='.$vo[id]);?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                        </ul><?php endif; ?>
                    <?php if($vo["name"] == 'About us'): ?><ul class='dropdown-menu'>
                            <li><a href="<?php echo U('News/index');?>">News</a></li>
                            <li><a href="<?php echo U('Projects/index');?>">Projects</a></li>
                        </ul><?php endif; ?>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>

            </ul>
            <form class="navbar-form nav-form-responsive nav-p-r-0" role="search" style="margin-top: 16px;"
                  method="post">
                <div class="input-group">
                    <input type="text" id="keyword" class="form-control input-sm" maxlength="88"
                           placeholder="Search Products...">
                    <span class="input-group-btn">
                        <button type="button" id="searchBtn" class="btn btn-sm btn-submit ">
                            <i class="fa fa-search "></i>
                        </button>
                    </span>
                </div>
            </form>

        </div>
    </div>
</nav>
<section style="max-width: 500px; margin: 100px auto;  text-align: center;">
    <h1>Sorry,404~  </h1>
    <h3>System error：<?php echo ($message); ?> </h3>
    <p >After <span id="time" style="color:red;margin-top: 20px;">10</span> seconds return to<a href="/"> Home</a></p>
</section>
<script>
    var time = document.getElementById("time");
    var id;
    id = setInterval("daojishi()",1000);
    function daojishi(){
        var html = time.innerHTML;
        if(html == 0){
            window.location.href="/index.html";
            clearInterval(id);
            return false;
        }else {
            html--;
            time.innerHTML = html;
        }
    }
</script>
</body>
</html>