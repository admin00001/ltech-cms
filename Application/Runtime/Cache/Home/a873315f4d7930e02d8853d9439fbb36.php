<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact us | Ltechlighting Intelligent lighting manufacturer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Contact us to discuss your bespoke requirements and engineer a solution for you. Please feel free to contact us with your requirement.Our t8 tube lamps lighting is waiting for you. ">
    <meta name="keywords"
          content="LED t8 tube lamps ,lighting,LED Troffer,LED troffer lighting,commercial lighting, residential lighting">

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
        .box-shadow {
            padding-top: 20px;
            padding-bottom: 20px;
            box-shadow: 0 5px 10px rgba(100, 100, 100, .5);
        }

        .box-parent {
            display: table;
        }

        .box {
            display: table-cell;
            vertical-align: middle;
            padding-left: 10px;

        }

        .box em.phone-number {
            font-size: 30px;
            color: #333;
        }

        @media screen and (min-width: 1200px) {
            .box {
                max-width: 280px;
            }
        }

        @media screen and (min-width: 992px) and (max-width: 1199px) {
            .box {
                max-width: 220px;
            }

            .box em.phone-number {
                font-size: 24px;
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .box {
                max-width: 220px;

            }

            .box em.phone-number {
                font-size: 20px;
            }

            .sm-hide {
                display: none;
            }
        }

        @media screen and (max-width: 767px) {
            .container-xs-hide {
                display: none;
            }

        }

        .form-div {
            margin-left: auto;
            margin-right: auto;
            background-color: #eee;
        }

        .form-max {
            margin-left: auto;
            margin-right: auto;
            max-width: 800px;
            padding: 10px;
        }

        .form-horizontal .form-group {
            margin-right: -10px;
            margin-left: -10px;
        }

        .error {
            color: #F00;
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

        <!--<div class="center-bloack"><img src="/Public/img/home/contact-bg.jpg" alt="" class="img-responsive"/></div>-->
        <div id="googleMap" style="width:100%;height:350px; background: url('/Public/img/home/contact-bg.jpg') center center no-repeat;"></div>

    </div>
</div>

<div class="container  container-xs-hide">
    <div class="row  row-block ">
        <div class="col-xs-12">
            <div class="center-block box-shadow clearfix ">
                <div class="col-sm-6 box-parent">
                    <div class="box">
                        <img class="img-responsive " src="/Public/img/home/contact-pic1.jpg" alt="contact us">
                    </div>
                    <div class="box">
                        <p>Contact us by telephone and speak to one of our experts on</p>
                        <em class="phone-number">+86 756-8676220</em>
                        <p class="sm-hide">We are always happy to speak to you on the telephone and listen so that we
                            can understand exactly your LED lighting requirements.</p>
                    </div>
                </div>

                <div class="col-sm-6 box-parent">
                    <div class="box">
                        <img class="img-responsive" src="/Public/img/home/contact-pic2.jpg" alt="contact us">
                    </div>
                    <div class="box">
                        <p>Please contact us to discuss your bespoke requirements and engineer a solution for you.
                            Please feel free to contact us with your requirements.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="form-div row-block ">
        <form id="form" class="form-horizontal form-max">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-center">
                    <h2 class=" text-center center-block">GET IN TOUCH BY EMAIL</h2>
                </div>
            </div>
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name<span style="color:#F00;">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" required="required" name="name"
                           placeholder="Name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputCompany" class="col-sm-2 control-label">Company<span style = "color:#F00;">*</span></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCompany" name="company" placeholder="Company">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email<span style="color:#F00;">*</span></label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="inputEmail" required="required" name="email"
                           placeholder="Email">
                </div>
                <label for="inputPhone" class="col-sm-2 control-label">Phone</label>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" id="inputPhone" name="tel" placeholder="Phone">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Message</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="6" name="message" id="message"
                              placeholder="Message..."></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 text-center">
                    <button id="send" class="btn btn-download box-shadow" style="padding:8px 30px;">Send message
                    </button>
                </div>
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
<script src="/Public/js/Home/jquery.validate.min.js"></script>
<script>
    var SCOPE = {
        'email_contact_url': "<?php echo U('Email/contact');?>"
    };
</script>
<script src="/Public/js/Home/contact.js"></script>
<script>
    function initialize() {
        var mapCenter = {lng:113.492789,lat:22.224443};//地图中心点 南屏科技广场,经纬度表示

        var map = new google.maps.Map(document.getElementById("googleMap"),{
            center:mapCenter,
            zoom:15,//缩放级数
            mapTypeId:google.maps.MapTypeId.ROADMAP //地图显示类型，有4种，这里是 普通的街道地图
        });
        var marker = new google.maps.Marker({
            position: mapCenter,
            animation:google.maps.Animation.BOUNCE,
            map: map
        });
        var infowindow = new google.maps.InfoWindow({
            content:"LTECH Lighting Technology"
        });

        infowindow.open(map,marker);
    }

</script>
<!--谷歌地图apiKEY 注册邮箱是社交账号 登陆地址https://console.developers.google.com/apis/-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDJk47toKS1ej0jFy9HoTYgRARsXYPZFgs&sensor=true&callback=initialize" async defer></script>
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>