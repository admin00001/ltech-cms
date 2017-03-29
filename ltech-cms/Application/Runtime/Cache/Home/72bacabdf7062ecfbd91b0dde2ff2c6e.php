<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Services & support|ltechlighting FAQ|OEM|ODM|Warranties and Liability Guidelines</title>
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">      
        <meta name="description" content="To meet increasing customer demand for flexible designs and LED lighting manufacturing services, LTECH Lighting offers OEM and ODM service that reduces customer engineering effort and shortens time-to-market response to put our customers ahead of the competition. LTECH Lighting can also design and manufacture LED lighting products under the clients own specifications and brands. ">
        <meta name="keywords" content="LED lighting,LED troffer,LED troffer lighting,commercial lighting, residential lighting,shop loghting, tube lighting led t8 ">      

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
            /*service页面设计*/
            ol{list-style-type: none;}

            .service-bg1{
                width: 100%;
                height:350px;
                background: url("/Public/img/home/service/service-bg1.jpg") no-repeat;
                background-size:1920px 350px;    
            }
            .tab-head{
                padding-left: 25px;
                color:#eee;
                background-color: #323232;
                max-width:100%;
                min-height:60px;   
                margin-bottom: 50px;
                margin-top: 10px;
            }
            .tab-head>ul>li{
                border-right: 1px solid #eee; 
                height: 30px;
                margin:15px 0 15px 25px;
                padding-right: 25px;
            }
            .tab-head>ul>li:last-child{
                border-right:none; 
            }


            .tab-head>ul>li>a{
                text-decoration: none;
                cursor: pointer;
                color:#eee;
                line-height: 30px;
            }
            .tab-head>ul>li>a:hover,
            .tab-head>ul>li> .active{
                color:#dd001f;
            }

            .tab-body{
                max-width:1020px;
                margin: 50px auto 160px;

            }
            .chapter{
                font-size:14px;
                color:#646464;
            }
            .chapter > h3{
                line-height: 40px;
                border-bottom: 1px solid #cecece;
            }
            @media screen and (min-width: 768px) and (max-width:991px){
                .chapter > h3{font-size:22px;}
            }

            @media screen and (max-width: 767px) {
                .tab-head{padding-left: 0;}
                .list-inline>li{display: block;}
                .tab-head>ul>li{border-right: none;border-bottom: 1px solid #fafafa;margin-right: 20px;}
                .tab-head>ul>li:last-child{border: none;}
                .chapter > h3{line-height: 40px;font-size: 16px;font-weight: 700;}
            }
            .chapter > h3 .jiahao{
                cursor:pointer;
                margin-top: 10px;
                margin-right: 10px;
                float: right;
                width:20px;
                height:20px;
                background:url("/Public/img/home/service/jiahao.jpg") no-repeat center center;
            }
            .chapter > h3 .jianhao{
                cursor:pointer;
                margin-top: 10px;
                margin-right: 10px;
                float: right;
                width:20px;
                height:20px;
                background:url("/Public/img/home/service/jianhao.jpg") no-repeat center center;
            }
            #tab1 ol{padding-left: 0;}
            .chapter ol li:hover{background: #eeeeee;}
            .chapter ol li h4{
                margin-top: 30px; 
                font-size:14px;
            }
            #tab2{
                max-width: 940px;
                margin: 0 auto;
            }
            #tab2 section{
                margin-top: 50px;
                text-align: justify;
            }
            #tab2 section ol{
                margin-top: -20px;
            }
            #tab3 .contact{
                text-decoration: none;
                text-align: center;
                border-radius:5px;
                display:block;
                margin:30px auto ;
                padding-top: 20px;
                padding-bottom:20px; 
                background-color:#646464;
                font-size:14px;
                color:#ffffff;
                max-width: 240px;
                transition: all ease-in .5s;
                -webkit-transition: all ease-in .5s;
                -moz-transition: all ease-in .5s;
                -o-transition: all ease-in .5s;

            }
            #tab3 .contact:hover{
                background:#dd001f;
                color:#eee;
                font-size:14px;

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
<nav class="navbar navbar-default navbar-fixed-top m-b-0" style="box-shadow: 0 2px 7px rgba(100,100,100,.5)">
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
    <!--背景图-->
    <div class="container-fluid service-bg1 "> </div>

    <div class="container">
        <div class="tab-head">
            <ul class="list-inline xs-list" id="list">
                <li> <a data-target="tab1" class="active">Frequently Asked Questions</a></li>
                <li> <a data-target="tab2">Warranties and Liability Guidelines</a></li>
                <li> <a data-target="tab3">OEM/ODM</a></li>
            </ul>
        </div>
        <div class="tab-body">  
            <!--#tab1 FAQ-->
            <div id="tab1" class=" tab-item">
                <div class="chapter">
                    <h3  data-bind="show">You might want to know some information about LTECH Lighting.
                        <span class="jianhao"></span>
                    </h3>
                    <ol>
                        <li><h4>1.What are the advantages of LTECH Lighting and its items?</h4></li>
                        <li>Answer:</li>
                        <li>A. With intelligent lighting controls system design implements multiple strategies for optimized energy savings up to 70%.</li>
                        <li>B.The items are the most innovative, simplicity and new contemporary look on the market today. </li>
                        <li>C. Provide solutions for the lighting market; from LED lights, LED commercial lights, LED Residential Lights to specific lighting control systems. </li>
                        <li>D. The best products with reasonable price .</li>
                        <li><h4>2. Do you offer Warranty on your products?</h4></li>
                        <li>Answer:We fully support the products we manufacture. In all of the LED lighting products, you have 5 year warranty. </li>
                        <li><h4>3. What is the delivery date after I placing the order? </h4></li>
                        <li>Answer: Normally the delivery day for 1 HQ container, we need 14 working days to delivery these items . </li>
                        <li><h4>4. Which port will you ship these goods ?</h4></li>
                        <li>Answer: From Jiangmen or shenzhen. </li>
                        <li><h4>5. What payments methods do you accept? </h4></li>
                        <li>Answer: We accept T/T advanced, L/C at sight . </li>
                        <li><h4>6. What price will you offer for FOB, EXW or CIF?</h4></li>
                        <li> Answer: We offer FOB price for each purchase. </li>

                    </ol>
                </div>
                <div class="chapter">
                    <h3  data-bind="show">Frequently Asked Questions about LED Lights:
                        <span class="jianhao"></span>
                    </h3>
                    <ol>
                        <li><h4>1. What is LED?</h4></li>
                        <li>Answer: A light emitting diode (LED) is a semiconductor device that emits visible light when electrical current passes through it, it is a special kind of diode.</li>
                        <li><h4>2. What color of light can LED emit?</h4></li>
                        <li>Answer: Most LEDs are monochromatic. Light color is associated with the light wavelength. 
                            LEDs made with different semiconductor materials emit lights in different wavelengths.
                            LED light wavelengths range from 400 nanometers (blue) to 800 nanometers (red).
                            The most demanded colors are white, warm white, red, orange, yellow, green and blue.
                        </li>
                        <li><h4>3. What are the advantages of LEDs compared with conventional incandescent lights?</h4></li>
                        <li>Answer: There are several obvious advantages LEDs have over traditional incandescent light bulbs, they are as follows:</li>
                        <li> - Low power consumption</li>
                        <li> - Energy saving</li>
                        <li> - Long lasting</li>
                        <li> - Cold lighting</li>
                        <li> - Small size and weight</li>
                        <li> - Fast Switch times</li>
                        <li> - Simple to use</li>
                        <li><h4>4.What is an LED lighting system? </h4></li>
                        <li>Answer: As with other light source technologies, such as fluorescent and high intensity discharge ,
                            lighting systems using LEDs can be thought of as having a light source (typically, the individual LED sources),
                            a ballast (for LEDs, often called a driver), and a luminaire (the surrounding materials for optical control
                            of the emitted light and thermal control of the overall system). Unlike traditional lighting systems with
                            few (typically, one to four) light sources, LED systems will likely contain arrays of many individual light sources in the near future.
                        </li>
                    </ol>
                </div>
            </div>

            <!--#tab2 Warranties and Liability Guidelines-->           
            <div id="tab2" class="hide  tab-item">
                <article>
                    <h3 class="text-center"> Warranties and Liability Guidelines</h3>
                    <section>
                        This limited warranty is provided by the LTECH company described below ("Seller") to you as the original purchaser of the LED lighting product that is identified on Seller's invoice reflecting its original purchase (the "Product"). The Seller is the LTECH Lighting identified as such on the invoice. This limited warranty may be transferred to subsequent purchasers of the Product, provided that such Product is resold in new condition and in its original packaging. Seller warrants that the Product, when delivered in new condition and in its original packaging, will be free of defects in material and workmanship for a period of FIVE(5) YEARS from the date of original purchase. The determination of whether the Product is defective shall be made by Seller in its sole discretion with consideration given to the overall performance of the Product. 
                    </section>
                    <section>
                        <p>1.1 Warranty is given by the Seller subject to the following conditions:</p>
                        1.1.1<ol> <li>  The Seller shall be under no liability in respect of any defect in the Goods arising from any drawing design or specification supplied by the Buyer.</li></ol>
                        1.1.2<ol> <li> The Seller shall be under no liability in respect of any defect in the Goods arising from fair wear and tear willful damage negligence abnormal working conditions of the Buyer failure to follow the Seller's instructions (whether oral or in writing) misuse or alteration or repair of the Goods by the Buyer without the Seller's approval.</li> </ol>
                        1.1.3<ol> <li>The Seller shall be under no liability under the above warranty (or any other warranty condition or guarantee) if the total price for the Goods has not been paid by the due date for payment.</li></ol>
                    </section>

                    <section>
                        <p>1.2 The above warranty does not extend to parts materials or equipment not manufactured by the Seller in respect of which the Buyer shall only be entitled to the benefit of any such warranty or guarantee as is given by the manufacturer to the Seller.</p>
                    </section>
                    <section>
                        <p>1.3 Any claim by the Buyer which is based on any defect in the quality or condition of the Goods or their failure to correspond with specification shall (whether or not delivery is refused by the Buyer) be notified to the Seller within 7 days from the date of delivery or (where the defect or failure was not apparent on reasonable inspection) within a reasonable time after discovery of the defect or failure. If delivery is not refused and the Buyer does not notify the Seller accordingly the Buyer shall not be entitled to reject the Goods and the Seller shall have no liability for such defect or failure and the Buyer shall be bound to pay the price as if the Goods has been delivered in accordance with the Contract.</p>
                    </section>  
                    <section>
                        <p>1.4 Where any valid claim in respect of any of the Goods which is based on any defect in the quality or condition of the Goods or their failure to meet specification is notified to the Seller in accordance with these Conditions the Seller shall be entitled to replace the Goods (or the part in question) free of charge or at the Seller's sole discretion refund to the Buyer the price of the Goods (or a proportionate part of the price) but the Seller shall have no further liability to the Buyer.</p>
                    </section>

                </article>
            </div>

            <!--#tab3 OEM|ODM-->
            <div id="tab3"  class="hide tab-item">
                <div class="row">        
                    <div class="col-md-6 col-xs-12">
                        <img src="/Public/img/home/service/OEM.jpg" class="img-responsive center-block">
                    </div>
                    <div class="col-md-6 col-xs-12 p-l-clear">
                        <section style="padding:15px;">
                            <p>
                                To meet increasing customer demand for flexible designs and LED lighting manufacturing services, 
                                LTECH Lighting offers OEM and ODM service that reduces customer engineering effort and shortens 
                                time-to-market response to put our customers ahead of the competition. LTECH Lighting can also
                                design and manufacture LED lighting products under the clients own specifications and brands. 
                            </p>
                            <a href="<?php echo U('Index/contact');?>" class="contact" >Contact us for more information</a>
                        </section>
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
        $(document).ready(function(){
            var thisurl = window.location.href;
            console.log(thisurl);
            var arr = thisurl.split('#');
            var targetTab = arr[arr.length - 1];
            console.log(targetTab);
            switch (targetTab){
                case 'tab2':
                    $('#list li a').each(function(){
                        $(this).removeClass('active');
                    });
                    $('#list li a[data-target ="tab2"]').addClass('active');
                    $('.tab-item').each(function(){
                        $(this).addClass('hide');
                    });
                    $('#tab2').removeClass('hide');
                    break;
                case 'tab3':
                    $('#list li a').each(function(){
                        $(this).removeClass('active');
                    });
                    $('#list li a[data-target ="tab3"]').addClass('active');
                    $('.tab-item').each(function(){
                        $(this).addClass('hide');
                    });
                    $('#tab3').removeClass('hide');
                    break;
                default:
                    break;
            }

//            tab选项是否选中状态切换 对应的选项卡显示 其他选项卡隐藏
            $('#list li a').on('click',function(){
                $('#list li a').each(function(){
                    $(this).removeClass('active');
                });
                $(this).addClass('active'); 
                var target = $(this).attr('data-target');
                $('.tab-item').each(function(){
                    $(this).addClass('hide');
                });
                $('#'+ target).removeClass('hide');
            });

//            FAQ问答内容显示隐藏功能
            $('h3').on('click',function(){
                var flag = $(this).attr('data-bind');
                if(flag === "show"){
                    $(this).next().hide();
                    $(this).attr('data-bind','hide');
                    $(this).children('span').removeClass('jianhao').addClass('jiahao');
                }
                else if(flag === 'hide'){
                    $(this).next().show();
                    $(this).attr('data-bind','show');
                    $(this).children('span').removeClass('jiahao').addClass('jianhao');
                }
            });
            
        });
    </script>
           
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>