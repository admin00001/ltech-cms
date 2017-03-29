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
    <link href="/Public/css/font-awesome.css" rel="stylesheet" >
    <!--banner插件css-->
    <link href="/Public/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet">
    <link href="/Public/owl.carousel.2.0.0-beta.2.4/assets/owl.theme.default.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--自定义的CSS，一定要放在bootstrap后面-->
    <link href="/Public/css/common.css" rel="stylesheet" >
    <style>
        /*产品类型页 轮播按钮样式*/
        .owl-nav-container{position: relative;}
        .owl-nav{
            position:absolute;
            top:50%;
            left:0;
            right:0;
            transform: translateY(-50%);
        }
        .owl-nav .owl-next,.owl-nav .owl-prev{
            position: relative;
            color:#d0c8ba;
            cursor:pointer;
        }
        .owl-nav .owl-next .fa-angle-right ,.owl-nav .owl-prev .fa-angle-left{
            position:absolute;
            top:50%;
            transform: translateY(-50%);
        }
        .owl-nav .owl-prev .fa-angle-left{
            left:-20px;
        }
        .owl-nav .owl-next .fa-angle-right{
            right:-20px;
        }

        @media screen and (max-width:800px){
            .owl-nav {
                z-index: 99;
            }
            .owl-nav .owl-prev .fa-angle-left{
                left:10px;
                background-color: rgba(150,150,150,.6);
            }
            .owl-nav .owl-next .fa-angle-right{
                right:10px;
                background-color: rgba(150,150,150,.6);
            }
        }
        @media screen and (max-width: 480px) {
            h2.type-title{
                font-size: 18px;
                font-weight: bold;
            }
            .type-introduce{font-size: 12px;}
            .col-xxs-thumbnail-width {
                width: 50%;

            }
            .col-xxs-thumbnail-width > .xxs-thumbnail-width{
                margin-bottom: 10px;
            }
            .col-xxs-thumbnail-width:nth-of-type(even){
                padding-left: 5px;
            }
            .col-xxs-thumbnail-width:nth-of-type(odd){
                padding-right: 5px;
            }
            .col-xxs-thumbnail-width .caption{
                font-size: 12px;
                text-align: center;
            }
            .col-xxs-thumbnail-width .caption>span.name{
                margin-right: 0;
                font-size: 18px;
            }
            .col-xxs-thumbnail-width .caption>a.view{display: none}

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

<div class="container-fluid" >
    <div class="row">
        <div class="center-block"><img src="/Public/img/home/products-type-bg.jpg" alt="led linear lights" class="img-responsive center-block" /></div>
    </div>
</div>
<!--products type banner -->
<div class="container owl-nav-container" style="margin: 20px auto;">
    <div class="owl-carousel">
        <?php if(is_array($typeBanner)): foreach($typeBanner as $key=>$vo): ?><div class="img-responsive  center-block">
                <a href="<?php echo U('Products/type','id='.$vo[id]);?>" title='<?php echo ($vo["name"]); ?>'>
                    <img src="<?php echo ($vo["thumb"]); ?>" alt="" class="img-responsive">
                </a>
            </div>
            <?php if($vo[id] == 3): ?><!--这里多了一张led-troffers-lt1c-series 图片，是额外添加的-->
                <div class="img-responsive  center-block">
                    <a href="<?php echo U('Products/type','id=3');?>" title='led troffers lights'>
                        <img src="/Public/img/home/led-troffers-lt1c.jpg" alt="led troffers lights"
                             class="img-responsive">
                    </a>
                </div><?php endif; endforeach; endif; ?>
    </div>
    <!--前进后退按钮-->
    <div class="owl-nav"> </div>
</div>
<div class="container">
    <!--面包屑导航-->
    <div class="row">
        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="<?php echo U('Products/index');?>">Products</a></li>   
                <li class='active'><?php echo ($type["name"]); ?></li>
            </ol> 
        </div>
    </div>
    <!--产品类型介绍-->
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2 class="type-title">WHY WE LOVE <span class="text-uppercase"><?php echo ($type["name"]); ?></span></h2>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <!--产品类型介绍-->
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <p class="type-introduce"><?php echo ($type["introduce"]); ?></p>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>

<!--产品列表-->
<div class="container" style="margin: 60px auto;">
    <div class="row" >
        <?php if(is_array($products)): foreach($products as $key=>$product): ?><div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
                <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                    <a href="<?php echo U('Products/product','id='.$product[products_id]);?>" title='<?php echo ($type["name"]); ?> | <?php echo ($product["name"]); ?>'><img class="img-responsive" src="<?php echo ($product["thumb"]); ?>" alt=""></a>
                    <div class="caption">
                        <span><?php echo ($type["name"]); ?></span>
                        <br>
                        <span  class='name'><?php echo ($product["name"]); ?></span>
                        <a class='view' href="<?php echo U('Products/product','id='.$product[products_id]);?>" title='<?php echo ($product["name"]); ?>'>VIEW MORE</a>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
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
<script type="text/javascript">
    $(function () {

        //banner配置        
        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            dots: false,
            navContainer: '.owl-nav',
            navText: ['<i class="fa fa-angle-left fa-4x"></i>', '<i class="fa fa-angle-right fa-4x"></i>'], //前进、后退 按钮 的内容
            //响应式配置
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                320: {
                    items: 2,
                    margin: 5,
                    nav: true
                },
                480: {
                    items: 3,
                    margin: 5,
                    nav: true
                },
                768: {
                    items: 3,
                    margin: 7,
                    nav: true
                },
                992: {
                    items: 3,
                    margin: 10,
                    nav: true
                }
            }
        });
    });
</script>

       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>