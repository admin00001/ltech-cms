<?php if (!defined('THINK_PATH')) exit(); $active = 'Products'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>led linear light fixture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="The L-linear LED luminaire is an energy-efficient, low maintenance alternative to traditional linear fluorescent in a variety of commercial, low bay LED Linear lighting applications.With high energy efficiency of up to 115 lm/w, the costs will be lower and the efficiency will be higher than other LED lighting solution.">
    <meta name="keywords"
          content="LED Linear lighting ,linear LED fixture, LED lighting ,Linear light,linear LED,lighting solution,LED linear lights, LED Linear lighting ,Supermarket Lighting">

    <link rel="icon" href="/favicon.ico">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--自定义的CSS，一定要放在bootstrap后面-->
    <link href="/Public/css/common.css" rel="stylesheet">
    <style>
        body {
            color: #646464;
        }

        h4 {
            line-height: 1;
            color: #646464;
        }

        .linear-top-bg {
            background: url('/Public/img/home/led-linear-lights/linear-top.jpg') center center no-repeat;
            background-size: cover;
            height: 550px;
            margin-right: auto;
            margin-left: auto;
        }

        .top {
            height: 220px;
            background-color: #e50012;
            background-color: rgba(229, 0, 18, .8);
            color: #fff;
            margin-top: 150px;
        }

        .top h1 {
            font-size: 60px;
            margin-left: 70px;
            padding-top: 55px;
            font-weight: bold;
        }

        .top h2 {
            font-size: 30px;
            margin-left: 70px;
        }

        @media screen and (max-width: 1199px) {
            .linear-top-bg {
                height: 450px;
            }

            .top {
                height: 170px;
                margin-top: 100px;
            }

            .top h1 {
                font-size: 50px;
                margin-left: 80px;
                padding-top: 35px;
            }

            .top h2 {
                font-size: 26px;
                margin-left: 80px;
            }
        }

        @media screen and (max-width: 991px) {
            .linear-top-bg {
                height: 400px;
            }

            .top {
                height: 150px;
                margin-top: 80px;
            }

            .top h1 {
                font-size: 36px;
                margin-left: 70px;
                padding-top: 35px;
            }

            .top h2 {
                font-size: 20px;
                margin-left: 70px;
            }
        }

        @media screen and (max-width: 767px) {
            .linear-top-bg {
                height: 300px;
            }

            .top {
                height: 130px;
                margin-top: 50px;
            }

            .top h1 {
                font-size: 30px;
                margin-left: 30px;
                padding-top: 15px;
            }

            .top h2 {
                font-size: 18px;
                margin-left: 30px;
                margin-top: 15px;
            }
        }

        .description-one {
            border: 6px solid #090909;
            margin-top: -80px;
            margin-right: -80px;
            padding: 130px 170px 70px 100px;
            position: relative;
            z-index: 2;
            font-size: 14px;
        }

        .description-two {
            position: relative;
            margin-top: 50px;
            margin-left: -20px;
            padding: 70px 75px 110px 140px;
            background-color: #424242;
            color: #fafafa;
            font-size: 14px;
            z-index: 1;
        }

        #layer-photos img {
            cursor: pointer;
        }

        #layer-photos img:hover, #layer-photos img:active, #layer-photos img:focus {
            cursor: zoom-in;
            cursor: pointer;
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            box-shadow: 0 5px 10px rgba(100, 100, 100, .35);
        }

        @media screen and (max-width: 1199px) {
            .description-one {
                padding: 120px 120px 70px 60px;
            }

            .description-two {
                padding: 70px 60px 80px 140px;
            }
        }

        @media screen and (max-width: 991px) {
            .description-one {
                margin-top: -60px;
                margin-right: -60px;
                padding: 100px 100px 70px 40px;
            }

            .description-two {
                margin-top: 50px;
                padding: 50px 60px 80px 100px;
            }
        }

        @media screen and (max-width: 767px) {
            .description-one {
                border: none;
                margin-top: 20px;
                margin-right: 0;
                padding: 0;
            }

            .description-two {
                margin-top: 50px;
                margin-left: -10px;
                margin-right: -10px;
                padding: 10px;
            }

            .xs-m-t-2 {
                margin-top: 20px;
            }
        }

        .m-t-2 {
            margin-top: 20px;
        }

        .linear-bg2 {
            background: url('/Public/img/home/led-linear-lights/linear-lights-9.jpg') center center no-repeat;
            background-size: cover;
            height: 550px;
            color: #646464;
            margin-bottom: 24px;
        }

        .linear-bg2 h3 {
            margin-top: 180px;
            font-weight: bold;
        }

        .flex-item h4 {
            font-weight: bold;
        }

        @media screen and (min-width: 768px) {
            .flex-container {
                display: flex;
                display: -webkit-flex;
                flex-direction: row;
                -webkit-flex-direction: row;
                align-items: center;
                -webkit-align-items: center;

            }

            .flex-item {
                float: none !important;
                margin-top: 0;
                margin-bottom: 0;
            }

            .p-l-0 {
                padding-left: 0;
            }

            .p-r-0 {
                padding-right: 0;
            }

            .m-l-7 {
                margin-left: 70px;
            }

            .m-r-7 {
                margin-right: 70px;
            }
        }

        @media screen and (max-width: 767px) {
            .xs-center-block {
                max-width: 595px;
                margin-left: auto;
                margin-right: auto;
            }

            .linear-bg2 {
                height: 350px;
            }

            .linear-bg2 h3 {
                font-size: 24px;
                margin-top: 80px;
            }
        }

        .linear-bg3 {
            background: url('/Public/img/home/led-linear-lights/linear-lights-13.jpg') center center no-repeat;
            background-size: cover;
            width: 370px;
            height: 385px;
            padding: 20px;
            position: relative;
        }

        .linear-bg3 .beam {
            position: absolute;
            top: 20px;
            left: 20px;
            right: 20px;
            bottom: 20px;
            background-color: #fff;
            z-index: 1;
        }

        .linear-bg3 .beam-img {
            z-index: 2;
            position: relative;
        }

        .thumbnail-bg {
            background-color: #fff;
        }

        .thumbnail-bg:hover .img-box img, .thumbnail-bg:focus .img-box img, .thumbnail-bg:active .img-box img {
            opacity: .1;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .thumbnail-bg:hover .img-box .desc, .thumbnail-bg:focus .img-box .desc, .thumbnail-bg:active .img-box .desc {
            display: block;
            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            -ms-transition: all .5s;
            -o-transition: all .5s;
            transition: all .5s;
        }

        .thumbnail-bg .img-box {
            position: relative;
            padding: 0 20px 20px 20px;
        }

        .thumbnail-bg .caption {
            padding-top: 19px;
            padding-bottom: 19px;
        }

        .thumbnail-bg .caption h4 {
            font-weight: bold;
        }

        .thumbnail-bg .caption p.text-center {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            height: 20px;
        }

        .img-box ul.desc {
            display: none;
            padding-right: 30px;
            position: absolute;
            top: 50%;
            margin-top: -50px;
        }

        .img-box ul.desc li {
            margin-bottom: 10px;
        }

        p.solution {
            font-size: 40px;
            font-weight: bold;
            text-align: center;
            color: #646464;
            margin: 20px auto;
        }

        .btn-download {
            width: 157px;
            text-align: center;
        }
        .btn-download + .btn-download{
            margin-left: 15px;
        }

        @media screen and (max-width: 374px){
            .btn-download{
                padding-left: 8px;
                padding-right: 8px;
            }
            .btn-download + .btn-download{
                margin-left: 0;
            }
        }

        @media screen and (max-width: 1199px) {
            .linear-bg3 {
                width: 300px;
                height: 351px;
            }

            .thumbnail-bg .img-box ul.desc {
                padding-right: 25px;
            }
        }

        @media screen and (max-width: 991px) {
            .linear-bg3 {
                width: 228px;
                height: 292px;
            }

            .thumbnail-bg .img-box ul.desc {
                padding-right: 25px;
                margin-top: -80px;
            }

            p.solution {
                font-size: 30px;
            }
        }

        @media screen and (max-width: 767px) {
            .linear-bg3 {
                width: auto;
                height: auto;
            }

            .linear-bg3 .beam {
                display: none;
            }

            .thumbnail-bg .img-box ul.desc {
                padding-right: 25px;
            }

            .thumbnail .caption h4 {
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
                font-weight: bold;
                height: 20px;
            }

            p.solution {
                font-size: 20px;
            }
        }

        @media screen and (max-width: 991px) and (min-width: 768px) {
            .thumbnail .caption h4.ellipsis {
                text-overflow: ellipsis;
                overflow: hidden;
                white-space: nowrap;
                height: 20px;
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

<div class="container-fluid linear-top-bg">
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="top">
                    <h1>L-LINEAR</h1>
                    <h2>A CONTINUOUS RUN LED LINEAR FOR EVERY PROJECT</h2></div>
            </div>
        </div>
    </div>
</div>

<div class="container" id="layer-photos">
    <div class="row" style="margin-bottom:60px;">
        <div class="col-sm-6 xs-xs-12 ">
            <div class="description-one">
                The L-linear LED luminaire is an energy-efficient, low maintenance alternative to traditional linear
                fluorescent in a variety of commercial, low bay LED Linear lighting applications. With high energy
                efficiency of up to 115 lm/w, the costs will be lower and the efficiency will be higher than other
                LED lighting solution. These LED linear lights is compact and sleek in design, pure industrial look,
                with clean, rigid tracks and streamlined directional heads of outstanding quality light in a continuous
                run configuration.

            </div>
        </div>
        <div class="col-sm-6 xs-xs-12 ">
            <div class="description-two">
                It's ideal for industrial, commercial and light assembly applications, extremely simple to mount,
                flexiblely and efficiently. The components can be mount easily and quickly. The L-Linear is the
                best solution to meet your lighting projects when you want to keep the costs low and efficient high.
                The higher efficiency, easy of installaton and operation of the LED Linear lighting System provides
                quality illumination for Warehouse Lighting, Workshop Lighting, Supermarket Lighting all the time.

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-1.jpg"
                 src="/Public/img/home/led-linear-lights/linear-lights-1.jpg" alt="ltechlighting linear lights">
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-xs-12 xs-m-t-2">
                    <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-2.jpg"
                         src="/Public/img/home/led-linear-lights/linear-lights-2.jpg"
                         alt="ltechlighting linear lights">
                </div>
                <div class="col-xs-6 m-t-2">
                    <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-3.jpg"
                         src="/Public/img/home/led-linear-lights/linear-lights-3.jpg" alt="linear lights">
                </div>
                <div class="col-xs-6 m-t-2">
                    <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-4.jpg"
                         src="/Public/img/home/led-linear-lights/linear-lights-4.jpg" alt="linear lights">
                </div>
            </div>
        </div>
    </div>
    <div class="row " style="margin-bottom: 60px;">
        <div class="col-sm-3 col-xs-6 m-t-2">
            <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-5.jpg"
                 src="/Public/img/home/led-linear-lights/linear-lights-5.jpg" alt=" ltechlighting linear lights">
        </div>
        <div class="col-sm-3 col-xs-6 m-t-2">
            <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-6.jpg"
                 src="/Public/img/home/led-linear-lights/linear-lights-6.jpg" alt=" ltechlighting linear lights">
        </div>
        <div class="col-sm-3 col-xs-6 m-t-2">
            <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-7.jpg"
                 src="/Public/img/home/led-linear-lights/linear-lights-7.jpg" alt=" ltechlighting linear lights">
        </div>
        <div class="col-sm-3 col-xs-6 m-t-2">
            <img class="img-responsive" layer-src="/Public/img/home/led-linear-lights/linear-lights-8.jpg"
                 src="/Public/img/home/led-linear-lights/linear-lights-8.jpg" alt=" ltechlighting linear lights">
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row linear-bg2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 xs-center-block">
                    <h3 style="margin-bottom: 0;">DESIGN & FREE MAINTENANCE</h3>
                    <br>
                    <P>
                        Easy to install, Simple to use, the low maintenance solution. the L-Linear can be simply
                        installed without tools,
                        the LED battens and accessories can be clipped in to place really easily and precisely, that
                        means less time
                        and money spent designing, wiring, installing and commissioning your lighting project.
                    </P>
                </div>
            </div>
        </div>
    </div>
</div>
<!--flex-container-->
<div class="container">
    <div class="row flex-container">
        <div class="col-sm-6  flex-item p-r-0">
            <img class="img-responsive center-block" src="/Public/img/home/led-linear-lights/linear-lights-10.jpg"
                 alt="ltech lighting l-linear">
        </div>
        <div class="col-sm-6  flex-item p-l-0 ">
            <div class="col-sm-11 xs-center-block">
                <h4 class="m-l-7 text-uppercase">HIGH ENERGY EFFICIENCY OF UP TO 115 LM/W</h4>
                <p class="m-l-7">The L-Linea's lens optical system produces a precise light distribution, efficiently
                    save more energy.</p>
                <p class="m-l-7">Furthermore, the reductions in energy consumption help companies to meet energy
                    efficiency in environment protection.</p>
            </div>
        </div>
    </div>
    <div class="row flex-container">
        <div class="col-sm-6 col-sm-push-6 flex-item p-l-0">
            <img class="img-responsive center-block" src="/Public/img/home/led-linear-lights/linear-lights-11.jpg"
                 alt="ltech lighting l-linear lights">
        </div>
        <div class="col-sm-6 col-sm-pull-6 flex-item p-r-0">

            <div class="col-sm-1"></div>
            <div class="col-sm-11 xs-center-block">
                <h4 class="m-r-7 text-uppercase">Continuous run configuration</h4>
                <p class="m-r-7">
                    The L-Linear can be extended endlessly via a range of add-on modules,
                    Can meet any demand of the length, brings more convenience for your project.
                </p>
            </div>
        </div>
    </div>

    <div class="row flex-container">
        <div class="col-sm-6 flex-item p-r-0">
            <img class="img-responsive center-block" src="/Public/img/home/led-linear-lights/linear-lights-12.jpg"
                 alt="ltech lighting l-linear lights">
        </div>
        <div class="col-sm-6  flex-item p-l-0 ">
            <div class="col-sm-11 xs-center-block">
                <h4 class="m-l-7 text-uppercase">INTELLIGENT LINEAR CONTROLS</h4>
                <p class="m-l-7">
                    The L-linear LED fixture can be compatible with DALI dimming system,
                    0-10V/1-10V dimming and wireless controls for increased energy savings.
                </p>

            </div>
        </div>
    </div>
</div>
<!--flex-container end-->
<div class="container">
    <div class="row m-t-2">
        <div class=" col-lg-2 col-sm-1"></div>
        <div class=" col-lg-8 col-sm-10 xs-center-block">
            <h3 class="text-center text-uppercase" style="font-weight: bold;margin-bottom: 0;">Different Light
                distribution in different applications</h3>
            <br>
            <p class="text-center">
                In order to be able to deliver the LED lighting precisely and effectively direct to the source,
                L-Linear light has five application specific beam angles for your needs.
            </p>
            <p class="text-center">
                The development of the lens optics direct of the light emitted create a very high efficacy.
            </p>
        </div>
        <div class="col-lg-2 col-sm-1"></div>
    </div>
</div>
<div class="container">
    <div class="row row-block">
        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width ">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="linear-bg3">
                    <img class="img-responsive beam-img"
                         src="/Public/img/home/led-linear-lights/linear-lights-14.jpg" alt="linear lights beam">
                    <div class="beam"></div>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width ">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="caption">
                    <h4 class="text-center">PRODUCTION LINE & FACTORIES</h4>
                    <p class="text-center">Light distribution: Wide beam </p>
                </div>
                <div class="img-box">
                    <img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights-15.jpg">
                    <ul class="desc ">
                        <li>High-precision wide-beam optics for energy-efficient excellent quality lighting</li>
                        <li>Mounting height: ideal up to 8 m</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="caption">
                    <h4 class="text-center">SUPERMARKET & SHOPPING MALL</h4>
                    <p class="text-center">Light distribution: Double Asymmetric</p>
                </div>
                <div class="img-box">
                    <img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights-16.jpg">
                    <ul class="desc">
                        <li>Precise double asymmetric light distribution, optimised for standard mounting heights</li>
                        <li>Mounting height: ideal up to 3.5 m</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="caption">
                    <h4 class="text-center">ART GALLERY</h4>
                    <p class="text-center">Light distribution: Asymmetric</p>
                </div>
                <div class="img-box ">
                    <img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights-17.jpg">
                    <ul class="desc">
                        <li> Precise asymmetric light distribution, optimised for standard mounting heights</li>
                        <li>Mounting height: ideal up to 3.5 m</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="caption">
                    <h4 class="text-center">WAREHOUSES</h4>
                    <p class="text-center">Light distribution: Concentrated beam </p>
                </div>
                <div class="img-box ">
                    <img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights-18.jpg">
                    <ul class="desc">
                        <li> Precise concentrated-beam lighting for energy-efficient lighting of warehouse zones</li>
                        <li>Mounting height: ideal from 6 to 12 m</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
            <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                <div class="caption">
                    <h4 class="text-center ellipsis">MULIT STOREY CAR PARK </h4>
                    <p class="text-center "> Light distribution: Round beam</p>
                </div>
                <div class="img-box">
                    <img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights-19.jpg">
                    <ul class="desc">
                        <li> With high-grade frosted rectangular polycarbonate diffuser for uniform light distribution
                        </li>
                        <li>Mounting height: ideal up to 3.5 m</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #fafafa;padding-bottom: 60px;">
    <div class="container">
        <img class="img-responsive center-block" src="/Public/img/home/led-linear-lights/linear-lights-20.png"
             alt=" ltech linear lights">
        <p class="solution">L-LINEAR LUMINAIRE SOLUTIONS</p>
        <div class="row text-center">
            <a class="btn btn-download" style="margin-top: 10px;"
               href="<?php echo U('Products/linear_lights');?>" title="L-Linear lights">L-Linear lights</a>
            <a class="btn btn-download" style="margin-top: 10px;" href="/Products/linear_lights.html#Accessories"
               title="L-Linear Accessories">L-Linear Accessories</a>
        </div>
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
<script>
    //图片查看器
    layer.ready(function () { //为了layer.ext.js加载完毕再执行
        layer.photos({
            photos: '#layer-photos',
            shift: 0 //0-6的选择，指定弹出图片动画类型，默认随机
        });
    });
</script>
<!--Google Code for LED Linear lights Conversion Page-->
<!--<script type="text/javascript">-->
    <!--/* <![CDATA[ */-->
    <!--var google_conversion_id = 876644028;-->
    <!--var google_conversion_language = "en";-->
    <!--var google_conversion_format = "3";-->
    <!--var google_conversion_color = "ffffff";-->
    <!--var google_conversion_label = "Di_TCJ-f2msQvI2CogM";-->
    <!--var google_remarketing_only = false;-->
    <!--/* ]]> */-->
<!--</script>-->
<!--<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">-->
<!--</script>-->
<!--<noscript>-->
    <!--<div style="display:inline;">-->
        <!--<img height="1" width="1" style="border-style:none;" alt=""-->
             <!--src="//www.googleadservices.com/pagead/conversion/876644028/?label=Di_TCJ-f2msQvI2CogM&amp;guid=ON&amp;script=0"/>-->
    <!--</div>-->
<!--</noscript>-->
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>