<?php if (!defined('THINK_PATH')) exit(); $active = 'Products'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LED linear lights</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="ltechlighting led linear lights solutions, features,linear lights accessories ">
    <meta name="keywords" content="led linear lights,linear light fixture,linear track lighting,linear led light fixtures,linear lighting,linear fluorescent light fixtures">

    <link rel="icon" href="/favicon.ico">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/font-awesome.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--自定义的CSS，一定要放在bootstrap后面-->
    <link href="/Public/css/common.css" rel="stylesheet">
    <!--本模板是一次性模板，不用外链css 减少服务器请求，就近维护容易点-->
    <style>
        body {
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

        .tab .tab-head {
            width: 100%;
            border-bottom: 1px solid #646464;
        }

        .tab .tab-head ul.list-inline {
            margin-bottom: 0;
            margin-left: 0;
        }

        .tab .tab-head ul.list-inline li:hover a, .tab .tab-head ul.list-inline li.active a,
        .tab .tab-head ul.list-inline li a:active, .tab .tab-head ul.list-inline li a:focus {
            color: #e50012;
            outline: none;
        }

        .tab .tab-head ul.list-inline li a {
            display: block;
            padding: 30px 50px 10px 50px;
            font-weight: bold;
            font-size: 18px;
            border-bottom: 3px solid #fff;
            text-decoration: none;
            color: #646464;
        }

        @media screen and (max-width: 625px) {
            .tab .tab-head ul.list-inline li a {
                padding: 20px 20px 10px 20px;
                font-size: 16px;
            }
        }

        @media screen and (max-width: 480px) {
            .tab .tab-head ul.list-inline li a {
                padding: 9px;
                font-size: 14px;
            }
        }

        @media screen and (max-width: 374px) {
            .tab .tab-head ul.list-inline li a {
                padding: 20px 0 0 0;
                font-size: 12px;
            }
        }

        .tab .tab-head ul.list-inline li:hover, .tab .tab-head ul.list-inline li.active {
            border-bottom: 4px solid #e50012;
            margin-bottom: -1px;
            outline: none;
        }

        ul.img-tab-list {
            font-size: 0;
            margin-left: 0;
        }

        ul.img-tab-list li {
            width: calc((100% - 21px) / 3); /*改为21px是为了解决ie上显示的问题*/
            width: -webkit-calc((100% - 20px) / 3);
            width: -moz-calc((100% - 20px) / 3);
            height: auto;
            font-size: 14px;
            padding: 0;
            margin-right: 10px;
        }

        ul.img-tab-list li:last-child {
            margin-right: 0;
        }

        h4 {
            margin-top: 20px;
            margin-bottom: 20px;
            font-weight: bold;
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

        #linearLights .panel-heading h4.panel-title a {
            text-decoration: none;
            width: 100%;
            padding: 10px 15px;
            display: block;
            position: relative;
            z-index: 2;
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
            display: block;
            width: 100%;
            height: 30px;
            line-height: 30px;
            padding-left: 15px;
            padding-right: 15px;
            color: #646464;
            text-decoration: none;
            position: relative;
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

        .panel-body a > span.download:hover, .panel-body a > span.download:active, .panel-body a > span.download:focus {
            background: url('/Public/img/home/led-linear-lights/linear-lights/download.png') no-repeat;
        }

        .panel-body a:active, .panel-body a:hover {
            background-color: #eee;
        }

        .table1 > tbody > tr > td, .table1 > thead > tr > th {
            text-align: center;
        }

        .table1 > tbody > tr > td:first-child,
        .table1 > thead > tr > th:first-child {
            padding-left:24px;
            font-weight: bold;
            text-align: left;
            vertical-align: middle;
        }

        .table2 > thead > tr > th {
            vertical-align: middle;
            font-size: 12px;
            color: #fff;
            background-color: #323232;
        }

        .table2 > tbody > tr > td {
            vertical-align: middle;
            font-size: 12px;
            background-color: #fafafa;
        }

        .table2 > thead:first-child > tr:first-child > th {
            border-top: 1px #000 solid;
        }

        /*Accessories*/
        @media screen and (max-width: 767px){
            #linearAccessories>.container>.row>.col-xs-6:nth-of-type(even){
                padding-left: 5px;
            }
            #linearAccessories>.container>.row>.col-xs-6:nth-of-type(odd){
                padding-right: 5px;
            }
        }

        .img-box .caption {
            padding: 30px 0 25px 0;
        }

        .img-box .caption p.name {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        @media screen and (max-width: 991px) {
            .img-box .caption p.name {
                font-size: 16px;
                height: 44px;
                overflow: hidden;
                margin-bottom: 0;
            }
        }

        .img-box .caption p.desc {
            display: -webkit-box;
            font-size: 14px;
            text-align: center;
            height: 40px;
            max-height: 40px;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
        }

        .img-box > .bottom-box {
            padding: 19px 0 20px 0;
            border-top: 1px solid #323232;
        }

        .img-box > .active {
            border-top: 10px solid #ed2424;
            padding: 11px 0 20px 0;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            margin-bottom: -1px;
            position: relative;
            z-index: 2;
            background-color: #fff;
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

        }
        .features>ul {padding-left: 17px;}
        .img-box > .detail{
            position: relative;
            width: 100%;
        }
        .img-box > .detail > .container {
            border: 1px solid #ddd;
            position: absolute;
            left:0;
            top: 0;
            z-index: 1;
            background-color: #fff;
            box-shadow: 0px 5px 10px rgba(100, 100, 100, .7);
            width: calc(200% + 10px);
            display: none;
            padding: 0;
        }

        .img-box > .detail > .container > .content {
            position: relative;
            width: 100%;
            height: auto;
            padding: 40px 10px 10px 10px;
        }

        .img-box > .detail > .container > .content > .close {
            position: absolute;
            height: 28px;
            width: 28px;
            right: 10px;
            top: 10px;
            z-index:100;
            filter: alpha(opacity=100);
            opacity: 1;/* 透明度为1 表示不透明*/
            background: url(/Public/img/home/btn-close1.png) no-repeat 100%;
        }
        .img-box > .detail > .container > .content > .close:hover{
            background: url(/Public/img/home/btn-close2.png) no-repeat 100%;
        }

        .img-box > .detail > .active {
            display: block;
        }

        .col-xs-6:nth-of-type(odd) >.img-box > .detail > .container{
            left: 0;
        }
        .col-xs-6:nth-of-type(even) > .img-box > .detail > .container{
            left: calc(-100% - 10px);
        }


        @media screen and (min-width: 768px) {
            .img-box > .detail > .container {
                width: 730px;
            }

            .img-box > .detail > .container > .content {
                padding: 20px 10px 10px 10px;
            }

            .img-box .detail > .container h2 {
                margin-top: 0;
                font-size: 24px;
            }

            .img-box .detail > .container h3 {
                font-size: 18px;
            }

            .col-xs-6:nth-of-type(3n-2) >.img-box > .detail > .container{
                left: 0;
            }
            .col-xs-6:nth-of-type(3n-1) > .img-box > .detail > .container{
                left: calc(-100% - 20px);
            }
            .col-xs-6:nth-of-type(3n) > .img-box > .detail > .container{
                left: calc(-200% - 40px);
            }

        }

        @media screen and (min-width: 992px) {
            .img-box > .detail > .container {
                width: 949px;
            }
            .img-box .detail > .container h2 {
                font-size: 30px;
            }

            .img-box .detail > .container h3 {
                font-size: 24px;
            }

            .img-box > .detail > .container > .content {
                padding: 30px 24px 24px 24px;
            }
            .img-box > .detail > .container > .content > .close {
                top:20px;
                right: 20px;
            }

        }

        @media screen and (min-width: 1200px) {
            .img-box > .detail > .container {
                width: 1150px;
            }

            .img-box > .detail > .container > .content {
                padding: 74px
            }
        }

        @media screen and (max-width: 480px) {
            .img-box .caption p.desc {
                display: none;
            }

            .img-box .caption p.name {
                font-size: 12px;
            }

            .img-box .caption {
                padding: 10px 0 0 0;
            }

            .img-box .detail > .container h2 {
                font-size: 20px;
            }

            .img-box .detail > .container h3 {
                font-size: 16px;
            }

            .img-box .detail > .container .table {
                font-size: 12px;
            }
        }

        .table3 > thead {
            background-color: #323232;
            color: #fff;
        }

        .table3 > tbody > tr > td, .table3 > thead > tr > th {
            vertical-align: middle;
            text-align: center;
        }

        .table3 > tbody > tr > td:first-child {
            font-weight: bold;
        }

        .table4 > thead > tr > th {
            text-align: center;
            width: 20%;
            vertical-align: top;
            border-bottom: none;
        }

        .table4 > thead > tr > th:nth-of-type(1) {
            width: 15%
        }

        .table4 > thead > tr > th:nth-of-type(2) {
            width: 25%
        }

        .table4 > tbody > tr > td {
            text-align: center;
            border: none;
        }

        .table4 > tbody > tr > td > .td-box {
            padding-top: 10px;
            padding-bottom: 10px;
            border-top: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            min-height: 102px;
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            .table4 > tbody > tr > td > .td-box {
                min-height: 142px;
            }
        }

        /*详情页询盘弹出框*/
        #Inquiry{
            z-index:1000001;
            background: #f8f8f8;
            position:fixed;

            overflow-x: hidden;
            left:50%;
            top:50%;
            transform: translate(-50%,-50%);
            display: none;
            filter: alpha(opacity=100);
        }
        #Inquiry .content{
            position:relative;
            width:860px;
        }
        #Inquiry .content .title{
            color:#323232;
            font-weight:bold;
            font-size:28px;
            text-align: center;
            padding-top: 45px;
            margin-bottom: 10px;
        }
        #Inquiry .content .btn-close{
            cursor:pointer;
            position:absolute;
            top:15px;
            right:15px;
            width: 28px;
            height:28px;
            background: url("/Public/img/home/btn-close1.png") no-repeat 100%;
            transition: all 0.6s ease-in 0.1s;
            -webkit-transition:  all 0.6s ease-in 0.1s;
            -o-transition:  all 0.6s ease-in 0.1s;
            -moz-transition:  all 0.6s ease-in 0.1s;
        }
        #Inquiry .content .btn-close:hover{
            transform: rotateX(180deg);
            background: url("/Public/img/home/btn-close2.png") no-repeat 100%;
        }

        #Inquiry .content form{ max-width: 610px;margin: 0 auto;padding:10px; }
        #Inquiry .content form .form-group label{text-indent: 13px;}
        #Inquiry .content form .form-group label span{color:#d01d1d;}
        #Inquiry .content form .m-top{margin-top:42px;}
        #Inquiry .content form .form-group textarea{height:160px; resize: none;}
        #Inquiry .content form .form-group .button-submit{background:#646464 ;width:150px;height: 40px; text-align: center;color:#fff;font-family: "Tahoma"; font-size:14px; border:none;margin:0 auto;display: block;}
        #Inquiry .content form .form-group .button-submit:hover{background:#d01d1d;}
        #Inquiry .content form .Demand{position:relative;}
        #Inquiry .content form .Demand .Demand-title{position:absolute;left:13px;top:74px;color:#999;}
        #Inquiry .content form .Demand input{padding-left: 50px;}

        /*详情页遮罩层及弹出框*/
        #mask{
            opacity: 0.8;
            filter: alpha(opacity=80);
            background: #000;
            position: fixed;
            left:0;
            top:0;
            z-index: 100000;
        }


        @media screen and (max-width:991px){
            #Inquiry{
                max-height: 90%;
                overflow-y: scroll;
            }
            #Inquiry .content{
                width:740px;
            }

        }
        @media screen and (max-width:767px){
            #Inquiry{
                width: 80%;
            }
            #Inquiry .content{width: 100%}
            #Inquiry .content .title{
                padding: 20px 40px 0;
                font-size:14px;
            }
            #Inquiry .content form{
                width: 100%;
                max-width: 100%;
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
<!--顶部banner-->
<div class="container-fluid linear-top-bg">
    <div class="container ">
        <div class="row">
            <div class="col-xs-12 ">
                <div class="top">
                    <h1>L-LINEAR</h1>
                    <h2>A CONTINUOUS RUN LED LINEAR FOR EVERY PROJECT</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="tab">
    <div class="container">
        <div class="tab-head">
            <ul class="list-inline" id="myTab" role="tablist">
                <li class="active">
                    <a href="#linearLights" role="tab" data-toggle="tab">L-LINEAR LIGHTS</a>
                </li>
                <li>
                    <a href="#linearAccessories" role="tab" data-toggle="tab">L-LINEAR ACCESSORIES</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="tab-content">
        <!--Tab-linear-Lights-->
        <div class="tab-pane active " id="linearLights">
            <div class="container">
                <div class="row  row-block">
                    <!--左边三个产品图 -->
                    <div class="col-sm-6">
                        <div class="tab-content">
                            <div class="tab-pane active" id="L15">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-linear-lights/linear-lights/15.jpg"
                                     alt="L-L1-15">
                            </div>
                            <div class="tab-pane" id="L12">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-linear-lights/linear-lights/12.jpg"
                                     alt="L-L1-12">
                            </div>
                            <div class="tab-pane" id="L06">
                                <img class="img-responsive"
                                     src="/Public/img/home/led-linear-lights/linear-lights/06.jpg"
                                     alt="L-L1-06">
                            </div>
                        </div>

                        <ul class="list-inline img-tab-list" id="imgTab" role="tablist">
                            <li class="active">
                                <a href="#L15" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-linear-lights/linear-lights/sm-15.jpg"
                                         alt="L-L1-15">
                                </a>
                            </li>
                            <li>
                                <a href="#L12" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-linear-lights/linear-lights/sm-12.jpg"
                                         alt="L-L1-12">
                                </a>
                            </li>
                            <li>
                                <a href="#L06" data-toggle="tab">
                                    <img class="img-responsive"
                                         src="/Public/img/home/led-linear-lights/linear-lights/sm-06.jpg"
                                         alt="L-L1-06">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--右边features 和 下载 -->
                    <div class="col-sm-6">
                        <h2>L-LINEAR LIGHTS</h2>
                        <h4>FEATURES</h4>
                        <div class="features">
                            <ul>
                                <li>Saves money on installation and long-term operation</li>
                                <li>Bright (4000 and 8000) lumen output</li>
                                <li>Fixtures quickly snap together for long continuous rows</li>
                                <li>With beaded lens | 6 distributions options | 5/7/11 core wiring choice.housing of
                                    aluminium profile with white color
                                </li>
                                <li>Standard dimming control: 0-10V or DALI control</li>
                                <li>The dimming of fixtures offers a great energy saving of up to 60%</li>
                                <li>Suspended or surface mount</li>
                                <li>Energy efficient: (up to 115 lumens per watt) long rated life & low maintenance
                                    service
                                    life: up to 50,000h (L80)
                                </li>
                                <li>Protection rating: IP54</li>
                                <li>UGR: <19</li>
                                <li>Warranty: 5 years</li>
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
                                        <a href="/Download/index/id/11.html" target="_blank" data-id="11" class="">Linear
                                            Lights Installation Guide <span class="download"></span></a>
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
                                        <a href="/Download/index/id/10.html" target="_blank" data-id="10" class="">L-L1-15XXX-XX-XX
                                            Data Sheet <span class="download"></span></a>
                                        <a href="/Download/index/id/8.html" target="_blank" data-id="8" class="">L-L1-12XXX-XX-XX
                                            Data Sheet <span class="download"></span></a>
                                        <a href="/Download/index/id/6.html" target="_blank" data-id="6" class="">L-L1-06XXX-XX-XX
                                            Data Sheet <span class="download"></span></a>
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
                                        <a href="/Download/index/id/12.html" target="_blank" data-id="12" class="">L-L1-1565-50-7
                                            20160720 7_IESNA95 <span class="download"></span></a>
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
                <div class="row" style="margin-top: 80px;margin-bottom: 80px;">
                    <div class="col-xs-12">
                        <div class="table-responsive">
                            <table class="table table1 table-bordered  table-hover">
                                <thead style="background-color: #323232;color: #fff;">
                                <tr>
                                    <th>Model Name</th>
                                    <th colspan="3">L-L1-15</th>
                                    <th colspan="3">L-L1-12</th>
                                    <th colspan="3">L-L1-06</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Power Consumption</td>
                                    <td>36W</td>
                                    <td>50W</td>
                                    <td>65W</td>
                                    <td>28W</td>
                                    <td>40W</td>
                                    <td>56W</td>
                                    <td>14W</td>
                                    <td>20W</td>
                                    <td>28W</td>
                                </tr>

                                <tr>
                                    <td>Luminous</td>
                                    <td>5100</td>
                                    <td>6500</td>
                                    <td>7800</td>
                                    <td>3900</td>
                                    <td>5200</td>
                                    <td>6600</td>
                                    <td>2000</td>
                                    <td>2600</td>
                                    <td>3300</td>
                                </tr>
                                <tr>
                                    <td>Luminous Efficiency</td>
                                    <td>143 Lm/W</td>
                                    <td>131 Lm/W</td>
                                    <td>120 Lm/W</td>
                                    <td>141 Lm/W</td>
                                    <td>131 Lm/W</td>
                                    <td>119 Lm/W</td>
                                    <td>140 Lm/W</td>
                                    <td>130 Lm/W</td>
                                    <td>118 Lm/W</td>
                                </tr>
                                <tr>
                                    <td>Length</td>
                                    <td colspan="3">1437 X 69 X 68mm</td>
                                    <td colspan="3">1150 X 69 X 68mm</td>
                                    <td colspan="3">575 X 69 X 68mm</td>
                                </tr>

                                <tr>
                                    <td>N.W</td>
                                    <td colspan="3">3.2KG</td>
                                    <td colspan="3">2.8KG</td>
                                    <td colspan="3">1.5KG</td>
                                </tr>
                                <tr>
                                    <td>G.W</td>
                                    <td colspan="3">7.23KG/2pcs</td>
                                    <td colspan="3">6.27KG/2pcs</td>
                                    <td colspan="3">3.35KG/2pcs</td>
                                </tr>

                                <tr>
                                    <td>Input Voltage</td>
                                    <td colspan="9">AC90-260V</td>
                                </tr>
                                <tr>
                                    <td>Frequency</td>
                                    <td colspan="9">50/60Hz</td>
                                </tr>
                                <tr>
                                    <td>Power Factor</td>
                                    <td colspan="9">PF&gt;0.9</td>
                                </tr>
                                <tr>
                                    <td>CCT</td>
                                    <td colspan="9">
                                        3000K, 4000K, 5000K, 6000K<br>
                                        (Other light colours e.g. 3500K, 5500K and 6500K are possible on request)
                                    </td>
                                </tr>
                                <tr>
                                    <td>IP Rating</td>
                                    <td colspan="9">IP54</td>
                                </tr>
                                <tr>
                                    <td>CRI</td>
                                    <td colspan="9">Ra>80</td>
                                </tr>
                                <tr>
                                    <td>Lens Angle</td>
                                    <td colspan="9">
                                        Wide Beam<br>
                                        Double Asymmetric Beam<br>
                                        Asymmetric Beam<br>
                                        Concentratied Beam<br>
                                        Omni-Directional
                                    </td>
                                </tr>
                                <tr>
                                    <td>Electronic control</td>
                                    <td colspan="9">
                                        No dimmable power supply<br>
                                        0-10V dimmable<br>
                                        DALI (dimmable 1-100%)<br>
                                        Emergency unit variant 3H (On request)
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ambient Temperature</td>
                                    <td colspan="9">-20 °C ~ +40 °C</td>
                                </tr>
                                <tr>
                                    <td>Housing</td>
                                    <td colspan="9">sheet steel in white (RAL 9003)(Or on request)</td>
                                </tr>
                                <tr>
                                    <td>Lenses</td>
                                    <td colspan="9">PMMA</td>
                                </tr>
                                <tr>
                                    <td>Service lifetime</td>
                                    <td colspan="9">50,000h, L85, ta 35 °C</td>
                                </tr>
                                <tr>
                                    <td>Certification</td>
                                    <td colspan="9">ENEC, VDE, CE, safety, classⅠ</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- 产品参数表格2-->
                <div class="row row-block">
                    <div class="col-xs-12">
                        <div class="table-responsive ">
                            <table class="table table2 table-bordered ">
                                <thead>
                                <tr>
                                    <th style="background-color: #000;border-color: #000;border-top: 1px solid #000;"></th>
                                    <th style="min-width: 52px">TYPE</th>
                                    <th colspan="2" style="min-width: 122px">LENGTH</th>
                                    <th colspan="2" style="min-width: 195px">POWER<br>CONSUMPTION(W)</th>
                                    <th colspan="2" style="min-width: 153px">ELECTRONIC <br> CONTROL</th>
                                    <th colspan="2" style="min-width: 142px">CORRELATED<br>COLOR<br>TEMPERATURE(CCT)</th>
                                    <th colspan="2" style="min-width: 228px">LIGHT DISTRIBUTION</th>
                                    <th colspan="2" style="min-width: 132px">WIRE</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td rowspan="12" style="background-color: #000;border-color:#000;min-width: 32px;">
                                        <img class="img-responsive"
                                             src="/Public/img/home/led-linear-lights/linear-lights/linear-lights-11.jpg">
                                    </td>
                                    <td rowspan="10">CODE</td>
                                    <td style="border-right: none;">Length</td>
                                    <td style="border-left: none;"> Ordering <br> Code</td>
                                    <td style="border-right: none;">Power Consumption</td>
                                    <td style="border-left: none;"> Ordering <br> Code</td>
                                    <td style="border-right: none;"> Dimming <br> Solution</td>
                                    <td style="border-left: none;"> Ordering <br> Code</td>
                                    <td style="border-right: none;">CCT</td>
                                    <td style="border-left: none;">Ordering <br> Code</td>
                                    <td style="border-right: none;">Light<br>Distribution</td>
                                    <td style="border-left: none;">Ordering <br> Code</td>
                                    <td style="border-right: none;">Wire</td>
                                    <td style="border-left: none;">Ordering <br> Code</td>

                                </tr>
                                <tr>

                                    <td rowspan="3" style="border-right: none;">0.6m</td>
                                    <td rowspan="3" style="border-left: none;">6</td>
                                    <td style="border-right: none;">14W</td>
                                    <td style="border-left: none;">14</td>
                                    <td rowspan="9" style="border-right: none;">
                                        No dimming <br>
                                        DALI <br>
                                        0-10V<br>
                                        Emergency
                                    </td>
                                    <td rowspan="9" style="border-left: none;">
                                        N<br>D<br>T<br>E
                                    </td>
                                    <td rowspan="9" style="border-right: none;">
                                        3000K <br>
                                        4000k <br>
                                        5000K <br>
                                        6000K
                                    </td>
                                    <td rowspan="9" style="border-left: none;">
                                        30<br>40<br>50<br>60
                                    </td>
                                    <td rowspan="9" style="border-right: none;">
                                        Wide Beam <br>
                                        Double Asymmetric Beam <br>
                                        Asymmetric Beam <br>
                                        Concentratied Beam <br>
                                        Round Beam
                                    </td>
                                    <td rowspan="9" style="border-left: none;">
                                        WB<br>DB<br>AB<br>CB<br>RB
                                    </td>
                                    <td rowspan="9" style="border-right: none;">
                                        5 Wires <br>
                                        7 Wires <br>
                                        11 Wires
                                    </td>
                                    <td rowspan="9" style="border-left: none;">
                                        5<br>7<br>11
                                    </td>

                                </tr>
                                <tr>
                                    <td style="border-right: none;">20W</td>
                                    <td style="border-left: none;">20</td>
                                </tr>
                                <tr>
                                    <td style="border-right: none;">28W</td>
                                    <td style="border-left: none;">28</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" style="border-right: none;">1.2m</td>
                                    <td rowspan="3" style="border-left: none;">12</td>
                                    <td style="border-right: none;">28W</td>
                                    <td style="border-left: none;">28</td>
                                </tr>
                                <tr>
                                    <td style="border-right: none;">40W</td>
                                    <td style="border-left: none;">40</td>
                                </tr>
                                <tr>
                                    <td style="border-right: none;">56W</td>
                                    <td style="border-left: none;">56</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" style="border-right: none;">1.5m</td>
                                    <td rowspan="3" style="border-left: none;">15</td>
                                    <td style="border-right: none;">36W</td>
                                    <td style="border-left: none;">36</td>
                                </tr>
                                <tr>
                                    <td style="border-right: none;">50W</td>
                                    <td style="border-left: none;">50</td>
                                </tr>
                                <tr>
                                    <td style="border-right: none;">70W</td>
                                    <td style="border-left: none;">70</td>
                                </tr>
                                <tr>
                                    <td style="background-color: #eee;font-weight: bold;">L-L1-</td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">15/12/6</td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">
                                        14/20/28/40/56/36/50/70
                                    </td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">N/D/T/E</td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">30/40/50/60</td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">WB/DB/AB/CB/RB
                                    </td>
                                    <td colspan="2" style="background-color: #eee;font-weight: bold;">5/7/11</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--<img class="img-responsive" src="/Public/img/home/led-linear-lights/linear-lights/linear-lights-12.jpg">-->
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

        <!--Tab-linear-Accessories-->
        <div class="tab-pane " id="linearAccessories">
            <div class="container">
                <div class="row row-block">
                    <!--第一张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-trunking-rail.jpg"
                                 alt="l-linear-trunking-rail">
                            <div class="caption">
                                <p class="name ">L-Linear Trunking Rail</p>
                                <p class="desc">L-Linear trunking rail for LED Linear Luminaire</p>
                            </div>
                            <div class="bottom-box"></div>
                            <div class="detail">
                                <div class="container">
                                    <div class="content">
                                        <span class="close"></span>

                                        <div class='row flex-container'>
                                            <div class="col-sm-6 col-xs-12 flex-item">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-trunking-rail-in.jpg"
                                                     alt="l-linear-trunking-rail">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 flex-item">
                                                <h2 style="font-weight: bold;">L-Linear Trunking Rail </h2>
                                                <br>
                                                <div class="features">
                                                    <ul>
                                                        <li>5-POLE,7-POLE L-Linear Mounting Rail</li>
                                                        <li>L-Linear mounting rail for L-Linear row lighting system,
                                                            single, double or triple
                                                        </li>
                                                        <li>Lengths, depending on the lengths of the system battens</li>
                                                        <li>Luminaires and accessories can be mounted and positioned as
                                                            required
                                                        </li>
                                                        <li>Integral 5-pole wiring, cable cross-section 5 x 2.5 mm² for
                                                            ON/OFF switching
                                                        </li>
                                                        <li>Integral 7-pole wiring, cable cross-section 5 x 2.5 mm² + 2
                                                            x 1.5 mm² for ON/OFF switching or DALI or 0-10V or two
                                                            separate emergency circuits
                                                        </li>
                                                        <li>Can be mounted simply without tools, supplied ready for
                                                            cable / catenary suspension
                                                        </li>
                                                        <li>Mechanical connector with earthing clamp for automatic
                                                            earthing of track
                                                        </li>
                                                        <li>Feed point (mains supply) from the front or above</li>
                                                        <li>Feed point for wire, rigid or flexible for stranded wire
                                                            with 1.5 mm2 to 2.5 mm2 cross-sections
                                                        </li>
                                                        <li>Separate retaining hook to secure system batten luminaire
                                                            when dismantling
                                                        </li>
                                                        <li>Protection rating: IP54</li>
                                                        <li>Cable duct and external mounting extendible if additonal
                                                            cable routing is required
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row row-block">
                                            <div class="col-xs-12">
                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered ">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering Code</th>
                                                            <th>Length(mm)</th>
                                                            <th>Description</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-06X5</td>
                                                            <td rowspan="2">573</td>
                                                            <td>5 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-06X7</td>

                                                            <td>7 wire</td>
                                                        </tr>

                                                        <tr>
                                                            <td>L-L1-12X5</td>
                                                            <td rowspan="2">1146</td>
                                                            <td>5 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-12X7</td>

                                                            <td>7 wire</td>
                                                        </tr>

                                                        <tr>
                                                            <td>L-L1-15X5</td>
                                                            <td rowspan="2">1437</td>
                                                            <td>5 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-15X7</td>

                                                            <td>7 wire</td>
                                                        </tr>

                                                        <tr>
                                                            <td>L-L1-30X5</td>
                                                            <td rowspan="2">2874</td>
                                                            <td>5 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-30X7</td>

                                                            <td>7 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-45X5</td>
                                                            <td rowspan="2">4311</td>
                                                            <td>5 wire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-45X7</td>

                                                            <td>7 wire</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#ed2424">E.g: L-L1-12×5: stands for L-Linear terminal
                                                    1.2m, 5wires, white color.</p>
                                                <p>For different parameters, please order separately.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第二张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures.jpg"
                                 alt="l-linear-luminaire-fixtures">
                            <div class="caption">
                                <p class="name ">L-Linear Luminaire Fixtures</p>
                                <p class="desc">Five specific beam angles for different application</p>
                            </div>
                            <div class="bottom-box "></div>
                            <div class="detail">
                                <div class="container  ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row flex-container'>
                                            <div class="col-sm-6 col-xs-12 flex-item">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in.jpg"
                                                     alt="l-linear-luminaire-fixtures">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 flex-item">
                                                <h2 style="font-weight: bold;">L-Linear Luminaire Fixtures </h2>
                                                <br>
                                                <p>In order to be able to deliver the LED lighting precisely and
                                                    effectively direct to the source, L-Linear has five application
                                                    specific beam angles for your needs. The development of the lens
                                                    optics direct of the light emitted create a very high efficacy. </p>
                                                <br>
                                                <br>
                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th style="width: 30%">Code</th>
                                                            <th style="text-align: left">Distribution beam</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-WB</td>
                                                            <td>WB</td>
                                                            <td style="text-align: left">Wide Beam</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-DB</td>
                                                            <td>DB</td>
                                                            <td style="text-align: left">Double Asymmetric Beam</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-AB</td>
                                                            <td>AB</td>
                                                            <td style="text-align: left">Asymmetric Beam</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-CB</td>
                                                            <td>CB</td>
                                                            <td style="text-align: left">Concentratied Beam</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L1-RB</td>
                                                            <td>RB</td>
                                                            <td style="text-align: left">Round Beam</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#ed2424">E.g: L-L1-WB: stands for L-Linear Lights with
                                                    wide beam angles</p>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-xs-12">
                                                <div class="table-responsive " style="border: none; margin-top: 50px">
                                                    <table class="table table4 ">
                                                        <thead>
                                                        <tr>
                                                            <th>WIDE BEAM</th>
                                                            <th>DOUBLE ASYMMETRIC BEAM</th>
                                                            <th>ASYMMETRIC BEAM</th>
                                                            <th>CONCENTRATIED BEAM</th>
                                                            <th>OMNI-DIRECTIONAL</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><img class="img-responsive center-block"
                                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in1.png">
                                                            </td>
                                                            <td><img class="img-responsive center-block"
                                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in2.png">
                                                            </td>
                                                            <td><img class="img-responsive center-block"
                                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in3.png">
                                                            </td>
                                                            <td><img class="img-responsive center-block"
                                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in4.png">
                                                            </td>
                                                            <td><img class="img-responsive center-block"
                                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-luminaire-fixtures-in5.png">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="td-box">up to 8 metres<br>(assembly and <br>
                                                                    production facilities)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="td-box">up to 3.5 metres<br>(supermarkets
                                                                    and <br> home depots)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="td-box">up to 3.5 metres<br>(supermarkets
                                                                    and <br> home depots)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="td-box">up to 12 metres<br>(warehouses)
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="td-box">up to 3.5 metres<br>(car parks,
                                                                    corridors,<br> aisles and walkways, or utility
                                                                    rooms)
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第三张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/blind-cover.jpg"
                                 alt="blind-cover">
                            <div class="caption">
                                <p class="name ">Blind Cover</p>
                                <p class="desc">L-Linear blind cover for the trunking rail </p>
                            </div>
                            <div class="bottom-box "></div>
                            <div class="detail">
                                <div class="container  ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row'>
                                            <div class="col-sm-6 col-xs-12  ">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/blind-cover-in.jpg"
                                                     alt="blind-cover">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h2 style="font-weight: bold;">Blind Cover </h2>

                                                <br>
                                                <p>For Mounting to the trunking rail ,use in close the spaces in the
                                                    trunking when there is no luminair fixtures units are mounted.</p>
                                                <br>
                                                <br>
                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th>Dimension</th>
                                                            <th>Color</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L-BC-06</td>
                                                            <td>0.6m</td>
                                                            <td>White</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L-BC-12</td>
                                                            <td>1.2m</td>
                                                            <td>White</td>
                                                        </tr>
                                                        <tr>
                                                            <td>L-L-BC-15</td>
                                                            <td>1.5m</td>
                                                            <td>White</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#e50012;">E.g: L-L1-BC-15 stands for L-Linear Blind
                                                    Cover, 1.5m, white color (other color on request)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第四张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-connector.jpg"
                                 alt="l-linear-connector">
                            <div class="caption">
                                <p class="name ">L-Linear Connector</p>
                                <p class="desc">Mounting rail connector for continuous run configuration </p>
                            </div>
                            <div class="bottom-box"></div>
                            <div class="detail">
                                <div class="container  ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row '>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-connector-in.jpg"
                                                     alt="l-linear-connector">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h2 style="font-weight: bold;">L-Linear Connector </h2>
                                                <h3 style="font-weight: bold;margin: 0">Mounting rail connector</h3>

                                                <br>
                                                <p>However long your mounting rail system needs to be – the intelligent
                                                    wiring concept coupled with simple continuous row mounting rail
                                                    connector guarantees flawless operation, simple installation and the
                                                    flexibility to design stretches of excellent lighting as long as you
                                                    need them to be.</p>
                                                <br>

                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th>Mounting rail connector</th>
                                                            <th>Dimension</th>
                                                            <th>Material</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-MRC</td>
                                                            <td>MRC</td>
                                                            <td>200x61x13mm</td>
                                                            <td>metal</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#e50012;">E.g: L-L1-MRC stands for Mounting Rail
                                                    Connecting Piece</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第五张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-suspension-accessories.jpg"
                                 alt="l-linear-suspension-accessories">
                            <div class="caption">
                                <p class="name ">L-Linear Suspension Accessories</p>
                                <p class="desc">Can be firmly suspend by the cord steel suspension accessories </p>
                            </div>
                            <div class="bottom-box "></div>
                            <div class="detail">
                                <div class="container ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row '>
                                            <div class="col-sm-6 col-xs-12  ">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-suspension-accessories-in.jpg"
                                                     alt="l-linear-suspension-accessories">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h2 style="font-weight: bold;">L-Linear Suspension Accessories </h2>
                                                <h3 style="font-weight: bold;margin: 0">Steel cable cord suspension</h3>

                                                <br>
                                                <div class="features">
                                                    <ul>
                                                        <li>The innovative L-Linear lights can be simply installed
                                                            without tools, The L-Linear can be firmly suspend by the
                                                            cord steel cable suspension accessories
                                                        </li>
                                                        <li>Steel material, load capacity 20kg</li>
                                                    </ul>
                                                </div>
                                                <br>


                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th>Holder</th>
                                                            <th>Cord</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-SCS-COR</td>
                                                            <td>SCS</td>
                                                            <td>COR</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#e50012;">E.g: L-L1-SCS-COR stands for Cord Steel cable
                                                    suspension with holders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第六张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-end-cap.jpg"
                                 alt="l-linear-end-cap">
                            <div class="caption">
                                <p class="name ">L-Linear End Cap</p>
                                <p class="desc"> Clipping on the end of the trunking rail and Luminaire </p>
                            </div>
                            <div class="bottom-box "></div>
                            <div class="detail">
                                <div class="container  ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row '>
                                            <div class="col-sm-6 col-xs-12  ">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/l-linear-end-cap-in.jpg"
                                                     alt="l-linear-end-cap">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h2 style="font-weight: bold;">L-Linear End Cap</h2>
                                                <br>
                                                <p>For clipping on to end of trunking rail and luminaire</p>
                                                <br>


                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th>Dimension</th>
                                                            <th>Material</th>
                                                            <th>Color</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-EC</td>
                                                            <td>80*73*32mm</td>
                                                            <td>PMMA</td>
                                                            <td>White</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <p style="color:#e50012;">E.g: L-L1-EC stands for L-Linear end cap
                                                    (other color on request)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--第七张图片-->
                    <div class="col-sm-4 col-xs-6">
                        <div class="img-box">
                            <img class="img-responsive"
                                 src="/Public/img/home/led-linear-lights/linear-accessories/electrical-connection-in-ac-input-side.jpg"
                                 alt="electrical-connection-in-ac-input-side">
                            <div class="caption">
                                <p class="name">Electrical Connection in AC Input Side</p>
                                <p class="desc">Only one pcs AC electrical connection is enough in one row LED linear
                                    lights </p>
                            </div>
                            <div class="bottom-box "></div>
                            <div class="detail">
                                <div class="container ">
                                    <div class="content">
                                        <span class="close"></span>
                                        <div class='row '>
                                            <div class="col-sm-6 col-xs-12  ">
                                                <img class="img-responsive"
                                                     src="/Public/img/home/led-linear-lights/linear-accessories/electrical-connection-in-ac-input-side-in.jpg"
                                                     alt="electrical-connection-in-ac-input-side">
                                            </div>
                                            <div class="col-sm-6 col-xs-12 ">
                                                <h2 style="font-weight: bold;">Electrical connection in AC input
                                                    side</h2>
                                                <br>
                                                <p>Only one pcs L-L1-MP AC electrical connection is enough in one row
                                                    LED linear lights</p>
                                                <br>

                                                <div class="table-responsive">
                                                    <table class="table table3 table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Ordering code</th>
                                                            <th>Male plug</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>L-L1-MP</td>
                                                            <td>MP</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <input type="text" class="form-control" name="Title" id="Title" value="L-LINEAR LIGHTS">
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
<script>
    $(function () {
        //根据锚点切换tab选项
        var thisUrl = location.href.split('.html#');
        var tab = thisUrl[thisUrl.length - 1];
        if (tab === 'Accessories') {
            $('#myTab').find('li.active').removeClass('active');
            $('#myTab').find('li').eq(1).addClass('active');
            $('#linearLights').removeClass('active');
            $('#linearAccessories').addClass('active');
        }

        $('h4.panel-title').find('a').click(function (e) {
            var cla = $(this).attr('class');
            console.log(cla);
            //替换右边图标背景
            if (cla === 'collapsed') {
                $('.panel-heading span').each(function () {
                    $(this).css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw.png") no-repeat');
                });
                $(this).parent().next('span').css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw-up.png") no-repeat');

            } else {
                $(this).parent().next('span').css('background', 'url("/Public/img/home/led-linear-lights/linear-lights/arraw.png") no-repeat');
            }
        });
        //统计下载某个文件的点击数
        $('.panel-body a').on('click', function () {
            var fileId = $(this).attr('data-id');
            console.log(fileId);
            var url = "/Home/Products/downloadCount";
            var data = {fileId: fileId};
            $.post(url, data, function (result) {
                console.log(result.message);
            }, 'json');
        });
        //linearAccessories img-box  tab切换事件

        $('.img-box').on('mouseenter click', function () {
            $(this).find('.bottom-box').addClass('active');
            $(this).find('.detail>.container').addClass('active');

        });
        $('.img-box').on('mouseleave', function () {
            $(this).find('.bottom-box').removeClass('active');
            $(this).find('.detail>.container').removeClass('active');
        });

        $('.content>.close').click(function (e) {
            e.stopPropagation();//阻止事件冒泡，防止触发其祖元素$('.img-box')已经绑定的click事件
            $(this).parent().parent().parent().parent().trigger('mouseleave');
        });

    });
</script>
<!--为了让product.js起作用，不得不引入owl.carousel.min.js，product.js有require price的js代码-->
<script src="/Public/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>
<script src='/Public/js/Home/products.js'></script>
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>