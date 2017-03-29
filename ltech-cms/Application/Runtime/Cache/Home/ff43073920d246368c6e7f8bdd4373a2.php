<?php if (!defined('THINK_PATH')) exit(); $productsConfigName = 'products'; $productsConfig = D("Basic")->get_basic_config($productsConfigName); ?>
<!DOCTYPE html>
<html lang="en">
    <head> 
        <meta charset="utf-8">
        <title><?php echo ($productsConfig["name"]); ?> </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <link href="/Public/css/ltech-style.css" rel="stylesheet" >
    </head>
    <body>
<?php
$nav = D("Menu")->getHomeNav(); $productsType = D("ProductsType")->getType(); ?>

<nav class="navbar navbar-default m-b-0">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="/logo.png" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse pull-right nav-p-r-0" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        
                        <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class='<?php if($vo["name"] == 'Products'): ?>dropdown<?php endif; ?>'>
                                <a href="<?php echo (getHomeNavUrl($vo)); ?>" title="<?php echo ($vo["name"]); ?>"   class='<?php if($vo["name"] == 'Products'): ?>dropdown-toggle<?php endif; ?> <?php if($active == $vo[name]): ?>active<?php endif; ?> ' <?php if($vo["name"] == 'Products'): ?>data-toggle="dropdown"<?php endif; ?>>
                                    <?php echo ($vo["name"]); ?>
                                    <?php if($vo["name"] == 'Products'): ?><b class="caret"></b><?php endif; ?>
                                    
                                </a>
                            <?php if($vo["name"] == 'Products'): ?><ul class="dropdown-menu">
                                    <?php if(is_array($productsType)): $i = 0; $__LIST__ = $productsType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Products/type','id='.$vo[id]);?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>      
                                </ul><?php endif; ?>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                    <form class="navbar-form nav-form-responsive nav-p-r-0" role="search" style="margin-top: 16px;">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search">
                            <span class="input-group-btn"><button type="submit" class="btn btn-sm btn-submit "><i class="fa fa-search "></i></button></span>
                        </div>
                    </form>

                </div>
            </div>
        </nav>
<div class="container-fluid" >
    <div class="row">
        <div class="center-block"><img src="/Public/img/home/products-banner.jpg" alt="led linear lights" class="img-responsive center-block" /></div>

    </div>
</div>
<div class="container" >
    <img src="/Public/img/home/products-top.png" alt="led linear lights" class="img-responsive"  style="margin-top:-15%; "/>
</div>
<div class="container " >
    <div class="row introduce-container"  >
        <div class="col-md-6 " >
            <img src="/Public/img/home/products-des-img.jpg" alt="LED Troffers use in the office" class="img-responsive md-width" />
        </div>
        <div class="col-md-6" >
            <div id="introduce" class="introduce max-h" >
                <span class="more" data-bind="more" id="more"> >>more </span>

                <p class="sm-text-justify">
                    LTECH Lighting is a company that designs, manufactures LED lights and offer intelligent lighting control solutions.
                    We provide solutions for the lighting market; from LED lights, LED commercial lights, 
                    LED Residential Lights to specific lighting control systems. When selecting different LED 
                    lights and lighting control systems, having all the knowledge and information from the start
                    can make a difference in your project. LTECH Lighting can help you get all the important products 
                    and specifications from the start. Our team of experienced managers and engineers will help you build
                    a system that will work flawlessly - from specifying the product, choosing lighting control systems and accessories,
                    to providing electrical diagrams for installation. LTECH lighting offers a wide range of product customization 
                    features such as specific color temperature and color rendering indexes. LTECH Lighting can design and create 
                    any modification for any of the products that we offer.And also provides assistance in design, manufacturing and 
                    certification of LED lighting products and intelligent lighting control systems.
                </p>
                <p class="sm-text-justify">We are bilingual, easily accessible and readily available. Always glad to help you in your projects.</p>
            </div>
        </div>
    </div>
</div>

<!--productsType banner -->
<div class="container owl-nav-container">
    <div class="owl-carousel">
        <?php if(is_array($type)): foreach($type as $key=>$vo): ?><div class="img-responsive  center-block">
                <a href="<?php echo U('Products/type','id='.$vo[id]);?>" title='<?php echo ($vo["name"]); ?>'>   
                    <img src="<?php echo ($vo["thumb"]); ?>" alt="" class="img-responsive">        
                </a>
            </div><?php endforeach; endif; ?>
    </div>
    <!--前进后退按钮-->
    <div class="owl-nav"> </div>
</div>
<!--products展示-->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center products-title">PRODUCTS</h1>
        </div>
    </div>

    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row">
            <div class="col-xs-12">
                <h2 class="products-type-title"><a href="<?php echo U('Products/type','id='.$vo[id]);?>"> >><?php echo ($vo["name"]); ?> </a></h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <?php if(is_array($products)): foreach($products as $key=>$product): if($product["type"] == $vo['id']): ?><div class=" col-sm-4 col-xs-6 col-xxs-thumbnail-width">
                        <div class="thumbnail thumbnail-bg  xxs-thumbnail-width center-block ">
                            <a href="<?php echo U('Products/product','id='.$product[products_id]);?>" title='<?php echo ($product["name"]); ?>'><img class="img-responsive" src="<?php echo ($product["thumb"]); ?>" alt=""></a>
                            <div class="caption">
                                <span><?php echo ($vo["name"]); ?></span>
                                <br>
                                <span  class='name'><?php echo ($product["name"]); ?></span>
                                <a class='view' href="<?php echo U('Products/product','id='.$product[products_id]);?>" title='<?php echo ($product["name"]); ?>'>VIEW MORE</a>
                            </div>
                        </div>
                    </div><?php endif; endforeach; endif; ?>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>

<?php
$type = D("ProductsType")->getType(); ?>

<!--底部信息-->
<div class="bottom-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-5">
                <h3>Interested? Let's talk</h3>
                <p>Let us help you get start with our LED lightings</p>
                <p class="contact-info call">
                    <span class="fa-icon"><i class=" fa fa-phone" ></i></span> Call <em>+86 756-8676220</em>                 
                </p>
                <p class="contact-info">
                    <span class=" fa-icon"><i class="fa fa-envelope-o"></i></span> Send an inquiry:
                    <a href="mailto:lt@ltechlighting.com" title="ltechlighting contact email"><em>lt@ltechlighting.com</em></a>
                </p>

                <p class="contact-info">
                    <span class=" fa-icon "><i class="fa fa-map-marker"></i></span>
                    <span class="address">15th Building, No.3, Pingdong 6th Road, Nanping Technical Industrial Park, Zhuhai, Guangdong, China</span>
                </p> 
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6  ul-after">
                <div class="bottom-nav">
                    <p class="bottom-nav-title">Ltech Lighting</p>
                    <ul >
                        <li><a href="<?php echo U('Products/index');?>" title='Products'>Products</a></li>
                        <li><a href="<?php echo U('Index/about');?>" title='About us'>About us</a></li>
                        <li><a href="<?php echo U('Index/service');?>" title='Service & support'>Service & support</a></li>
                        <li><a href="<?php echo U('Index/contact');?>" title='Contact us'>Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6  ">
                <div class="bottom-nav  ">
                    <p class="bottom-nav-title">Products</p>
                    <ul >
                        <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('Products/type','id='.$vo[id]);?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6  col-xs-8 xs-width col-lg-3">
                <p class="bottom-nav-title">Subscribe to Ltech lighting news</p>
                <form>
                    <div class="input-group">
                        <input type="email" class="form-control" id="emailAddress" autocomplete="off"  placeholder="Enter Email Address" required maxlength="50">
                        <span class="input-group-btn"><button class="btn btn-danger" id="emailbtn"><i class="fa fa-envelope-o "></i></button></span>
                    </div>
                </form>

            </div>
        </div>
        
    </div>
</div>
<!--底部copyright-->
<div class=" bottom">
    <div class="container">
        <div class="row ">
            <div class="col-xs-12 col-sm-6 clearfix">
                <p class="f-l copyright">Copyright © 2016 Ltechlighting. All rights reserved.</p>
            </div>
            <div class="col-xs-12 col-sm-6 clearfix">
                <div class="bottom-share ">
                    <a rel="nofollow" class="share-icon facebook" href="https://www.facebook.com/Ltechlighting-1757356137874830/" target="_blank" >
                        <i class="fa fa-facebook fa-2x"></i>
                    </a>
                    <a rel="nofollow" class="share-icon twitter" href="https://twitter.com/LtechlightingAy" target="_blank" >
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
<!--分享链接-->
<div id="share">
    <div class="share-content">
        <div class="share-link" title="share">
            <a rel="nofollow" title="share to facebook" class="link-item"><span class=" fa fa-2x  fa-facebook"></span> &nbsp;&nbsp; Facebook</a>
            <a rel="nofollow" title="share to twitter" class="link-item"><span class=" fa fa-2x  fa-twitter"></span>&nbsp; Twitter</a>
            <a rel="nofollow" title="share to youtube" class="link-item"><span class=" fa fa-2x  fa-youtube"></span>&nbsp; Youtube </a>
            <a rel="nofollow" title="share to linkedin" class="link-item"><span class=" fa fa-2x  fa-linkedin"></span>&nbsp; Linkedin</a>                  
        </div>          
    </div>
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
                    margin: 10,
                    nav: true
                },
                375: {
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


        //手机端阅读
        $("#more").click(function () {
            var val = $(this).attr('data-bind');
            console.log(val);
            if (val === 'more') {
                $('#introduce').removeClass("max-h");
                $(this).attr('data-bind', 'hide');
                $(this).html(">>Collapse");
            } else {
                $('#introduce').addClass("max-h");
                $(this).attr('data-bind', 'more');
                $(this).html(">>more");

            }
        });
    });


</script>
       
        <script type="text/javascript" src="https://secure.skypeassets.com/i/scom/js/skype-uri.js"></script>
        <script src="/Public/js/Home/common.js"></script>
    </body>
</html>