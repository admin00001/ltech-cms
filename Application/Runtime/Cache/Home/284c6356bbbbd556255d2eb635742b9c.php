<?php if (!defined('THINK_PATH')) exit(); $productsType = D("ProductsType")->getType(); ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title>Products|<?php echo (getTypeName($productsType,$product["type"])); ?>|<?php echo ($product["name"]); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
        <meta name="description" content="<?php echo ($product["description"]); ?>">
        <meta name="keywords" content="<?php echo ($product["keywords"]); ?>">      
 
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
            /*产品详情页*/
            h1.products-name{
                font-weight: bold;
                font-size: 20px;
                color:#646464;
            }


            @media screen and (min-width:768px) and (max-width:991px){
                /*响应式容器*/
                .sm-container{
                    max-width: 770px;
                    margin-left: auto;
                    margin-right: auto;
                }
            }
            .flex-item{margin-top: 10px;margin-bottom: 10px;}
            @media screen and (min-width:992px){
                .flex-container{
                    display: flex;
                    display: -webkit-flex;
                    flex-direction: row;
                    -webkit-flex-direction:row;
                    align-items: center;
                    -webkit-align-items: center;

                }
                .flex-item{
                    float: none !important;
                    margin-top: 0;
                    margin-bottom: 0;
                }
                .products-description-right{
                    margin-right: 50px;
                }
                .products-description-left{
                    margin-left: 50px;
                }

                .not-padding{
                    padding-left: 0;
                    padding-right: 0;
                }
                .btn-download{
                    margin-bottom: 10px;
                }
            }
            /*family相关产品轮播*/
            .btn-family{
                display: block;
                float: left;
                margin-right: 10px;
                padding:56px 45px ;
                background-color: #fff;
                border-radius:0;
                border:1px #646464 solid;
                font-size: 20px;
                font-weight: bold;
                text-align: left;
            }
            .family-container{
                margin-left: 190px;
            }

            @media screen and (min-width:992px) and (max-width:1199px){
                .btn-family{
                    padding:38px 45px ;
                }
            }

            @media screen and (min-width:768px) and (max-width:991px){
                .btn-family{
                    padding:43px 45px ;
                }
            }

            @media screen and (max-width:767px){
                .btn-family{
                    padding: 35px;
                    font-size: 18px;

                }
                .family-container{
                    margin-left: 160px;
                }
            }
            @media screen and (max-width:600px){
                .btn-family{
                    float: none;
                    margin-bottom: 10px;
                    padding: 10px;
                    font-size: 16px;
                }
                .family-container{
                    margin-left: 0;
                }
            }
            /*产品浏览图*/
            .Tech-info{
                background-color:#909090;
                padding-left:15px;
                margin: 0 auto 30px;
                height:40px;
                line-height: 40px;
                color:#fff;
                font-size:14px;
                font-weight:700;
            }
            .Tech-info-bg-black{
                background-color: #323232;
            }
            .small-img-container{
                font-size: 0;
            }
            .small-img{
                width: 120px;
                height: 75px;
                border:1px solid #ccc;
                overflow: hidden;
                display: inline-block;
                margin-top: 10px;
                margin-right: 10px;
                font-size: 1rem;
                cursor: pointer;
            }
            .small-img img{transition:.5s;}
            .small-img img:hover{
                transform: scale(1.5);
            }

            .features ul{
                padding-left: 17px;
            }
            .Specification-features{
                overflow: hidden;
            }
            .Specification-Features-table{
                background-color: #fafafa;
            }
            .Specification-Features-table>tbody>tr>td{
                padding-left: 24px;
                border-top: 0;
            }
            .Specification-Features-table>tbody>tr>td:nth-of-type(2){
                border-left: 1px solid #ccc;

            }
            .table-lt1a-1x4>tbody>tr>td:nth-of-type(2n){
                width: 60%;
            }
            /*Tube T8  Ordering information*/
            .ordering-table>tbody>tr>td{
                border-top: none;
                padding: 4px;
            }
            .ordering-table>tbody>tr:first-child>td{
                height: 20px;
            }
            .ordering-table>thead>tr>th{
                padding: 4px;
                font-weight: normal;
            }
            /*troffer表格*/
            @media screen and (min-width: 768px) {
                .table-troffer{max-width:520px;}
            }
            .table-troffer>thead{background-color: #646464;color: #fff;  }
            .table-troffer>thead>tr>th:last-child{border-left: solid 1px #fff;}
            .table-troffer>tbody>tr:nth-of-type(2n-1){background-color: #fafafa;}
            .table-troffer>tbody>tr>td{border-top: none;}

            /*下载按钮弹出窗*/
            .download-box{
                background-color: #fff;
                padding-top: 20px;
                padding-bottom: 10px;
                border: 2px RGBA(255,255,100,.5) solid;
                z-index:199999;
                position:fixed;
                left:50%;
                top:50%;
                transform: translate(-50%,-50%);
                display: none;
                filter: alpha(opacity=100);
            }
            .download-box div{
                text-align: center;
                cursor: pointer;
            }

            /*详情页询盘弹出框*/
                #Inquiry{
                    z-index:1000001;
                    background: #f8f8f8;
                    position:fixed;
                    max-height: 90%;
                    overflow-y: scroll;
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

<div class="container-fluid sm-container ">
    <div class="row flex-container">
        <div class="col-md-6 not-padding flex-item">
            <div class="col-md-12 not-padding clearfix">
                <img class=' f-r img-responsive' src='<?php echo ($product["img_main"]); ?>' alt='<?php echo ($product["name"]); ?>'>
            </div>
        </div>
        <div class="col-md-6  not-padding flex-item">
            <div class=" col-md-11 col-lg-8 not-padding ">
                <div class=" products-description-left ">
                    <h1 class="products-name"><?php echo ($product["name"]); ?></h1>
                    <?php echo ($product["description_one"]); ?>
                    <a class="btn btn-default btn-download"  id="downloadBtn" title ="Download the Installation instructions, specifications"> Downloads </a> 
                </div>
            </div>
        </div>
    </div>
    <div class="row flex-container">
        <div class="col-md-6  not-padding flex-item">
            <div class=" col-md-offset-1 col-md-11 col-lg-offset-4  col-lg-8  not-padding">
                <div class=" products-description-right">
                    <?php echo ($product["description_two"]); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6 not-padding flex-item">
            <div class="col-md-12  not-padding clearfix">
                <img class='f-l img-responsive' src='<?php echo ($product["img_application_one"]); ?>' alt='<?php echo ($product["name"]); ?>'>
            </div>
        </div>
    </div>
    <div class="row flex-container">
        <div class="col-md-6 not-padding flex-item">
            <div class="col-md-12 not-padding clearfix">
                <img class='f-r img-responsive' src='<?php echo ($product["img_application_two"]); ?>' alt='<?php echo ($product["name"]); ?>'>
            </div>
        </div>
        <div class="col-md-6  not-padding flex-item">
            <div class=" col-md-11 col-lg-8 not-padding">
                <div class="products-description-left">

                    <?php echo ($product["description_three"]); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!--family banner-->
<div class='container'>
    <!--面包屑导航-->
    <div class="row row-block">
        <div class="col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/" title="Home"> >>Home</a></li>
                <li><a href="<?php echo U('Products/index');?>" title="Products">Products</a></li> 
                <li><a href="<?php echo U('Products/type','id='.$product[type]);?>" title="<?php echo (getTypeName($productsType,$product["type"])); ?>"><?php echo (getTypeName($productsType,$product["type"])); ?></a></li> 
                <li class='active'><?php echo ($product["name"]); ?></li>
            </ol> 
        </div>
    </div>
    <!--family 内容-->
    <div class='row row-block' >
        <div class='col-sm-12 ' style="overflow: hidden;">
            <button class='btn btn-family'><span>Family</span> <br> <span>Products</span></button>
            <div class="family-container">
                <div style="width: 100%;">
                    <div class="owl-carousel">
                        <?php if(is_array($family)): foreach($family as $key=>$vo): ?><div class="center-block" style="margin-bottom: 1px;margin-left: 1px;">
                                <a href="<?php echo U('Products/product','id='.$vo[products_id]);?>" title='<?php echo ($vo["name"]); ?>'>   
                                    <img src="<?php echo ($vo["family_products"]); ?>" alt="" class="img-responsive">        
                                </a>
                            </div><?php endforeach; endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Technical information-->
    <?php if($product["img_small_one"] != ''): ?><div class="row row-block" id="technical">
            <div class="col-xs-12">
                <div class="Tech-info Tech-info-bg-black">Technical information</div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="center-block">
                    <img class="img-responsive big-img" src="<?php echo ($product["img_small_one"]); ?>" alt="<?php echo ($product["name"]); ?>" id="bigImg">
                </div>
                <div class="small-img-container">
                    <div class=" small-img">
                        <img class="img-responsive" src="<?php echo ($product["img_small_one"]); ?>" alt="<?php echo ($product["name"]); ?>">
                    </div>
                    <div class=" small-img">
                        <img class="img-responsive" src="<?php echo ($product["img_small_two"]); ?>"  alt="<?php echo ($product["name"]); ?>">
                    </div>
                    <div class=" small-img">
                        <img class="img-responsive" src="<?php echo ($product["img_small_three"]); ?>" alt="<?php echo ($product["name"]); ?>">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="features"> 
                    <?php echo ($product["features"]); ?>
                </div>  
            </div>
        </div><?php endif; ?>

        <div class="row row-block">
            <?php if($product["specification_features"] != ''): ?><div class="col-sm-6 col-xs-12">
                    <div class="Specification-features">
                        <?php echo ($product["specification_features"]); ?>
                    </div>
                </div><?php endif; ?>
            <?php if($product["data_banner_one"] != ''): ?><div class="col-sm-6 col-xs-12">
                    <div style="max-width: 480px;">
                        <div class="owl-carousel-two ">
                            <img src="<?php echo ($product["data_banner_one"]); ?>"   alt="led ltechlightng" class="img-responsive hide">
                            <img src="<?php echo ($product["data_banner_two"]); ?>"   alt="led ltechlightng" class="img-responsive hide">
                            <img src="<?php echo ($product["data_banner_three"]); ?>" alt="led ltechlightng" class="img-responsive hide">
                            <img src="<?php echo ($product["data_banner_four"]); ?>"  alt="led ltechlightng" class="img-responsive hide">
                            <img src="<?php echo ($product["data_banner_five"]); ?>"  alt="led ltechlightng" class="img-responsive hide">
                        </div>
                    </div>
                </div><?php endif; ?>
        </div>

    <div class="row row-block">
        <div class="col-sm-6 col-xs-12">
            <?php echo ($product["extra_one"]); ?>
        </div>
        <div class="col-sm-6 col-xs-12">
            <?php echo ($product["extra_two"]); ?>
        </div>
    </div>
    <?php if($product["type"] == 1): ?><div class="row row-block">
            <div class="col-xs-12">
                <div class="Tech-info Tech-info-bg-black">Ordering Information</div>
            </div>
            <div class="col-xs-12">
                <p  style="text-indent: 4px;font-size: 18px;margin-bottom: 30px; font-weight: bold;"> Order Codes: PT-T8-XXX-<?php echo (splitT8($product["name"])); ?>1200&-WI</p>
                <div class="table-responsive">
                    <table class="table ordering-table">
                        <thead>
                            <tr>
                                <th><b>PT</b>(POTO)</th>
                                <th>—</th>
                                <th><b>T8</b>(Type)</th>
                                <th>—</th>
                                <th><b>XXX</b>(Product No)</th>
                                <th>—</th>
                                <th><b style="font-size:12px"><?php echo (splitT8($product["name"])); ?></b>(Power Consumption)</th>
                                <th>—</th>
                                <th><b>1200</b>(Length)</th>
                                <th>—</th>
                                <th><b>&</b>(Tubular Enclosure Color)</th>
                                <th>—</th>
                                <th><b>W</b>(LED Package Type)</th>                             
                                <th>—</th>
                                <th><b>I</b>(Power Supply Type)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="15"></td>
                            </tr>
                            <tr>
                                <td>PT</td>
                                <td></td>
                                <td>T8</td>
                                <td></td>
                                <td>Any number or letter</td>
                                <td></td>
                                <td><?php echo (splitT8($product["name"])); ?>W</td>
                                <td></td>
                                <td>1200mm</td>
                                <td></td>
                                <td>F:Frosted cover</td>
                                <td></td>
                                <td>A</td>
                                <td></td>
                                <td>D</td>
                            </tr>
                            <tr>
                                <td colspan="10"></td>

                                <td>T:Transparent cover</td>
                                <td></td>
                                <td>B</td>
                                <td colspan="2"></td>                              
                            </tr>
                            <tr>
                                <td colspan="12"></td>
                                <td>C</td>
                                <td colspan="2"></td>                             
                            </tr>
                            <tr>
                                <td colspan="12"></td>
                                <td>D</td>
                                <td colspan="2"></td>

                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div><?php endif; ?>
</div>
<div class="container-fluid" style="background-color: #eee;">
    <div class="row row-block">
        <div class="col-xs-12 text-center">
            <a class='btn btn-download ' href="javascript:showmask();"> Request pricing</a>
            <a class="btn btn-download " href="<?php echo U('Products/index');?>"> Other items</a>
        </div>
    </div>
    <!--下载弹窗-->
    <div class="download-box row">
        <?php if(is_array($download)): $i = 0; $__LIST__ = $download;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-sm-6">
                <a data-id='<?php echo ($vo["id"]); ?>' href="<?php echo U('Download/index',array('id'=>$vo[id]));?>" target="_blank"><span class="fa fa-2x <?php echo (download_file_class($vo["path"])); ?>"></span> <p><?php echo ($vo["name"]); ?></p> </a>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                  
    </div>
</div>

<!--遮罩层-->
<div id="mask" onclick="hidemask()"></div>
<!--弹窗-->
<div id="Inquiry">
    <div class="content">
        <span class="btn-close" onclick="hidemask()"></span>
        <div class="title">Please enter your contact information!</div>   
        <form  role="form">
            <div class="form-group">
                <label for="Name" >Name<span>*</span></label>
                <input type="text" class="form-control"  name="Name" id="Name" placeholder="Name"  maxlength="30">
            </div>

            <div class="form-group">
                <label for="Company">Company<span>*</span></label>
                <input type="text" class="form-control"  name="Company" id="Company" placeholder="Company"  maxlength="80">
            </div>

            <div class="form-group row">
                <div class="col-sm-6 ">
                    <label for="Email">E-mail<span>*</span></label>
                    <input type="email" class="form-control"  name="Email" id="Email" placeholder="E-mail"  maxlength="50">
                </div>
                <div class="col-sm-6">
                    <label for="Phone">Phone<span>*</span></label>
                    <input type="tel" class="form-control"  name="Phone" id="Phone" placeholder="Phone"   maxlength="20" >
                </div>
            </div>
            <div class="form-group">
                <label for="Website">Website </label> <span>(for example:http://ltechlighting.com)</span>
                <input type="text" class="form-control"  name="Website" id="Website" placeholder="http://ltechlighting.com"  maxlength="100">
            </div>
            <div class="form-group Demand ">
                <label for="Title" class="m-top">Demand information</label>
                <input type="text" class="form-control"  name="Title" id="Title" value="<?php echo ($product["name"]); ?>"  readonly="readonly">
                <span class="Demand-title">Title:</span>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="Content" id="Content" placeholder="Content:"  maxlength="2000"></textarea>
            </div>
            <div class="form-group"><button class="button-submit" id='inqueryBtn'>Inquiry</button></div>

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

<!--本页面特有js 轮播banner插件js-->
<script src="/Public/owl.carousel.2.0.0-beta.2.4/owl.carousel.min.js"></script>  

<script src='/Public/js/Home/products.js'></script>
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>