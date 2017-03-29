<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>About us | ltechlighting Intelligent lighting manufacturer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
        <meta name="description" content="The LTECH lighting with intelligent lighting controls technology design implements multiple strategies for optimized energy savings.Offer contemporary architectural interior lighting with classic Europe & the USA styling suited to customers who love clean, minimalist design coupled with the latest cutting edge lighting technology. ">
        <meta name="keywords" content="ltech lighting tube lamps LED lighting,LED troffer,LED troffer lighting,commercial lighting, residential lighting">      

        <link rel="icon" href="/favicon.ico">

        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Public/css/font-awesome.css" rel="stylesheet" >

        <!--[if lt IE 9]>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--自定义的CSS，一定要放在bootstrap后面-->
        <link href="/Public/css/common.css" rel="stylesheet" >
        <style>

            h1.h1{
                color:#646464;
                max-width: 850px;
                font-size: 36px;
                line-height: 1.4;

            }
            h2.h2{
                font-size: 3rem;
                margin-bottom: 60px;
            }
            .about-box{
                max-width: 826px;
            }
            .ball{
                width:100px;
                height: 100px;
                border-radius:50%;
                margin-top:70px;
                border: 2px #727272 solid;
                color: #727272;
                position: relative;
                transition: all .5s;
            }
            .ball:hover{
                background-color: #eee;
                transform: rotate(360deg) scale(1.2);
                
            }
            
            .ball>span{
                position: absolute;
                top:50%;
                left:50%;
                width: 82px;
                transform: translate(-50%,-50%);
                overflow: hidden;
                font-size: 24px;
                text-align: center;

            }
            .img-container{
                background-color: #eee;
                padding-bottom: 90px;
                padding-top: 70px;
                margin-top: 55px; 
            }


            .img-box-container{
                max-width: 100%;
                padding: 10px;
            }
            .img-box-container>.left-box{
                position: relative;
                float: left;  
                width: calc(50% - 5px);
                max-width: 570px;
                margin-right: 10px;
                margin-bottom: 10px;
                overflow: hidden;
            }
            .img-box-container>.right-box{
                position: relative;
                float: left;  
                width: calc(50% - 5px);
                max-width: 570px;
                overflow: hidden;
            }


            .left-box .left-box,.left-box .right-box{
                position: relative;
                float: left;   
                margin-bottom: 10px;
                max-width: 280px;
                overflow: hidden;
            }
            .left-box .left-box{
                margin-right: 10px;  
            }
            .left-box .img-box{
                position: relative;
                overflow: hidden;
            }

            .right-box .left-box{
                position: relative;
                float: left;   
                margin-right: 10px;
                max-width: 280px;
                overflow: hidden;

            }

            .right-box .right-box{
                position: relative;
                float: left;
                max-width: 280px;
                overflow: hidden;
            }
            .right-box>.img-box{
                position: relative;
                margin-bottom: 10px;
                overflow: hidden;
            }
            .left-box .left-box:hover span,
            .left-box .right-box:hover span,
            .left-box .img-box:hover span,
            .right-box .left-box:hover span,
            .right-box .img-box:hover span{
                display: block;
                transition: all 700ms;
            }
            .left-box .left-box:hover img,
            .left-box .right-box:hover img,
            .left-box .img-box:hover img,
            .right-box .left-box:hover img,
            .right-box .img-box:hover img{
                transform:scale(1.1);
                transition: all 700ms;
            }

            /*hover显示字*/
            .left-box>span.text,
            .right-box>span.text,
            .img-box>span.text{
                display: none;
                position:absolute;
                width: 90%;
                top:50%;
                left: 50%;
                transform: translate(-50%,-50%);
                text-align: center;
                color: #fff;
                font-size: 18px;
                z-index: 20;
                transition: all 700ms;

            }
            /*hover出现蒙版*/
            .left-box>span.hover,
            .right-box>span.hover,
            .img-box>span.hover{
                display: none;
                position:absolute;
                top:0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: rgba(100,100,100,.6);
                transition:all 700ms;
            }
            @media screen and (max-width:1199px){
                .img-box-container>.left-box, .img-box-container>.right-box{
                    max-width: 570px;
                    width: 100%;
                    margin-left: auto;
                    margin-right: auto;
                    float: none;
                }

                .left-box .left-box,.left-box .right-box{
                    width: calc(50% - 5px);
                    float: left;
                }
                .left-box .left-box{
                    margin-right: 10px; 
                }
                .right-box .left-box{
                    width:calc(50% - 5px);
                    float: left;
                    margin-right: 10px;
                    height: 100%;
                }
                .right-box .right-box{
                    width: calc(50% - 5px);
                    float: left;
                    margin-right: 0; 
                }
                .right-box .img-box{
                    margin-bottom: 10px;
                }

            }
            @media screen and (max-width:480px){
                h2.h2{font-size:2rem;margin-bottom: 20px; color: #323232;}
                .right-box .img-box{
                    margin-bottom: 3.5%;
                }
                .left-box>span.text,.right-box>span.text,.img-box>span.text{
                    font-size: 14px;
                }
            }
            .honor{
                margin-top: 50px;
                background-color: #fff;
            }

            .bg9{
                margin-bottom: 90px;
                background:url("/Public/img/home/about-us/about-us-bg9.jpg") no-repeat  center center;

            }
            @media screen and (min-width:768px){
                .bg9 h1.theme{
                    margin-top: 280px;
                    font-size: 80px;
                    color:#fff;
                    font-weight: 900;   
                }
                .bg9 h1.title{
                    margin-top:100px;
                    font-size: 50px;
                    color:#fff;
                    font-weight: 400;  
                }
                .bg9 p.content{

                    display: block;
                    max-width: 778px;
                    margin: 50px auto;
                    font-size: 14px;
                    color:#fff;
                }
                .bg9 .btn-contact{
                    text-decoration: none;
                    text-align: center;   
                    transition: all ease .6s .1s;
                    cursor:pointer;
                    background: #eeeeee;
                    outline: none;
                    border:0px;
                    padding: 20px;
                    width:240px;
                    display: block;
                    margin: 60px auto;
                    color:#323232;
                    border-radius:5px;
                }
                .bg9 .btn-contact:hover{
                    background: #F00;
                    color:#fff;
                }
            }
            @media screen and (max-width:767px){
                .bg9{background-size: cover;}
                .bg9 h1.theme{
                    font-size: 40px;
                    color:#fff;
                    font-weight: 900;
                }
                .bg9 h1.title{
                    margin-top:30px;
                    font-size: 26px;
                    color:#fff;
                    font-weight: 400;
                }
                .bg9 p.content{
                    display: block;
                    max-width: 778px;
                    margin: 20px auto;
                    font-size: 14px;
                    color:#fff;
                }
                .bg9 .btn-contact{
                    text-decoration: none;
                    text-align: center;
                    transition: all ease .6s .1s;
                    cursor:pointer;
                    background: #eeeeee;
                    outline: none;
                    border:0px;
                    padding: 20px;
                    width:240px;
                    display: block;
                    margin: 60px auto;
                    color:#323232;
                    border-radius:5px;
                }
                .bg9 .btn-contact:hover{
                    background: #F00;
                    color:#fff;
                }

            }
            #fade1,#fade6,#fade7,#fade8,#fade9,#fade10,#fade11,#fade12,#fade13{display: none}
            #fade2,#fade3,#fade4{opacity: 0}
            #fade5{margin-left: -200%}
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
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <img class="img-responsive" src="/Public/img/home/about-us/about-us_03.jpg"  alt="ltechlighting produce basic">
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row" id="fade1">
            <div class="col-xs-12 ">
                <div class="about-box center-block">
                    <h1 class="center-block text-center h1">About us</h1>
                    <p class="text-justify">
                        Guangdong Ltech Lighting Co., Ltd (abbreviation: LTECH lighting) is a subsidiary company of
                        Zhuhai LTECH (abbreviation: LTECH, stock code: 832 110) which research and development,
                        production and sales of intelligent LED lighting for years.Our production foundation is located
                        in High-tech zone, Jiangmen City, Guangdong Province (the subsidiary Jiangmen POTOP
                        Opto-Electronic Technology CO., Ltd.)
                    </p>
                    <p class="text-justify">
                        LTECH lighting is committed to provide users with a smarter, more efficient lighting products,
                        including <a href="/Products/type/id/3.html" target="_blank" title="LED TROFFERS">LED TROFFERS</a>,
                        <a href="/Products/type/id/2.html" target="_blank" title="LINEAR LIGHTS">LINEAR LIGHTS</a>,
                        <a href="/Products/type/id/1.html" target="_blank" title="LED T8 TUBES">LED T8 TUBES</a>,
                        <a href="/Products/type/id/4.html" target="_blank" title="LED NEON FLEXIBLE LIGHTS">LED NEON FLEXIBLE LIGHTS</a>,
                        mainly exported to European and American countries and regions, which are widely used in commercial,
                        industrial, retail and indoor lighting.
                    </p>
                    <p class="text-justify">
                        This <a href="/products.html" target="_blank" title="products">products</a> are popular in the
                        international market benefit by their unique innovative technology and superior product
                        value which made them become the best choice for the international market.
                    </p>
                    <p class="text-justify">
                        LTECH lighting with 15 years of intelligent control technology experience,
                        provide technical support and quality assurance for the development and production of products,
                        with the professional technical strength to create superior lighting products, providing customers with the best LED lighting solutions!
                    </p>

                </div>                
            </div>
        </div>
        <div class=" about-box center-block clearfix" id="fade2">
            <div class="col-sm-4" >
                <div class="ball center-block" >
                    <span>4156㎡</span>
                </div>
                <br>
                <p class="text-center">Area</p>
            </div>
            <div class="col-sm-4" id="fade3">
                <div class="ball center-block" >
                    <span>&gt;200</span>
                </div>
                <br>
                <p class="text-center">Number of Employees</p>
            </div>
            <div class="col-sm-4"  id="fade4">
                <div class="ball center-block">
                    <span>98%</span>
                </div>
                <br>
                <p class="text-center">Export</p>
            </div>
        </div>
    </div>
    <div class="container-fluid img-container ">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center h2" id="fade5">ADVANCED PRODUCTION EQUIPMENTS</h2>
            </div>        
        </div>
        <div class="container img-box-container clearfix" id="fade6">
            <div class="left-box">
                <div class=" clearfix">
                    <div class="left-box ">
                        <img class="img-responsive" src="/Public/img/home/about-us/about-us_06.jpg" alt="Off-line Detector">
                        <span class="hover"></span>
                        <span class="text">Off-line Detector</span>
                    </div>
                    <div class="right-box">
                        <img class="img-responsive" src="/Public/img/home/about-us/about-us_08.jpg" alt="Aging Line">
                        <span class="hover"></span>
                        <span class="text">Aging Line</span>
                    </div>
                </div>

                <div class="img-box">
                    <img class="img-responsive" src="/Public/img/home/about-us/about-us_16.jpg" alt="Lead-free Reflow Machine">
                    <span class="hover"></span>
                    <span class="text">Lead-free Reflow Machine</span>
                </div>
            </div>

            <div class="right-box clearfix">
                <div class="left-box">
                    <img class="img-responsive" src="/Public/img/home/about-us/about-us_10.jpg" alt="Goniophotometers" >
                    <span class="hover"></span>
                    <span class="text">Goniophotometers</span>
                </div>
                <div class="right-box">
                    <div class="img-box">
                        <img class="img-responsive" src="/Public/img/home/about-us/about-us_12.jpg" alt="Placement Machine" >
                        <span class="hover"></span>
                        <span class="text">Placement Machine</span>
                    </div>
                    <div class="img-box">
                        <img class="img-responsive" src="/Public/img/home/about-us/about-us_17.jpg" alt="Integrating Sphere" >
                        <span class="hover"></span>
                        <span class="text">Integrating Sphere</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 honor">
                <h2 class="h2 text-center "> HONOR</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 honor" id="fade7">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_21.jpg" alt="ltechlighting honor">
            </div>
            <div class="col-xs-12 honor" id="fade8">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_23.jpg" alt="ltechlighting honor">
            </div>
            <div class="col-xs-12 honor" id="fade9">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_25.jpg" alt="ltechlighting honor">
            </div>
            <div class="col-xs-12 honor" id="fade10">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_27.jpg" alt="ltechlighting honor">
            </div>
            <div class="col-xs-12 honor" id="fade11">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_29.jpg" alt="ltechlighting honor">
            </div>
            <div class="col-xs-12 honor" id="fade12" style="margin-bottom: 50px;">
                <img class="img-responsive center-block" src="/Public/img/home/about-us/about-us_31.jpg" alt="ltechlighting honor">
            </div>
        </div>
    </div>




    <!--our team-->

    <div class="container-fluid  bg9 " id="fade13">
        <h1  class="text-center theme">Our team</h1>
        <h1  class="text-center title">WHAT IT'S LIKE TO WORK WITH US</h1>
        <p   class="text-center content">
            Our in-house experts and engineers are ready for your remedy of troubles all the time.
            They would be your side whenever you need to check and analysis your problems.
            And then they will give you our suggestions and solutions. We can optimize your 
            existed production line and recommend you the right products, update information 
            or probably potential troubles. You can get to our service via email, telephone or fax. We will be glad to help you.
        </p>
        <a href="<?php echo U('Index/contact');?>" class=" btn-contact">Contact our support team now!</a>
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
        $(document).ready(function(){
            var fade2Top = $('#fade2').offset().top;
            var fade7Top = $('#fade7').offset().top;


            $('#fade1').fadeIn(2000).removeAttr('id');
            $(window).on('scroll',function(){
                if( $(this).scrollTop() > fade2Top-200){
                    $('#fade2').animate({opacity: 1},800, function () {
                        $('#fade2').removeAttr('id');
                        $('#fade3').animate({opacity: 1},700, function () {
                            $('#fade3').removeAttr('id');
                            $('#fade4').animate({opacity: 1},600).removeAttr('id');
                        });
                    });


                }
                if( $(this).scrollTop() > fade2Top){
                    $('#fade5').animate({marginLeft: 0},1000,function () {
                        $('#fade5').removeAttr('id');
                        $('#fade6').show(2000).removeAttr('id');
                    });
                }
                if( $(this).scrollTop() > fade7Top+1200){
                    $('#fade7').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+1500){
                    $('#fade8').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+1800){
                    $('#fade9').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+2100){
                    $('#fade10').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+2400){
                    $('#fade11').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+2700){
                    $('#fade12').fadeIn(2000).removeAttr('id');
                }
                if( $(this).scrollTop() > fade7Top+3100){
                    $('#fade13').fadeIn(2000).removeAttr('id');
                }

            });

        });
    </script>
           
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>