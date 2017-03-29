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
<!-- banner -->
<div class="banner-container">
    <div class="owl-carousel">
        <?php if(is_array($banners)): foreach($banners as $key=>$vo): ?><div class="img-responsive center-block banner">
                <a href="<?php echo U('Products/index');?>" title='products'>
                    <picture>

                        <source srcset="<?php echo ($vo["img_lg"]); ?>" media="(min-width:1200px)" class="img-responsive"></source>
                        <source srcset="<?php echo ($vo["img_md"]); ?>" media="(min-width:800px)" class="img-responsive"></source>
                        <source srcset="<?php echo ($vo["img_sm"]); ?>" media="(min-width:480px)" class="img-responsive"></source>
                        <img src="<?php echo ($vo["img_xs"]); ?>" alt="" class="img-responsive">

                    </picture>
                </a>
            </div><?php endforeach; endif; ?>
    </div>
</div>
<!--中间五图-->
<div class='container-fluid' style="background-color: #fafafa;">
    <div class="row">
        <!--中间五图 容器-->
        <div class='advcontainer center-block clearfix'>
            <!--左边4个盒子-->
            <div class="adv-left-box center-block clearfix" >
                <?php if(is_array($advs)): $k = 0; $__LIST__ = array_slice($advs,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adv): $mod = ($k % 2 );++$k;?><div class="adv-item center-block ">
                        <a  <?php if($k == 1): ?>href="<?php echo U('products/index');?>"<?php else: ?> href="<?php echo U('products/type','id='.$adv[type]);?>"<?php endif; ?> title="<?php echo ($adv["title"]); ?>" ><img class="box-shadow img-responsive" src='<?php echo ($adv["thumb"]); ?>' alt='<?php echo ($adv["name"]); ?>'></a>
                        <figcaption>
                            <p class='text-uppercase text-center title' style="color:<?php echo ($adv["title_color"]); ?>"><?php echo ($adv["title"]); ?></p>
                            <p class=' text-center description' style="color:<?php echo ($adv["description_color"]); ?>"><?php echo ($adv["description"]); ?></p>
                        </figcaption>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
            <!--右边1个盒子-->
            <div class="adv-right-box center-block  ">
                <a href="<?php echo U('products/type','id='.$advs[4][type]);?>"  title="<?php echo ($advs[4]["title"]); ?>"><img class='img-responsive center-block box-shadow ' src="<?php echo ($advs[4]['thumb']); ?>" alt="<?php echo ($advs[4]['name']); ?> <?php echo ($advs[4]['title']); ?>"></a>
                <figcaption>
                    <p class='text-uppercase text-center title' style="color:<?php echo ($advs[4]["title_color"]); ?>"><?php echo ($advs[4]["title"]); ?></p>
                    <p class='text-center description' style="color:<?php echo ($advs[4]["description_color"]); ?>"><?php echo ($advs[4]["description"]); ?></p>
                </figcaption>
            </div>
        </div>
    </div>

</div>

<!--底部背景容器-->
<div class="bottom-container">
    <!--四个栏目容器-->
    <div class="item-container center-block clearfix">
        <div class="item-wrapper">
            <!--news栏目-->
            <div class="item ">
                <div class="img-box">
                    <a href="<?php echo U('News/detail?id='.$news[0][news_id]);?>" title="<?php echo ($news[0]["title"]); ?>"><img class="img-responsive" src="<?php echo ($news[0]["thumb"]); ?>" alt="<?php echo ($news[0]["title"]); ?>"></a>
                </div>
                <div class="content">
                    <h2 class="title">NEWS</h2>
                    <p class="description"><?php echo ($news[0]["description"]); ?></p>
                    <span class="date"><?php echo (date("Y-m-d",$news[0]["create_time"])); ?></span>
                    <a href="<?php echo U('News/index');?>" target="_blank" class="btn " title="news">MORE NEWS >></a>
                </div>

            </div>
        </div>
        <div class="item-wrapper">
            <!--NEW产品推荐-->
            <div class="item">
                <img class="new" src="/Public/img/home/new.png" alt="new">
                <div class="img-box">
                    <!--<a href="<?php echo U('Products/product?id='.$new[products_id]);?>" title="<?php echo ($new["name"]); ?>"><img class="img-responsive" src="<?php echo ($new["thumb"]); ?>" alt="<?php echo ($new["name"]); ?>"></a>-->
                    <a href="/Products/linear_lights.html" title="linear-lights">
                        <img class="img-responsive" src="<?php echo ($new["thumb"]); ?>" alt="<?php echo ($new["name"]); ?>">
                    </a>
                </div>
                <div class="content">
                    <h2 class="title">LATEST</h2>
                    <a href="<?php echo U('Products/type?id='.$new[type]);?>" title="<?php echo (getTypeName( $productsType,$new["type"])); ?>"><span class ="name" ><?php echo (getTypeName( $productsType,$new["type"])); ?></span></a>
                    <!--<p class="description" ><?php echo ($new["name"]); ?></p> -->
                    <p class="description" >L-Linear-Lights</p>
                    <a href="<?php echo U('Products/index');?>" target="_blank" class="btn " title="products">ALL PRODUCTS >></a>
                </div>
            </div>
        </div>


        <div class="item-wrapper">
            <!--projects栏目-->
            <div class="item ">
                <div class="img-box">
                    <a href="<?php echo U('Projects/detail?id='.$projects[0][projects_id]);?>" target="_blank" title="<?php echo ($projects[0]["name"]); ?>">
                        <img class="img-responsive" src="<?php echo ($projects[0]["thumb"]); ?>" alt="<?php echo ($projects[0]["name"]); ?>">
                    </a>
                </div>
                <div class="content">
                    <h2 class="title">PROJECTS</h2>
                    <a href="<?php echo U('Projects/detail?id='.$projects[0][projects_id]);?>" target="_blank" title="<?php echo ($projects[0]["name"]); ?>">
                        <span class="name" ><?php echo ($projects[0]["name"]); ?></span>
                    </a>
                    <p class="description" > <?php echo ($projects[0]["description"]); ?></p>
                    <a href="<?php echo U('Projects/index');?>" target="_blank" class="btn " title="PROJECTS ">MORE PROJECTS >></a>
                </div>
            </div>
        </div>


        <div class="item-wrapper">
            <!--catalogue栏目 下载-->
            <div class="item catalogue-item">
                <a href="<?php echo ($catalogue["path"]); ?>" target="_blank" title="catalogue"><img class=" img-responsive catalogue-img" alt="catalogue" src="/Public/img/home/catalogue.jpg" ></a>
            </div>
        </div>


    </div>
    <?php
$type = D("ProductsType")->getType(); ?>

<!--底部信息-->
<div class="bottom-info">
    <div class="container">
        <div class="row">
            <!--office-contact-->
            <div class="col-md-6 m-t-4">
                <div class="title-box">
                    <span>Office</span>
                    <span>contact</span>
                </div>
                <div class="content-box">
                    <div class="content-contact">
                        <div class="contact-box">
                            <i class="icon-phone icon-color"></i>&nbsp; &nbsp;+86 756-8676 220
                        </div>
                        <div class="contact-box">
                            <i class="icon-mail icon-color"></i>&nbsp; &nbsp;<a style="color:#fff;" href="mailto:lt@ltechlighting.com">lt@ltechlighting.com</a>
                        </div>
                    </div>
                    <div class="location-box">
                        <i class="icon-location icon-color"></i>
                        <p class="marker">
                            15th Building, No.3, Pingdong 6th Road, Nanping Technical Industrial Park, Zhuhai, Guangdong, China
                        </p>
                    </div>
                </div>
            </div>

            <!--factory-contact-->
            <div class="col-md-6 m-t-4">
                <div class="title-box">
                    <span>Factory</span>
                    <span>contact</span>
                </div>
                <div class="content-box">
                    <div class="content-contact">
                        <div class="contact-box"><i class="icon-phone icon-color"></i>&nbsp; &nbsp; +86 750-3839 800</div>
                        <div class="contact-box"><i class="icon-mail icon-color"></i>&nbsp; &nbsp;  <a style="color:#fff;" href="mailto:info@potopled.com">info@potopled.com</a></div>
                    </div>
                    <div class="location-box">
                        <i class="icon-location icon-color"></i>
                        <p class="marker">
                            Block6, Baoyuan Industrial Zone, No.168, Gaoxin West Road, High Technology Area, Jiangmen City, Guangdong, China
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="email-container">
                    <div class="newsletter">
                        NEWSLETTER
                    </div>
                    <div class="email-collect">
                        <div class="text-box">
                            <input type="email"  id="emailAddress" maxlength="88" placeholder="Enter your email address" required>
                        </div>
                        <button type="button" id="emailbtn" >Subsribe</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<!--底部导航-->
<div class="bottom-nav-container">
    <div class="center-block clearfix center-box" >
        <div class="nav-item">
            <div class="item-title">
                <a href="/index.html" title="HOME">HOME</a>
                <div class="after"></div>
            </div>
        </div>
        <div class="nav-item">
            <div class="item-title">
                <a href="<?php echo U('Products/index');?>">PRODUCTS</a>
                <div class="after"></div>
            </div>
            <ul class="item-content">

                <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Products/type',array(id => $vo[id]));?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="nav-item">
            <div class="item-title">
                <a href="<?php echo U('Index/about');?>">ABOUT US</a>
                <div class="after"></div>
            </div>
            <ul class="item-content">
                <li><a href="<?php echo U('Index/about');?>">Company Profile</a></li>
                <li><a href="<?php echo U('Projects/index');?>">Projects</a></li>
                <li><a href="<?php echo U('News/index');?>">News</a></li>
            </ul>
        </div>
        <div class="nav-item">
            <div class="item-title">
                <a href="<?php echo U('Index/service');?>">SERVICE & SUPPORT</a>
                <div class="after"></div>
            </div>
            <ul class="item-content">
                <li><a href="<?php echo U('Index/service#tab1');?>">Frequently Asked Questions</a></li>
                <li><a href="<?php echo U('Index/service#tab2');?>">Warranties and Liability Guidelines</a></li>
                <li><a href="<?php echo U('Index/service#tab3');?>">OEM/ODM</a></li>
            </ul>
        </div>
        <div class="nav-item">
            <div class="item-title">
                <a href="<?php echo U('Index/contact');?>">CONTACT US</a>
                <div class="after"></div>
            </div>
        </div>
    </div>
</div>

<!--底部copyright-->
<div class=" bottom">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 clearfix" style="padding-right: 0">
                <p class="f-l copyright">Copyright © 2016-2017 Ltechlighting. All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6 clearfix">
                <div class="bottom-share ">
                    <a rel="nofollow" class="share-icon facebook" href="https://www.facebook.com/Ltechlighting-1757356137874830/" target="_blank" >
                        <i class="fa fa-facebook fa-2x"></i>
                    </a>
                    <a rel="nofollow" class="share-icon twitter" href="https://twitter.com/Ltechlighting" target="_blank" >
                        <i class="fa fa-twitter fa-2x"></i>
                    </a>
                    <a rel="nofollow" class="share-icon youtube" href="https://www.youtube.com/channel/UCBVCXak_TK_ho8Unij-zOsg" target="_blank" >
                        <i class="fa fa-youtube fa-2x"></i>
                    </a>
                    <a rel="nofollow" class="share-icon linkedin" href="https://www.linkedin.com/pulse/activities/%E6%B4%81%E5%8D%8E-%E6%A2%81+0_1k43-oq6GB-erI5MbafsgN?trk=nav_responsive_sub_nav_yourupdates" target="_blank"  >
                        <i class="fa fa-linkedin fa-2x"></i>
                    </a>
                    <a rel="nofollow" class="share-icon skype "  id="skype" >
                        <i class="fa fa-skype fa-2x"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

    <!--skype按钮-->
<div id="SkypeButton_Call_ltechlighting_1" title="chat me!"> </div>

</div>
<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/Home/jquery.goup.js"></script>
<!--本页面特有js 轮播banner插件js-->
<script src="/Public/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>  
<script src="/Public/owl.carousel.2.0.0-beta.2.4/picturefill.min.js"></script>
<script>
    $(document).ready(function () {
        //banner配置        
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        });
    });
</script>
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>