<?php if (!defined('THINK_PATH')) exit(); $active = 'Products'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flexible Neon LED Lights</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="ltechlighting Flexible Neon LED Lights datasheet and kinds of parameter or features">
    <meta name="keywords" content="ltechlighting,Flexible Neon LED Lights ,led neon, flexible led,flexible neon">

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
    <!--本模板是一次性模板，不用外链css 减少服务器请求，就近维护容易点-->
    <style>
        .banner {
            background: url('/Public/img/home/led-neon-lights/led-neon-lights-banner.jpg') no-repeat center;
            width: 100%;
            height: 550px;
        }

        .banner > .title-wrapper {
            position: relative;
            top: 305px;
            color: #fff;
            text-align: center;
        }

        .banner > .title-wrapper > .name {
            margin: 0;
            font-size: 72px;
            font-weight: bold;
        }

        .banner > .title-wrapper > .desc {
            margin-top: 10px;
            font-size: 30px;
        }

        @media screen and (max-width: 1199px) {
            .banner {
                background-size: 1536px 440px;
                height: 440px;
            }

            .banner > .title-wrapper {
                top: 250px;
            }

            .banner > .title-wrapper > .name {
                font-size: 60px;
            }
        }

        @media screen and (max-width: 991px) {
            .banner {
                background-size: 1152px 330px;
                height: 330px;
            }

            .banner > .title-wrapper {
                top: 150px;
            }

            .banner > .title-wrapper > .name {
                font-size: 50px;
            }

            .banner > .title-wrapper > .desc {
                font-size: 24px;
            }
        }

        @media screen and (max-width: 767px) {
            .banner {
                background-size: 768px 220px;
                height: 220px;
            }

            .banner > .title-wrapper {
                top: 90px;
            }

            .banner > .title-wrapper > .name {
                font-size: 36px;
            }

            .banner > .title-wrapper > .desc {
                font-size: 16px;
            }
        }

        @media screen and (max-width: 480px) {
            .banner {
                background-size: 576px 165px;
                height: 165px;
            }

            .banner > .title-wrapper {
                top: 80px;
            }

            .banner > .title-wrapper > .name {
                font-size: 24px;
            }

            .banner > .title-wrapper > .desc {
                font-size: 16px;
            }
        }

        /*tab 选项*/
        .tab .tab-head {
            width: 100%;
            border-bottom: 1px solid #646464;
        }

        .tab .tab-head ul.list-inline {
            margin-bottom: 0;
            margin-left: 0;
            font-size: 0;
        }

        .tab .tab-head ul.list-inline li:hover a,
        .tab .tab-head ul.list-inline li.active a,
        .tab .tab-head ul.list-inline li a:active,
        .tab .tab-head ul.list-inline li a:focus {
            color: #e50012;
            outline: none;
        }

        .tab .tab-head ul.list-inline li a {
            display: block;
            padding: 30px 50px 10px 50px;
            font-weight: bold;
            font-size: 18px;
            text-decoration: none;
            color: #646464;
        }

        .tab .tab-head ul.list-inline li:hover,
        .tab .tab-head ul.list-inline li.active {
            border-bottom: 4px solid #e50012;
            margin-bottom: -1px;
            outline: none;
        }

        @media screen and (max-width: 991px) {
            .tab .tab-head ul.list-inline li a {
                padding: 10px;
                font-size: 18px;
            }
        }

        @media screen and (max-width: 767px) {
            .tab .tab-head ul.list-inline li a {
                padding: 10px 5px 5px;
                font-size: 14px;
            }
        }

        @media screen and (max-width: 540px) {
            .tab .tab-head {
                border-bottom: none;
            }

            .tab .tab-head ul.list-inline li {
                display: block;
                border-bottom: 1px solid #646464;
            }

            .tab .tab-head ul.list-inline li a {
                padding: 10px 0 5px;
                font-size: 14px;
                text-align: center;
            }
        }

        /*图片展示*/
        #bigImg, #bigImg2 {
            width: 100%;
            margin-bottom: 10px;
        }

        .img-container {
            position: relative;
            width: 100%;
            cursor: pointer;
        }

        .img-container .sm-img-owl-nav .owl-prev,
        .img-container .sm-img-owl2-nav .owl-prev,
        .img-container .sm-img-owl-nav .owl-next,
        .img-container .sm-img-owl2-nav .owl-next {
            position: absolute;
            z-index: 20;
            top: 50%;
            margin-top: -15px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            line-height: 30px;
            font-size: 30px;
            color: #fff;
            background-color: rgba(7, 17, 27, .2);
            text-align: center;
            cursor: pointer;
        }

        .img-container .sm-img-owl-nav .owl-prev,
        .img-container .sm-img-owl2-nav .owl-prev {
            left: 0;
        }

        .img-container .sm-img-owl-nav .owl-prev .fa-angle-left,
        .img-container .sm-img-owl2-nav .owl-prev .fa-angle-left {
            margin-right: 3px;
        }

        .img-container .sm-img-owl-nav .owl-next,
        .img-container .sm-img-owl2-nav .owl-next {
            right: 0;
        }

        .img-container .sm-img-owl-nav .owl-next .fa-angle-right,
        .img-container .sm-img-owl2-nav .owl-next .fa-angle-right {
            margin-left: 3px;
        }

        h2 {
            font-weight: bold;
        }

        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: bold;
            color: #646464
        }

        @media screen and (max-width: 480px) {
            h2 {
                font-size: 20px
            }

            h4 {
                margin-top: 10px;
                margin-bottom: 10px;
                font-size: 16px;
            }
        }

        .features > ul {
            padding-left: 17px;
            color: #646464
        }

        .panel-heading:hover, .panel-heading:active, .panel-heading:focus {
            background-color: #eee;
        }

        .panel-group .panel + .panel {
            margin-top: 0;
        }

        .panel-group .panel {
            border-bottom: 1px solid #ccc;
        }

        .panel-heading {
            position: relative;
            padding: 0;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .panel-heading h4.panel-title a {
            text-decoration: none;
            width: 100%;
            padding: 10px 15px;
            display: block;
            position: relative;
            z-index: 2;
            color: #646464;
            outline: none;
        }

        .panel-heading .arraw {
            display: block;
            position: absolute;
            z-index: 1;
            top: 10px;
            right: 15px;
            width: 20px;
            height: 11px;
            color: #646464;
            background: url('/Public/img/home/led-linear-lights/linear-lights/arraw.png') no-repeat;
        }

        .panel-heading .arraw-up {
            display: block;
            position: absolute;
            z-index: 1;
            top: 10px;
            right: 15px;
            width: 20px;
            height: 11px;
            background: url('/Public/img/home/led-linear-lights/linear-lights/arraw-up.png') no-repeat;
        }

        .panel-body {
            padding: 0;
        }

        .panel-body a {
            position: relative;
            display: block;
            width: 100%;
            height: 30px;
            line-height: 30px;
            padding-left: 15px;
            padding-right: 35px;
            color: #646464;
            text-overflow:ellipsis;
            white-space: nowrap;
            overflow: hidden;
            text-decoration: none;
            outline: none;
        }

        .panel-body a:nth-child(odd) {
            background-color: #fafafa;
        }

        .panel-body a > span.download {
            display: block;
            position: absolute;
            right: 15px;
            top: 5px;
            width: 20px;
            height: 20px;
            background: url('/Public/img/home/led-linear-lights/linear-lights/download-1.png') no-repeat;
        }

        .panel-body a > span.download:hover,
        .panel-body a > span.download:active,
        .panel-body a > span.download:focus {
            background: url('/Public/img/home/led-linear-lights/linear-lights/download.png') no-repeat;
        }

        .panel-body a:active,
        .panel-body a:focus,
        .panel-body a:hover {
            background-color: #eee;
        }

        /*参数表格*/
        .table1 {
            border: none;
        }

        .table1 > thead > tr > td {
            background-color: #0f0f0f;
            color: #fff;
            font-size: 14px;
            text-align: center;
        }

        .table1 > tbody > tr > td {
            color: #646464;
            font-size: 14px;
            text-align: center;
        }

        .table1 > thead > tr > td:first-child,
        .table1 > tbody > tr > td:first-child {
            min-width: 170px;
            padding-left: 24px;
            text-align: left;
            font-weight: bold;
        }

        .table1 > tbody > tr > td:last-child {
            border-right: none
        }

        .table1 > tbody > tr > td:first-child {
            border-left: none
        }

        p.remark {
            position: relative;
            padding-left: 50px;
            font-size: 12px
        }

        p.remark > span {
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            color: #f00;
            font-size: 12px
        }

        /*详情页询盘弹出框*/
        @media screen and (min-width: 992px) {
            #Inquiry {
                z-index: 1000001;
                background: #f8f8f8;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: none;
                display: none;
                filter: alpha(opacity=100);

            }

            #Inquiry .content {
                position: relative;
                width: 860px;
            }

            #Inquiry .content .title {
                color: #323232;
                font-weight: bold;
                font-size: 28px;
                text-align: center;
                padding-top: 45px;
                margin-bottom: 10px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            #Inquiry {
                z-index: 1000001;
                background: #f8f8f8;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: none;
                filter: alpha(opacity=100);

            }

            #Inquiry .content {
                position: relative;
                width: 740px;
            }

            #Inquiry .content .title {
                color: #323232;
                font-weight: bold;
                font-size: 28px;
                text-align: center;
                padding-top: 45px;
                margin-bottom: 10px;
            }
        }

        @media screen and (max-width: 767px) {
            #Inquiry {
                z-index: 1000001;
                background: #f8f8f8;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                display: none;
                filter: alpha(opacity=100);
                max-height: 90%;
                width:80%;
                overflow-y: scroll;
                overflow-x: hidden;
            }

            #Inquiry .content .title {
                padding: 20px 40px 0;
                margin-bottom: 10px;
                font-size: 14px;
                text-align: center;
                color: #323232;
                font-weight: bold;
            }
        }

        #Inquiry .content .btn-close {
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 15px;
            width: 28px;
            height: 28px;
            background: url("/Public/img/home/btn-close1.png") no-repeat 100%;
            transition: all 0.6s ease-in 0.1s;
            -webkit-transition: all 0.6s ease-in 0.1s;
            -o-transition: all 0.6s ease-in 0.1s;
            -moz-transition: all 0.6s ease-in 0.1s;
        }

        #Inquiry .content .btn-close:hover {
            transform: rotateX(180deg);
            background: url("/Public/img/home/btn-close2.png") no-repeat 100%;
        }

        #Inquiry .content form {
            max-width: 610px;
            margin: 0 auto;
            padding: 10px;
        }

        #Inquiry .content form .form-group label {
            text-indent: 13px;
        }

        #Inquiry .content form .form-group label span {
            color: #d01d1d;
        }

        #Inquiry .content form .m-top {
            margin-top: 42px;
        }

        #Inquiry .content form .form-group textarea {
            height: 160px;
            resize: none;
        }

        #Inquiry .content form .form-group .button-submit {
            background: #646464;
            width: 150px;
            height: 40px;
            text-align: center;
            color: #fff;
            font-family: "Tahoma";
            font-size: 14px;
            border: none;
            margin: 0 auto;
            display: block;
        }

        #Inquiry .content form .form-group .button-submit:hover {
            background: #d01d1d;
        }

        #Inquiry .content form .Demand {
            position: relative;
        }

        #Inquiry .content form .Demand .Demand-title {
            position: absolute;
            left: 13px;
            top: 74px;
            color: #999;
        }

        #Inquiry .content form .Demand input {
            padding-left: 50px;
        }

        /*详情页遮罩层及弹出框*/
        #mask {
            opacity: 0.8;
            filter: alpha(opacity=80);
            background: #000;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 100000;
        }
    </style>
</head>
<body >
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
<!--顶部banner-->
<div class="container-fluid banner">
    <div class="title-wrapper">
        <h1 class="name">Flexible Neon LED Lights</h1>
        <h2 class="desc">The perfect replacement for traditional glass neon</h2>
    </div>
</div>
<!--tab选项-->
<div class="tab">
    <div class="container">
        <div class="tab-head">
            <ul class="list-inline" id="myTab" role="tablist" >
                <li class="active">
                    <a href="#tab1" role="tab" data-toggle="tab">15*25mm Flexible Neon LED Lights</a>
                </li>
                <li>
                    <a href="#tab2" role="tab" data-toggle="tab">8*15mm Flexible Neon LED Lights</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="tab1">
            <div class="container">
                <div class="row  row-block">
                    <!--左边展示产品图 -->
                    <div class="col-sm-6">
                        <div class="tab-content" id="bigImg">
                            <div class="tab-pane active " id="neon">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/neon-lights.jpg"
                                     alt=" neon lights">
                            </div>
                            <div class="tab-pane" id="blue">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/Blue-Neon-lighs.jpg"
                                     alt="blue neon lights">
                            </div>
                            <div class="tab-pane" id="green">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/green-Neon-lighs.jpg"
                                     alt=" green neon lights">
                            </div>
                            <div class="tab-pane" id="Pink">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/Pink-Neon-lighs.jpg"
                                     alt=" Pink neon lights">
                            </div>
                            <div class="tab-pane" id="red">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/red-Neon-lighs.jpg"
                                     alt=" red neon lights">
                            </div>
                            <div class="tab-pane" id="warmWhite">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/warm-white-Neon-lighs.jpg"
                                     alt=" warm white neon lights">
                            </div>
                            <div class="tab-pane" id="white">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/white-Neon-lighs.jpg"
                                     alt="white neon lights">
                            </div>
                            <div class="tab-pane" id="yellow">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/yellow-Neon-lighs.jpg"
                                     alt="yellow neon lights">
                            </div>
                        </div>

                        <div class="img-container">
                            <div class="sm-img-owl">
                                <a href="#neon" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/neon-lights-s.jpg"
                                         alt="neon lights">
                                </a>
                                <a href="#blue" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/Blue-Neon-lighs-s.jpg"
                                         alt="Blue neon lights">
                                </a>
                                <a href="#green" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/green-Neon-lighs-s.jpg"
                                         alt="green neon lights">
                                </a>
                                <a href="#Pink" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/Pink-Neon-lighs-s.jpg"
                                         alt="Pink neon lights">
                                </a>
                                <a href="#red" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/red-Neon-lighs-s.jpg"
                                         alt="red neon lights">
                                </a>
                                <a href="#warmWhite" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/warm-white-Neon-lighs-s.jpg"
                                         alt="warm white neon lights">
                                </a>
                                <a href="#white" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/white-Neon-lighs-s.jpg"
                                         alt="white neon lights">
                                </a>
                                <a href="#yellow" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/yellow-Neon-lighs-s.jpg"
                                         alt="yellow neon lights">
                                </a>
                            </div>
                            <!--前进后退按钮nav-->
                            <div class="sm-img-owl-nav"></div>
                        </div>

                    </div>
                    <!--右边features 和 下载 -->
                    <div class="col-sm-6">
                        <h2 style="color:#646464">15*25MM<br>FLEXIBLE NEON LED LIGHTS</h2>
                        <h4>FEATURES</h4>
                        <div class="features">
                            <ul>
                                <li>Made of ultra bright and high quality LEDs</li>
                                <li>Milky white jacket, other colors can be customized</li>
                                <li>Flexible, durable PVC design</li>
                                <li>Low heat, low power consumption and low maintenance</li>
                                <li>Extra long life with 2 year warranty</li>
                                <li>Easy to Install, simple to operate</li>
                                <li>Low power consumption</li>
                                <li>0-10V (cBus, Dynalite), DMX, DALI, WiFi and 2.4G dimming</li>
                                <li>Waterproof IP65</li>
                            </ul>
                        </div>

                        <h4 style="margin-top: 50px; border-bottom: 1px solid #ccc;padding-left: 15px;padding-bottom: 10px;">
                            DOWNLOADS</h4>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Installation Guide
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <a href="<?php echo U('Download/index',array(id => 21));?>" target="_blank" data-id="21">
                                            15x25mm 220V RGB Neon light user manual <span class="download"></span></a>
                                        <a href="<?php echo U('Download/index',array(id => 18));?>" target="_blank" data-id="18">
                                            15x25mm 24V RGB Neon light user manual <span class="download"></span></a>
                                        <a href="<?php echo U('Download/index',array(id => 17));?>" target="_blank" data-id="17">
                                            15x25mm Neon light single color user manual <span class="download"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            DataSheet
                                        </a>
                                    </h4>
                                    <span class="arraw-up"></span>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <a href="<?php echo U('Download/index',array(id => 20));?>" target="_blank" data-id="20">
                                            15x25mm RGB Neon Light Specification <span class="download"></span></a>
                                        <a href="<?php echo U('Download/index',array(id => 19));?>" target="_blank" data-id="19">
                                            15x25mm Neon Light Specification <span class="download"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            IES Files
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>
                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                           href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Brochure
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingFour">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 产品参数表格1-->
                <div class="row " style="padding-bottom: 100px">
                    <div class="col-xs-12">
                        <h3 class="text-uppercase"><b>Ordering system</b></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table1">
                                <thead>
                                <tr>
                                    <td>Model Name</td>
                                    <td>Color</td>
                                    <td>Voltage</td>
                                    <td>Watts/M</td>
                                    <td>LED Type</td>
                                    <td>LED QTY(pcs/M)</td>
                                    <td>Dimensions</td>
                                    <td>Cut Unit</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>LT-FNL-WW-24V-B</td>
                                    <td>Warm White</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-CW-24V-B</td>
                                    <td>Cool White</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-R-24V-B</td>
                                    <td>Red</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-Y-24V-B</td>
                                    <td>Yellow</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-B-24V-B</td>
                                    <td>Blue</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-G-24V-B</td>
                                    <td>Green</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-P-24V-B</td>
                                    <td>Pink</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-RGB-24V-B</td>
                                    <td>RGB</td>
                                    <td>24V</td>
                                    <td>14.4W/M</td>
                                    <td>5050</td>
                                    <td>60</td>
                                    <td>15*25mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-RGB-220V-B</td>
                                    <td>RGB</td>
                                    <td>220V</td>
                                    <td>14.4W/M</td>
                                    <td>5050</td>
                                    <td>60</td>
                                    <td>15*25mm</td>
                                    <td>100cm</td>
                                </tr>

                                <tr>
                                    <td colspan="8"></td>
                                </tr>

                                <tr>
                                    <td>LT-FNL-WW-12V-B</td>
                                    <td>Warm White</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-CW-12V-B</td>
                                    <td>Cool White</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-R-12V-B</td>
                                    <td>Red</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-Y-12V-B</td>
                                    <td>Yellow</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-B-12V-B</td>
                                    <td>Blue</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-G-12V-B</td>
                                    <td>Green</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-P-12V-B</td>
                                    <td>Pink</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>15*25mm</td>
                                    <td>5cm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="remark"><span>Remark:</span> The color jacket is only white as standard order we
                            offered, other colors such as the same with the LED colors can be customized.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane " id="tab2">
            <div class="container">
                <div class="row  row-block">
                    <!--左边展示产品图 -->
                    <div class="col-sm-6">
                        <div class="tab-content" id="bigImg2">
                            <div class="tab-pane active " id="neon2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/8x15mm-Neon-light.jpg"
                                     alt=" neon lights">
                            </div>
                            <div class="tab-pane" id="blue2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/Blue-Neon-lighs.jpg"
                                     alt="blue neon lights">
                            </div>
                            <div class="tab-pane" id="green2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/green-Neon-lighs.jpg"
                                     alt=" green neon lights">
                            </div>
                            <div class="tab-pane" id="Pink2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/Pink-Neon-lighs.jpg"
                                     alt=" Pink neon lights">
                            </div>
                            <div class="tab-pane" id="red2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/red-Neon-lighs.jpg"
                                     alt=" red neon lights">
                            </div>
                            <div class="tab-pane" id="warmWhite2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/warm-white-Neon-lighs.jpg"
                                     alt=" warm white neon lights">
                            </div>
                            <div class="tab-pane" id="white2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/white-Neon-lighs.jpg"
                                     alt="white neon lights">
                            </div>
                            <div class="tab-pane" id="yellow2">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/flexible-neon-led/yellow-Neon-lighs.jpg"
                                     alt="yellow neon lights">
                            </div>
                        </div>

                        <div class="img-container">
                            <div class="sm-img-owl2">
                                <a href="#neon2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/8x15mm-Neon-light-s.jpg"
                                         alt="neon lights">
                                </a>
                                <a href="#blue2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/Blue-Neon-lighs-s.jpg"
                                         alt="Blue neon lights">
                                </a>
                                <a href="#green2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/green-Neon-lighs-s.jpg"
                                         alt="green neon lights">
                                </a>
                                <a href="#Pink2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/Pink-Neon-lighs-s.jpg"
                                         alt="Pink neon lights">
                                </a>
                                <a href="#red2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/red-Neon-lighs-s.jpg"
                                         alt="red neon lights">
                                </a>
                                <a href="#warmWhite2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/warm-white-Neon-lighs-s.jpg"
                                         alt="warm white neon lights">
                                </a>
                                <a href="#white2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/white-Neon-lighs-s.jpg"
                                         alt="white neon lights">
                                </a>
                                <a href="#yellow2" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-neon-lights/flexible-neon-led/yellow-Neon-lighs-s.jpg"
                                         alt="yellow neon lights">
                                </a>
                            </div>
                            <!--前进后退按钮nav-->
                            <div class="sm-img-owl2-nav"></div>
                        </div>

                    </div>
                    <!--右边features 和 下载 -->
                    <div class="col-sm-6">
                        <h2 style="color:#646464">8*15MM<br>FLEXIBLE NEON LED LIGHTS</h2>
                        <h4>FEATURES</h4>
                        <div class="features">
                            <ul>
                                <li>Made of ultra bright and high quality LEDs</li>
                                <li>Milky white jacket, other colors can be customized</li>
                                <li>Flexible, durable PVC design</li>
                                <li>Low heat, low power consumption and low maintenance</li>
                                <li>Extra long life with 2 year warranty</li>
                                <li>Easy to Install, simple to operate</li>
                                <li>Low power consumption</li>
                                <li>0-10V (cBus, Dynalite), DMX, DALI, WiFi and 2.4G dimming</li>
                                <li>Waterproof IP65</li>
                            </ul>
                        </div>

                        <h4 style="margin-top: 50px; border-bottom: 1px solid #ccc;padding-left: 15px;padding-bottom: 10px;">
                            DOWNLOADS</h4>
                        <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingOne2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                            Installation Guide
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingOne2">
                                    <div class="panel-body">
                                        <a href="<?php echo U('Download/index',array(id => 15));?>" target="_blank" data-id="15">
                                            8x15mm single color Neon light user manual <span class="download"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingTwo2">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2"
                                           aria-expanded="false" aria-controls="collapseTwo2">
                                            DataSheet
                                        </a>
                                    </h4>
                                    <span class="arraw-up"></span>
                                </div>
                                <div id="collapseTwo2" class="panel-collapse collapse in" role="tabpanel"
                                     aria-labelledby="headingTwo2">
                                    <div class="panel-body">
                                        <a href="<?php echo U('Download/index',array(id => 16));?>" target="_blank" data-id="16">
                                            8x15mm Neon Light Specification <span class="download"></span></a>
                                    </div>
                                </div>
                            </div>

                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingThree2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                            IES Files
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingThree2">
                                    <div class="panel-body">
                                    </div>
                                </div>
                            </div>
                            <div class="panel ">
                                <div class="panel-heading" role="tab" id="headingFour2">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2"
                                           href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                            Brochure
                                        </a>
                                    </h4>
                                    <span class="arraw"></span>
                                </div>
                                <div id="collapseFour2" class="panel-collapse collapse" role="tabpanel"
                                     aria-labelledby="headingFour2">
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- 产品参数表格2-->
                <div class="row " style="padding-bottom: 100px">
                    <div class="col-xs-12">
                        <h3 class="text-uppercase"><b>Ordering system</b></h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table1">
                                <thead>
                                <tr>
                                    <td>Model Name</td>
                                    <td>Color</td>
                                    <td>Voltage</td>
                                    <td>Watts/M</td>
                                    <td>LED Type</td>
                                    <td>LED QTY(pcs/M)</td>
                                    <td>Dimensions</td>
                                    <td>Cut Unit</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>LT-FNL-WW-24V-S</td>
                                    <td>Warm White</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-CW-24V-S</td>
                                    <td>Cool White</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-R-24V-S</td>
                                    <td>Red</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-Y-24V-S</td>
                                    <td>Yellow</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-B-24V-S</td>
                                    <td>Blue</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-G-24V-S</td>
                                    <td>Green</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-P-24V-S</td>
                                    <td>Pink</td>
                                    <td>24V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>50cm</td>
                                </tr>

                                <tr>
                                    <td colspan="8"></td>
                                </tr>

                                <tr>
                                    <td>LT-FNL-WW-12V-S</td>
                                    <td>Warm White</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-CW-12V-S</td>
                                    <td>Cool White</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-R-12V-S</td>
                                    <td>Red</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-Y-12V-S</td>
                                    <td>Yellow</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-B-12V-S</td>
                                    <td>Blue</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-G-12V-S</td>
                                    <td>Green</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                <tr>
                                    <td>LT-FNL-P-12V-S</td>
                                    <td>Pink</td>
                                    <td>12V</td>
                                    <td>7.2W/M</td>
                                    <td>2835</td>
                                    <td>120</td>
                                    <td>8*15mm</td>
                                    <td>5cm</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="remark"><span>Remark:</span> The color jacket is only white as standard order we
                            offered, other colors such as the same with the LED colors can be customized.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--询价按钮-->
        <div class="container-fluid" style="background-color: #eee;padding-top: 30px;padding-bottom: 30px;">
            <div class="row row-block">
                <div class="col-xs-12 text-center">
                    <a class='btn btn-download ' href="javascript:showmask();"> Request pricing</a>
                    <a class="btn btn-download " href="<?php echo U('Products/index');?>" style="width: 123px"> Other items</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--遮罩层-->
<div id="mask" onclick="hidemask()"></div>
<!--弹窗-->
<div id="Inquiry">
    <div class="content">
        <span class="btn-close" onclick="hidemask()"></span>
        <div class="title">Please enter your contact information!</div>
        <form role="form">
            <div class="form-group">
                <label for="Name">Name<span>*</span></label>
                <input type="text" class="form-control" name="Name" id="Name" placeholder="Name" maxlength="30">
            </div>

            <div class="form-group">
                <label for="Company">Company<span>*</span></label>
                <input type="text" class="form-control" name="Company" id="Company" placeholder="Company"
                       maxlength="80">
            </div>

            <div class="form-group row">
                <div class="col-sm-6 ">
                    <label for="Email">E-mail<span>*</span></label>
                    <input type="email" class="form-control" name="Email" id="Email" placeholder="E-mail"
                           maxlength="50">
                </div>
                <div class="col-sm-6">
                    <label for="Phone">Phone<span>*</span></label>
                    <input type="tel" class="form-control" name="Phone" id="Phone" placeholder="Phone" maxlength="20">
                </div>
            </div>
            <div class="form-group">
                <label for="Website">Website </label> <span>(for example:http://ltechlighting.com)</span>
                <input type="text" class="form-control" name="Website" id="Website"
                       placeholder="http://ltechlighting.com" maxlength="100">
            </div>
            <div class="form-group Demand ">
                <label for="Title" class="m-top">Demand information</label>
                <input type="text" class="form-control" name="Title" id="Title" value="flexible neon led lights">
                <span class="Demand-title">Title:</span>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="Content" id="Content" placeholder="Content:"
                          maxlength="2000"></textarea>
            </div>
            <div class="form-group">
                <button class="button-submit" id='inqueryBtn'>Inquiry</button>
            </div>
        </form>
    </div>
</div>
<div class="bottom-container">
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
<script src="/Public/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
<script>
    $(function () {

        // 根据url锚点切换tab选项
        var thisUrl = location.href.split('.html#');
        var tab = thisUrl[thisUrl.length - 1];
        if (tab === 'tab2') {
            $('#myTab').find('a').eq(1).trigger('click');
            owl('.sm-img-owl2');
        }else{
            owl('.sm-img-owl');
        }

        //tab点击切换时操作
        $('#myTab').find('a').click(function () {
            var attr = $(this).attr('href');
            if (attr === '#tab1') {
                $('#tab2').hide();
                $('#tab1').show();
                owl('.sm-img-owl');

            } else if (attr === '#tab2') {
//                $('sm-img-owl2').trigger('refresh.owl.carousel');
                $('#tab1').hide();
                $('#tab2').show();
                owl('.sm-img-owl2');

            }
        });

        //download
        $('h4.panel-title').find('a').click(function (e) {
            var cla = $(this).attr('class');
            console.log(cla);
            // 折叠替换右边图标背景
            if (cla === 'collapsed') {
                $('.panel-heading span').each(function () {
                    $(this).css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw.png") no-repeat');
                });
                $(this).parent().next('span').css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw-up.png") no-repeat');

            } else {
                $(this).parent().next('span').css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw.png") no-repeat');
            }
        });
        // 统计文件的下载数
        $('.panel-collapse .panel-body').find('a').click(function(){
            var fileid = $(this).attr('data-id');
            $.post('<?php echo U("Products/downloadCount");?>',{fileId:fileid},function(msg){console.log(msg.message)},'json');
        });

        // Request pricing 按钮操作
        $("#Name,#Company,#Email,#Phone").on("blur", function () {
            var name = $("#Name").val();
            var company = $("#Company").val();
            var email = $("#Email").val();
            var phone = $("#Phone").val();
            if ($.trim(name) === "") {
                $("#Name").css("border-color", "red");

            } else if ($.trim(name) !== "") {
                $("#Name").css("border-color", "");
            }
            if ($.trim(company) === "") {
                $("#Company").css("border-color", "red");

            } else if ($.trim(company) !== "") {
                $("#Company").css("border-color", "");
            }
            if ($.trim(email) === "" || !checkmail(email)) {
                $("#Email").css("border-color", "red");

            } else if ($.trim(email) !== "" && checkmail(email)) {
                $("#Email").css("border-color", "");
            }
            if ($.trim(phone) === "") {
                $("#Phone").css("border-color", "red");

            } else {
                $("#Phone").css("border-color", "");
            }
        });

        // Inquery按钮操作
        $("#inqueryBtn").click(function () {
            var name = $("#Name").val();
            var company = $("#Company").val();
            var email = $("#Email").val();
            var phone = $("#Phone").val();
            var website = $("#Website").val();
            var title = $("#Title").val();
            var content = $("#Content").val();

            if ($.trim(name) === "") {
                $("#Name").css("border-color", "red");
                return false;
            } else if ($.trim(name) !== "") {
                $("#Name").css("border-color", "");
            }
            if ($.trim(company) === "") {
                $("#Company").css("border-color", "red");
                return false;
            } else if ($.trim(company) !== "") {
                $("#Company").css("border-color", "");
            }
            if ($.trim(email) === "" || !checkmail(email)) {
                $("#Email").css("border-color", "red");
                return false;
            } else if ($.trim(email) !== "") {
                $("#Email").css("border-color", "");
            }
            if ($.trim(phone) === "") {
                $("#Phone").css("border-color", "red");
                return false;
            } else {
                $("#Phone").css("border-color", "");
            }
            var ii = layer.load(0, {shade: [0.5, '#fff']});//加载图 ing
            $.ajax({
                url: "/Home/Email/inquiry",
                data: {
                    name: name,
                    company: company,
                    email: email,
                    phone: phone,
                    website: website,
                    title: title,
                    content: content
                },
                type: 'post',
                success: function (result) {
                    layer.close(ii);//关闭加载图
                    console.log(result);
                    if (result === "success") {
                        layer.msg('Send Inquiry Success', {icon: 1});//提交到后台并且成功发送就弹出这个tip...
                        $("#Name").val("");
                        $("#Company").val("");
                        $("#Email").val("");
                        $("#Phone").val("");
                        $("#Website").val("");
                        $("#Content").val("");

                        hidemask();
                    } else {
                        layer.msg('Server error!Try again please', {icon: 2});//提交到后台但发送失败就弹出这个tip...
                    }
                },
                error: function () {
                    layer.close(ii);//关闭加载图
                    layer.msg('Error,try again please!', {icon: 2, time: 5000});
                }
            });
            return false;
        });

    });



    //遮罩层的实现
    function showmask() {
        $("#mask").css({'height':'100%',"width":'100%'}).fadeIn(1000);
        $("#Inquiry").fadeIn(1000);
    }
    function hidemask() {
        $("#mask").fadeOut(1000);
        $("#Inquiry").fadeOut(1000);
    }

    //轮播图片配置
    function owl(element){
        $(element).owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: false,
            nav: true,
            responsiveClass: true,
            navContainer: element + '-nav',
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], //前进、后退 按钮 的内容
            responsive: {
                0: {
                    margin: 5,
                },
                480: {
                    margin: 10,
                }
            }
        });
    }

</script>

       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>