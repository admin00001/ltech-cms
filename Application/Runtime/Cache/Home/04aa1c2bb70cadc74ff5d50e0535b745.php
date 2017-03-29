<?php if (!defined('THINK_PATH')) exit(); $active = 'Products'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Flexible Neon LED Lights</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="ltechlighting led neon lights,Flexible Neon light was widely used in outdoor&indoor lighting for easy installation and excellent color effects,and it has the features: beautiful color, high brightness, low fever, energy saving, long life, pure soft and flexible control. ">
    <meta name="keywords"
          content="led neon lights,Flexible Neon light,neon lights led neon">
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
        .banner{
            background: url('/Public/img/home/led-neon-lights/led-neon-lights-banner.jpg') no-repeat center;
            width: 100%;
            height: 550px;
        }
        .banner>.title-wrapper{
            position: relative;
            top: 305px;
            color:#fff;
            text-align: center;
        }
        .banner>.title-wrapper>.name{
            margin: 0;
            font-size: 72px;
            font-weight: bold;
        }
        .banner>.title-wrapper>.desc{
            margin-top: 10px;
            font-size: 30px;
        }
        @media screen and (max-width: 1199px){
            .banner{
                background-size: 1536px 440px;
                height: 440px;
            }
            .banner>.title-wrapper{
                top: 250px;
            }
            .banner>.title-wrapper>.name{
                font-size: 60px;
            }
        }

        @media screen and (max-width: 991px){
            .banner{
                background-size: 1152px 330px;
                height: 330px;
            }
            .banner>.title-wrapper{
                top: 150px;
            }
            .banner>.title-wrapper>.name{
                font-size: 50px;
            }
            .banner>.title-wrapper>.desc{
                font-size: 24px;
            }
        }
        @media screen and (max-width: 767px){
            .banner{
                background-size: 768px 220px;
                height: 220px;
            }
            .banner>.title-wrapper{
                top: 90px;
            }
            .banner>.title-wrapper>.name{
                font-size: 36px;
            }
            .banner>.title-wrapper>.desc{
                font-size: 16px;
            }
        }
        @media screen and (max-width: 480px){
            .banner{
                background-size: 576px 165px;
                height: 165px;
            }
            .banner>.title-wrapper{
                top: 80px;
            }
            .banner>.title-wrapper>.name{
                font-size: 24px;
            }
            .banner>.title-wrapper>.desc{
                font-size: 16px;
            }
        }
        /*两段描述*/
        .description{
            margin: 80px auto;
            color:#646464;
        }
        .description>.row>.col-sm-6>.desc1-wrapper{
            margin-left: 130px;
            line-height: 1.28571429;
            font-size: 28px;
            font-weight: bold;
        }
        .description>.row>.col-sm-6>.desc1-wrapper>.desc1{
            margin-bottom: 0;
            margin-top: 32px;
        }
        .description>.row>.col-sm-6>.desc1-wrapper:before{
            display: block;
            content: '';
            width: 147px;
            height: 7px;
            background-color: #0f0f0f;
        }
        .description>.row>.col-sm-6>.desc2-wrapper{
            margin-left: 80px;
            margin-right: 50px;
            font-size: 14px;
        }
        .description>.row>.col-sm-6>.desc2-wrapper>.desc2{
            margin-right: 50px;
        }
        .desc2+.desc2{
            margin-top: 20px;
        }
        @media screen and (max-width: 1199px){
            .description>.row>.col-sm-6>.desc1-wrapper{
                margin-left: 100px;
            }
            .description>.row>.col-sm-6>.desc2-wrapper{
                margin-left: 50px
            }
        }
        @media screen and (max-width: 991px){
            .description{
                margin: 50px auto;
            }
            .description>.row>.col-sm-6>.desc1-wrapper:before{
                width: 127px;
                height: 6px;
            }
            .description>.row>.col-sm-6>.desc1-wrapper{
                margin-left: 60px;
                font-size: 26px;
            }
            .description>.row>.col-sm-6>.desc2-wrapper{
                margin-left: 30px;
                margin-right: 30px;
            }
            .description>.row>.col-sm-6>.desc1-wrapper>.desc1{
                margin-top: 30px;
            }
            .description>.row>.col-sm-6>.desc2-wrapper>.desc2{
                margin-right: 0;
            }
        }
        @media screen and (max-width: 767px){
            .description>.row>.col-sm-6>.desc1-wrapper{
                margin-left: 30px;
                margin-bottom: 20px;
                font-size: 20px;
            }
        }
        @media screen and (max-width: 480px){
            .description{
                margin: 20px auto ;
            }
            .description>.row>.col-sm-6>.desc1-wrapper{
                margin-left: 0;
                margin-bottom: 40px;
                font-size: 16px;
            }
            .description>.row>.col-sm-6>.desc1-wrapper:before{
                width: 127px;
                height:5px;
            }
            .description>.row>.col-sm-6>.desc1-wrapper>.desc1{
                margin-top: 20px;
            }
            .description>.row>.col-sm-6>.desc2-wrapper{
                margin-left: auto;
                margin-right: auto;
                font-size: 12px;
            }
            .desc2+.desc2{
                margin-top: 10px;
            }
        }

        /*多个组合图片轮播*/
        .owl-container{
            position: relative;
        }

        .owl-container .owl-carousel {
            width: 100%;
            padding-left: 10px;
            padding-right: 10px;
            margin-bottom: 20px;
        }
        .owl-container .owl-carousel .img-wrapper{
            max-height: 819px;
            overflow: hidden;
        }
        .owl-container .owl-carousel .img-wrapper .inner-wrapper{
            width: 100%;
            margin-top: 20px;
            overflow: hidden;
        }
        .owl-container .owl-carousel .img-wrapper .img-blue{margin-bottom: 20px;}

        .owl-container .owl-nav{
            display: none;
        }
        .owl-container:hover .owl-nav,
        .owl-container:active .owl-nav,
        .owl-container:focus .owl-nav{
            display: block;
        }
        .owl-container .owl-nav .owl-prev,
        .owl-container .owl-nav .owl-next{
            position: absolute;
            z-index:20;
            top: 50%;
            margin-top: -40px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(220, 220, 220, .2);
            line-height: 80px;
            font-size: 80px;
            color: rgba(0, 0, 0, .3);
            text-align: center;
            cursor: pointer;
        }
        .owl-container .owl-nav .owl-prev{left: 20px;}
        .owl-container .owl-nav .owl-prev .fa{margin-right: 3px}/*满足美工要求，左移3px*/
        .owl-container .owl-nav .owl-next{right: 20px;}
        .owl-container .owl-nav .owl-next .fa{margin-left: 3px}/*满足美工要求，右移3px*/
        @media screen and (max-width: 1199px){
            .owl-container .owl-carousel .img-wrapper .img-blue{margin-bottom: 18px;}
        }
        @media screen and (max-width: 991px){
            .owl-container .owl-nav{
                display: block;
            }
            .owl-container .owl-nav .owl-prev,
            .owl-container .owl-nav .owl-next{
                margin-top: -25px;
                width: 50px;
                height: 50px;
                line-height: 50px;
                font-size: 50px;
            }
        }
        @media screen and (max-width: 767px){
            .owl-container .owl-carousel{margin-bottom: 0;padding-bottom: 10px}
            .owl-container .owl-carousel .img-wrapper .img-blue{margin-bottom: 8px;}
            .owl-container .owl-carousel .img-wrapper .inner-wrapper{ margin-top: 10px;}
            .owl-container .owl-nav .owl-prev,
            .owl-container .owl-nav .owl-next{
                margin-top: -15px;
                width: 30px;
                height: 30px;
                line-height: 30px;
                font-size: 30px;
            }
            .owl-container .owl-carousel .img-wrapper .inner-wrapper .inner-xs-left-5{ padding-left: 5px;}
            .owl-container .owl-carousel .img-wrapper .inner-wrapper .inner-xs-right-5{ padding-right: 5px;}
        }

        /*大背景bg ，描述，8个图标和描述 */
        .bg{
            background: url('/Public/img/home/led-neon-lights/led-neon-lights-bg.jpg') no-repeat center;
            background-size: cover;
            min-height: 650px;
            color: #fefefe;
        }
        .bg .desc3-wrapper{
            margin-left: 40px;
        }
        .bg .desc3-wrapper:before{
            display: block;
            content: '';
            width: 260px;
            height: 2px;
            margin-top: 66px;
            margin-bottom: 25px;
            background-color: #fefefe;
        }
        .bg .icon-wrapper{
            margin: 85px 0 0 45px;
            font-size:0;
        }
        .icon-wrapper>.icon{
            display: inline-block;
            vertical-align: middle;
            width: 80px;
            height: 80px;
            background: url('/Public/img/home/led-neon-lights/icon.png') no-repeat;
            overflow: hidden;
        }
        .icon-wrapper>.icon1{background-position: 0 0;}
        .icon-wrapper>.icon2{background-position: -84px 0;}
        .icon-wrapper>.icon3{background-position: -168px 0;}
        .icon-wrapper>.icon4{background-position: -252px 0;}
        .icon-wrapper>.icon5{background-position: -336px 0;}
        .icon-wrapper>.icon6{background-position: -420px 0;}
        .icon-wrapper>.icon7{background-position: -504px 0;}
        .icon-wrapper>.icon8{background-position: -588px 0;}
        .icon-wrapper>.icon-desc{
            display: inline-block;
            vertical-align: middle;
            margin-top: 10px;
            margin-left: 14px;
            line-height: 18px;
            font-size: 16px;
        }
        @media screen and (max-width: 1199px){
            .bg .icon-wrapper{
                margin: 70px 0 0 15px;
            }
        }
        @media screen and (max-width: 991px){
            .col-sm-6-hide{
                display: none;
            }
            .bg .desc3-wrapper{
                width: 730px;
                padding-right: 20px;
                margin-left: 0;
            }
            .bg .icon-wrapper{
                margin: 20px 0 0 80px;
            }
        }
        @media screen and (max-width: 767px){
            .bg{padding-bottom: 20px}
            .bg .desc3-wrapper{
                width: auto;
                padding-right: 0;
                margin-left: 0;
            }
            .bg .icon-wrapper{
                margin: 20px 0 0 0;
            }
        }

        @media screen and (max-width: 480px){
            .bg{
                background-size: 1500px;
                min-height: 1px;
            }
            .bg .desc3-wrapper{
                font-size: 12px;
            }
            .bg .desc3-wrapper:before{
                margin-top: 20px;
                margin-bottom: 20px;
            }
            .icon-wrapper>.icon{
                width: 40px;
                height: 40px;
                background-size: 336px 40px;
            }
            .icon-wrapper>.icon1{background-position: 0 0;}
            .icon-wrapper>.icon2{background-position: -42px 0;}
            .icon-wrapper>.icon3{background-position: -84px 0;}
            .icon-wrapper>.icon4{background-position: -126px 0;}
            .icon-wrapper>.icon5{background-position: -168px 0;}
            .icon-wrapper>.icon6{background-position: -210px 0;}
            .icon-wrapper>.icon7{background-position: -252px 0;}
            .icon-wrapper>.icon8{background-position: -294px 0;}
            .icon-wrapper>.icon-desc{
                margin-top: 5px;
                margin-left: 14px;
                line-height: 12px;
                font-size: 12px;
            }

        }
        /*底部描述 加 banner*/
        .container-fluid>.title{
            max-width: 850px;
            margin: 150px auto 39px;
            line-height: 1;
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            color:#646464;
        }
        .container-fluid>.desc{
            max-width: 850px;
            margin: 0 auto 70px;
            font-size: 14px;
            text-align: center;
            color:#646464;
        }

        .banner2-container{
            position: relative;
            padding-bottom: 20px;
            cursor: -webkit-grab;
        }

        .banner2-container .banner2-nav .owl-prev{left: 10px}
        .banner2-container .banner2-nav .owl-prev .fa{margin-right: 3px}
        .banner2-container .banner2-nav .owl-next{right: 10px}
        .banner2-container .banner2-nav .owl-next .fa{margin-left: 3px}
        .banner2-container .banner2-nav .owl-prev,
        .banner2-container .banner2-nav .owl-next{
            position: absolute;
            z-index:30;
            top: 50%;
            margin-top: -50px;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: rgba(220, 220, 220, .4);
            line-height: 80px;
            font-size: 80px;
            color: rgba(0, 0, 0, .3);
            text-align: center;
            cursor: pointer;
        }
        @media screen and (max-width: 1199px){
            .container-fluid>.title{
                margin-top: 120px;
            }
            .banner2-container .banner2-nav .owl-prev,
            .banner2-container .banner2-nav .owl-next{
                margin-top: -35px;
                width: 50px;
                height: 50px;
                line-height: 50px;
                font-size: 50px;
            }
        }
        @media screen and (max-width: 991px){
            .container-fluid>.title{
                margin: 100px auto 30px;
                font-size: 36px
            }
        }
        @media screen and (max-width: 767px){
            .container-fluid>.title{
                margin: 80px auto 30px;
                font-size: 26px
            }
            .container-fluid>.desc{
                margin: 0 auto 50px;
            }
            .banner2-container{padding-bottom: 10px}
        }
        @media screen and (max-width: 480px){
            .container-fluid>.title{
                margin:50px auto 20px;
                font-size: 18px
            }
            .container-fluid>.desc{
                margin: 0 auto 20px;
                font-size: 12px;
                text-align: left;
            }
        }
        /*底部两个按钮*/
        .container-fluid>.title2{
            margin: 40px auto 30px;
            font-size: 30px;
            font-weight: bold;
            color: #646464;
            text-align: center;
        }
        .btn-download{
            width: 200px;
            margin-bottom: 40px;
            padding: 8px 12px;
            font-size: 14px;
        }
        .btn-download + .btn-download{
            margin-left: 45px;
        }
        @media screen and (max-width: 1199px){
            .dibu-img{
                width: 300px;
                height: 250px;
            }

            .btn-download + .btn-download{
                margin-left: 35px;
            }
        }
        @media screen and (max-width: 991px){
            .dibu-img{
                max-width: 240px;
                max-height: 200px;
            }
        }
        @media screen and (max-width: 767px){
            .container-fluid>.title2{
                font-size: 26px;
            }
            .dibu-img{
                max-width: 192px;
                max-height: 160px;
            }
            .btn-download{margin-top: 20px}
            .btn-download + .btn-download{
                margin-left: 20px;
            }
        }
        @media screen and (max-width: 480px){
            .container-fluid>.title2{
                font-size: 22px;
            }
            .dibu-img{
                max-width: 153px;
                max-height: 128px;
            }
            .btn-download{
                margin-bottom: 0;
            }
            .btn-download + .btn-download{
                margin-left: 0;
                position: relative;
            }
            .btn-download + .btn-download:before{
                display: block;
                position: absolute;
                content: '';
                height: 100%;
                width: 1px;
                top:0;
                left: -1px;
                background-color: rgba(100, 100, 100, .5)
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
    <div class="container-fluid banner">
        <!--<img class="img-responsive" src="/Public/img/home/led-neon-lights/led-neon-lights-banner.jpg" alt="ltechlighting flexible neon led lights">-->
        <div class="title-wrapper">
            <h1 class="name">Flexible Neon LED Lights</h1>
            <h2 class="desc">The perfect replacement for traditional glass neon</h2>
        </div>
    </div>
    <!--两段描述-->
    <div class="container description">
        <div class="row">
            <div class="col-sm-6">
                <div class="desc1-wrapper">
                    <p class="desc1">
                        LTECH Technology Flexible Neon LED Lights has been carefully selected to be a high quality product suitable for installation both indoors and outdoors.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="desc2-wrapper">
                    <p class="desc2">
                        Manufactured as a cost effective replacement for expensive traditional glass neon,
                        the product is much safer, more durable, and more efficient. Installation is straightforward
                        without tools and we can provided the accessories required to transform your project into a glorious masterpiece of colour and light.
                    </p>
                    <p class="desc2">
                        The LTECH Technology flexible Neon control by LTECH RGB controller which producing up to 16
                        million colour variations, DMX controller for super easy color changing and color programming,
                        also can control by 1-10V Analogue Dimming (cBus, Dynalite) and the Digital Dimming (DALI) .
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--多个组合图片轮播-->
    <div class="container owl-container">
        <div class="row" id="layer-photos">
            <div class="owl-carousel ">
                <!--第一轮图片-->
                <div class="img-wrapper">
                    <img class="img-responsive"
                         src="/Public/img/home/led-neon-lights/led-neon-lights-warm-white@1.5.jpg"
                         layer-src="/Public/img/home/led-neon-lights/led-neon-lights-warm-white@1.5.jpg"
                         alt="ltechlighting flexible neon led lights warm white">

                    <div class="inner-wrapper">
                        <div class="row">
                            <div class="col-xs-6 inner-xs-right-5">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/led-neon-lights-white@3.jpg"
                                     layer-src="/Public/img/home/led-neon-lights/led-neon-lights-white@3.jpg"
                                     alt="ltechlighting flexible neon led lights white">
                            </div>
                            <div class="col-xs-6 inner-xs-left-5">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/led-neon-lights-red@3.jpg"
                                     layer-src="/Public/img/home/led-neon-lights/led-neon-lights-red@3.jpg"
                                     alt="ltechlighting flexible neon led lights red">
                            </div>
                        </div>
                    </div>
                </div>
                <!--第二轮图片-->
                <div class="img-wrapper">
                    <img class="img-responsive img-blue"
                         src="/Public/img/home/led-neon-lights/led-neon-lights-blue@1.5.jpg"
                         layer-src="/Public/img/home/led-neon-lights/led-neon-lights-blue@1.5.jpg"
                         alt="ltechlighting flexible neon led lights blue">
                    <img class="img-responsive"
                         src="/Public/img/home/led-neon-lights/led-neon-lights-RGB@1.5.gif"
                         layer-src="/Public/img/home/led-neon-lights/led-neon-lights-RGB@1.5.gif"
                         alt="ltechlighting flexible neon led lights RGB">
                </div>
                <!--第三轮图片-->
                <div class="img-wrapper">
                    <img class="img-responsive"
                         src="/Public/img/home/led-neon-lights/led-neon-lights-orange@1.5.jpg"
                         layer-src="/Public/img/home/led-neon-lights/led-neon-lights-orange@1.5.jpg"
                         alt="ltechlighting flexible neon led lights orange">
                    <div class="inner-wrapper">
                        <div class="row">
                            <div class="col-xs-6 inner-xs-right-5">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/led-neon-lights-green@3.jpg"
                                     layer-src="/Public/img/home/led-neon-lights/led-neon-lights-green@3.jpg"
                                     alt="ltechlighting flexible neon led lights green">
                            </div>
                            <div class="col-xs-6 inner-xs-left-5">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-neon-lights/led-neon-lights-pink@3.jpg"
                                     layersrc="/Public/img/home/led-neon-lights/led-neon-lights-pink@3.jpg"
                                     alt="ltechlighting flexible neon led lights pink">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--前进后退按钮在js里面配置和在css里面调整样式-->
            <div class="owl-nav"> </div>
        </div>
    </div>

    <!--大背景bg ，描述，8个图标和描述-->
    <div class="container-fluid bg">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-6-hide"></div>
                    <div class="col-sm-6">
                        <div class="desc3-wrapper">
                            Widely used in outdoor&indoor lighting for easy installation and excellent color effects,
                            which caused by the beautiful color, high brightness, low fever, energy saving, long life,
                            pure soft and flexible control. It’s hose assembly can be a variety of bending Angle and length
                            cutting, to be all sorts of shapes depend on the actual situation of the ornaments.
                            Using UV protection, pressure, impact resistant, high and low temperature resistance,
                            corrosion resistance, flame retardant materials for the Flexible Neon light housing.
                            Reasonable easy installation of the waterproof and dust-proof structure can be adapted to
                            different kinds of bad environment and high cost performance.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon1"></span>
                            <span class="icon-desc">Flame <br>Resistant</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon2"></span>
                            <span class="icon-desc">UV Resistant</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon3"></span>
                            <span class="icon-desc">Waterproof</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon4"></span>
                            <span class="icon-desc">IK08<br>Protection</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon5"></span>
                            <span class="icon-desc">Solvents<br>Resistant</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon6"></span>
                            <span class="icon-desc">Saltwater<br>Resistant</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon7"></span>
                            <span class="icon-desc">Bending<br>Diameter</span>
                        </div>
                    </div>
                    <div class=" col-xs-6 col-md-3">
                        <div class="icon-wrapper">
                            <span class="icon icon8"></span>
                            <span class="icon-desc">Beam<br>Angle</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--底部描述 加 banner-->
    <div class="container-fluid">
        <p class="title">Application for varieties of scenarios</p>
        <p class="desc">
            This product is designed for garden, square, steps, booth, bridges, hotel, KTV, casino, trademark, logo,
            overpass, river fence, building external wall, the building outline, advertising light boxes, car decoration,
            sightseeing cruise, lighting signs, 3D light-emitting word, it also can be decorated curved lighting,
            embed the abutment and decorated lighting on the ceiling.
        </p>
        <div class="banner2-container">
            <div class=" banner2">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_1.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_2.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_3.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_4.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_5.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_6.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_7.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_8.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_9.jpg" alt="ltech lighting led neon lights application ">
                <img class="img-responsive" src="/Public/img/home/led-neon-lights/application_10.jpg" alt="ltech lighting led neon lights application ">
            </div>
            <div class="banner2-nav"> </div>
        </div>
    </div>
    <!--底部两个按钮-->
    <div class="container-fluid" style="background-color: #f9f9fa;margin-bottom: 20px">
        <p class="title2">FLEXIBLE NEON LED LIGHTS</p>
        <img class="img-responsive center-block dibu-img" src="/Public/img/home/led-neon-lights/dibu_03.jpg" alt="ltechlighting FLEXIBLE NEON LED LIGHTS">
        <div class="row text-center" style="font-size: 0;padding-bottom: 20px">
            <a class="btn btn-download" href="<?php echo U('flexible_neon_led');?>" title="15*25mm Flexible Neon">
                15*25mm Flexible Neon
            </a>
            <a class="btn btn-download" href="/Products/flexible_neon_led.html#tab2" title="8*15mm  Flexible Neon">
                8*15mm  Flexible Neon
            </a>
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
    <!--本页面特有js 轮播banner插件js-->
    <script src="/Public/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                loop: true,
                autoplay: false,
                //autoplayTimeout: 3000,
                autoplayHoverPause: true,
                responsiveClass: true,
                dots: false,
                navContainer: '.owl-nav',
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], //前进、后退 按钮 的内容
                //响应式配置
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    320: {
                        items: 2,
                        margin: 10,
                        nav: true
                    },

                    768: {
                        items: 2,
                        margin: 20,
                        nav: true
                    }
                }
            });
            $('.banner2').owlCarousel({
                loop: true,
                autoplay:true,
                autoplayTimeout: 5000,
                autoplaySpeed:5000,
                autoplayHoverPause: false,
                responsiveClass: true,
                dots: false,
                navContainer: '.banner2-nav',
                navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'], //前进、后退 按钮 的内容
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    320: {
                        items: 2,
                        margin: 10,
                        nav: false
                    },
                    481: {
                        items: 3,
                        margin: 10,
                        nav: false
                    },

                    768: {
                        items: 3,
                        margin: 20,
                        nav: true
                    },
                    992: {
                        items: 4,
                        margin: 20,
                        nav: true
                    }
                }
            });
        });
        //图片查看器
        layer.ready(function () { //为了layer.ext.js加载完毕再执行
            layer.photos({
                photos: '#layer-photos',
                shift: 0 //0-6的选择，指定弹出图片动画类型，默认随机
            });
        });
    </script>
           
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>