<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>News | ltechlighing news</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
        <meta name="description" content="there are our company news after ltechlighting set up">
        <meta name="keywords" content="news led lighting linear lights tube t8">      

        <link rel="icon" href="/favicon.ico">

        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/Public/css/font-awesome.css" rel="stylesheet" >

        <!--[if lt IE 9]>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--自定义的CSS，一定要放在bootstrap后面-->
        <link href="/Public/css/common.css" rel="stylesheet" >
        <link href="/Public/css/project-news.css" rel="stylesheet" >
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
<nav class="navbar navbar-default navbar-fixed-top m-b-0">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed " data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img class="img-responsive" src="/logo.png" alt="logo" /></a>
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
        <div class="row row-block">
            <div class="col-xs-12">
                <div class="news-breadcrumb">
                    <a href="/" title="Home">Home</a><span>/</span>
                    <a href="<?php echo U('Index/about');?>" title="About us">About us</a><span>/</span>
                    <a class="active" title="News">News</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-lg-3 ">
                <!--新闻列表-->
                <?php
$listdata = array('status' => 1); $limit = 10; $list = D("News")->select($listdata,$limit); ?>
<div class="border">
    <div class="news-list text-center">NEWS LIST</div>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list">
            <div class="content-box">
                <a class="content" href="<?php echo U('News/detail',array(id =>$list[news_id] ));?>" title="<?php echo ($list["title"]); ?>"><?php echo ($list["title"]); ?></a>
                <a class="icon" href="<?php echo U('News/detail',array(id =>$list[news_id]));?>" title="<?php echo ($list["title"]); ?>"><i class="fa fa-angle-right"></i></a>
            </div>
        </div><?php endforeach; endif; ?>
</div>
                <div class="border">
                    <div class="input-container center-block">
                        <input id="searchValue" type="text" class="input-news center-block" value="<?php echo ($keyword); ?>">
                        <div class="search-icon"><i class="glyphicon glyphicon-search"></i></div>
                    </div>
                    <button id="search" class="btn btn-download btn-news center-block box-shadow" >Search</button>
                    <div class="input-container center-block text-center" style="margin-top: 50px;">
                        <b>CONTACT US BY TELEPHONE</b>

                        <span class="contactus">+86 756-8676220</span>
                    </div>

                </div>    
                <div class="border" style="background-color: #eee;">
                    <div class="input-container center-block text-center">
                        <b>DOWNLOAD OUR CATALOGUE</b>
                    </div>
                    <div class="input-container center-block text-center catalogue-download box-shadow" >
                        <a href='<?php echo ($catalogue["path"]); ?>'> <i class="fa fa-file-pdf-o active"></i> 2016 CATALOGUE.PDF</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-lg-9">
                <?php if($res == 'no'): ?><p class='text-center' style="color: #e62129">Sorry,do not exists this news.</p><?php endif; ?>
                <?php if(is_array($newslist)): foreach($newslist as $key=>$news): ?><div class="row row-block lg-padding">
                        <div class="col-lg-9 col-sm-8 ">
                            <a href="<?php echo U('News/detail',array('id' => $news[news_id]));?>"><p class="news-title"><?php echo ($news["title"]); ?></p></a>
                            <p class="news-description"><?php echo ($news["description"]); ?></p>
                            <a href="<?php echo U('News/detail',array('id' => $news[news_id]));?>"><span style="color: #e62129">Read More</span></a>
                        </div>
                        <div class="col-lg-3 col-sm-4">
                            <p class="news-date center-block"><?php echo (date("m-d",$news["create_time"])); ?></p>
                            <p class="news-year center-block"><?php echo (date("Y",$news["create_time"])); ?></p>
                        </div>
                    </div><?php endforeach; endif; ?>
                <div class='page'><?php echo ($pager); ?></div>
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
                        <div class="contact-box"><i class="icon-phone icon-color"></i>&nbsp; &nbsp; +86 756-8676 220</div>
                        <div class="contact-box"><i class="icon-mail icon-color"></i>&nbsp; &nbsp; <a style="color:#fff;" href="mailto:lt@ltechlighting.com">lt@ltechlighting.com</a></div>
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
        <div class="row ">
            <div class="col-xs-12 col-sm-6 clearfix">
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
        var SCOPE = {
            search_url:"<?php echo U('News/index');?>"
        };
    </script>
           
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>