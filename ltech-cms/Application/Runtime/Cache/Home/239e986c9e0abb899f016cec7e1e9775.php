<?php if (!defined('THINK_PATH')) exit(); $productsConfigName = 'products'; $productsConfig = D("Basic")->get_basic_config($productsConfigName); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo ($productsConfig["name"]); ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo ($productsConfig["description"]); ?>">
    <meta name="keywords" content="<?php echo ($productsConfig["keywords"]); ?>">

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
            background-color: #fbfbfb
        }
        h1 {
            font-size: 30px;
            background-color: #323232;
            color: #fff;
            margin-bottom: 20px;
            padding: 10px 0;
        }

        .c-mb {
            margin-bottom: 20px;
        }

        @media screen and (min-width: 768px) {
            .c-mb {
                margin-bottom: 100px;
            }
        }

        .thumbnail > .caption {
            padding-top: 0;
            padding-bottom: 13px;
        }

        .thumbnail > .caption > span.product-name {
            display: block;
            height: 15px;
            width: 100%;
            font-size: 12px;
            line-height: 15px;
            text-align: center;
        }

        .thumbnail > .caption > span.name {
            display: block;
            height: 32px;
            text-align: center;
            font-size: 30px;
            line-height: 30px;
            margin: 0;
            color: #323232;
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        @media screen and (min-width: 768px) and (max-width: 991px) {
            .thumbnail > .caption > span.name {
                font-size: 20px;
            }
        }
        @media screen and (max-width: 767px){
            .thumbnail > .caption{padding-left: 0;padding-right: 0}
            .thumbnail > .caption > span.name {
                height: 32px;
                font-size:24px;
                line-height: 24px;
            }
        }
        @media screen and (max-width: 480px){
            h1{font-size: 20px;margin: 10px auto; padding: 6px 0;}
            .thumbnail{margin-bottom: 10px}
            .thumbnail > .caption > span.name {
                height: auto;
                font-size:16px;
                line-height: 18px;
            }
            /*双数*/
            .xxs-padding:nth-of-type(even){
                padding-left: 5px;
            }
            /*单数*/
            .xxs-padding:nth-of-type(odd){
                padding-right: 5px;
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
<div class="container-fluid">
    <div class="row">
        <div class="center-block">
            <img src="/Public/img/home/products-banner.jpg"
                 alt="led linear lights"
                 class="img-responsive center-block"/>
        </div>

    </div>
</div>
<div class="container">
    <img src="/Public/img/home/products-top.png" alt="led linear lights" class="img-responsive"
         style="margin-top:-15%; "/>
</div>

<!--products展示-->
<div class="container c-mb">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">PRODUCTS</h1>
        </div>
    </div>

    <div class="row">
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg  ">
                <a href="javascript:void(0); " disabled="true" title='High Bay Lights' style="cursor: not-allowed"><img
                        class="img-responsive" src="/Public/img/home/products/High-Bay-Lights.jpg"
                        alt="ltechlighting High Bay Lights, UFO lights"></a>
                <div class="caption">
                    <span class='name'>High Bay Lights</span>
                    <span class="product-name"></span>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/type','id=4');?>" title=' LED Neon lights ' ><img
                        class="img-responsive" src="/Public/img/home/products/neon-lights.jpg"
                        alt="ltechlighting LED Neon lights "></a>
                <div class="caption">
                    <span class='name'> LED Neon Lights </span>
                    <span class="product-name"></span>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg  ">
                <a href="javascript:void(0); " title='coming soon' style="cursor: not-allowed"><img
                        class="img-responsive" src="/Public/img/home/products/comingsoon.jpg"
                        alt="ltechlighting new  "></a>
                <div class="caption">
                    <span class='name'>Coming Soon</span>
                    <span class="product-name"></span>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/type','id=2');?>" title='LED Linear Lights'><img
                        class="img-responsive" src="/Public/img/home/products/led-linear-lights.jpg"
                        alt="LED Linear Lights "></a>
                <div class="caption">
                    <span class='name' title="LED Linear Lights">LED Linear Lights</span>
                    <span class="product-name"></span>
                </div>
            </div>
        </div>

        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/type','id=1');?>" title='LED T8 Tube'><img
                        class="img-responsive" src="/Public/img/home/products/led-t8-tube.jpg"
                        alt="LED T8 Tube "></a>
                <div class="caption">
                    <span class='name'>LED T8 Tube</span>
                    <span class="product-name"></span>
                </div>
            </div>
        </div>
        <!--TROFFERS系列产品-->

        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=6');?>" title='LED Troffers LT1A-2X4'><img
                        class="img-responsive" src="/Public/img/home/products/lt1a-2x4.jpg"
                        alt="LED Troffers LT1A-2X4"></a>
                <div class="caption">
                    <span class="product-name">LT1A-2X4</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=7');?>" title='LED Troffers LT1A-2X2'><img
                        class="img-responsive" src="/Public/img/home/products/lt1a-2x2.jpg"
                        alt="LED Troffers LT1A-2X2"></a>
                <div class="caption">
                    <span class="product-name">LT1A-2X2</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=8');?>" title='LED Troffers LT1A-1X4'><img
                        class="img-responsive" src="/Public/img/home/products/lt1a-1x4.jpg"
                        alt="LED Troffers LT1A-1X4"></a>
                <div class="caption">
                    <span class="product-name">LT1A-1X4</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=9');?>" title='LED Troffers LT1C-2X4'><img
                        class="img-responsive" src="/Public/img/home/products/lt1c-2x4.jpg"
                        alt="LED Troffers LT1C-2X4"></a>
                <div class="caption">
                    <span class="product-name">LT1C-2X4</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=10');?>" title='LED Troffers LT1C-2X2'><img
                        class="img-responsive" src="/Public/img/home/products/lt1c-2x2.jpg"
                        alt="LED Troffers LT1C-2X2"></a>
                <div class="caption">
                    <span class="product-name">LT1C-2X2</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
        </div>
        <div class=" col-sm-4 col-xs-6 xxs-padding">
            <div class="thumbnail thumbnail-bg ">
                <a href="<?php echo U('Products/product','id=11');?>" title='LED Troffers LT1C-1X4'><img
                        class="img-responsive" src="/Public/img/home/products/lt1c-1x4.jpg"
                        alt="LED Troffers LT1C-1X4"></a>
                <div class="caption">
                    <span class="product-name">LT1C-1X4</span>
                    <span class='name'>LED Troffers</span>
                </div>
            </div>
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

       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>