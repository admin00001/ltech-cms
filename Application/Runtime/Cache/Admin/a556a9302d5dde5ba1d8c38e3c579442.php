<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ltechlighting-CMS</title>     
        <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">     
        <link href="/Public/css/font-awesome.css" rel="stylesheet">
        <link href="/Public/favicon.ico" rel="icon">
        <!--上传插件uploadify的css-->
        <link href="/Public/uploadify/uploadify.css" rel="stylesheet">
        <link href="/Public/css/ltech-admin.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--页面头部-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Ltechlighting后台管理系统</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right ">
                        <!--                <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Settings</a></li>-->
                        <li class="dropdown ">
                            <a class="dropdown-toggle  " data-toggle="dropdown" href="#" ><i class="fa fa-user"></i>  <?php echo getLoginUsername(); ?> <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo U('Admin/personal');?>"><i class="fa fa-user"></i> 个人中心</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo U('Login/logout');?>"><i class="fa fa-power-off"></i> 退出登录</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <form class="navbar-form navbar-right">
                        <input type="text" class="form-control" placeholder="Search...">
                    </form>
                </div>
            </div>
        </nav>
<?php  $menus = D("Menu")->getAdminMenus(); $authority = getLoginUserAuthority(); $unsetMenu = array('Menu','Position','Admin'); foreach($menus as $k => $v){ if($authority != 2 && in_array($v['controller'],$unsetMenu) ){ unset($menus[$k]); } } ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-2  ">
            <section class="sidebar">
                <ul class="nav nav-sidebar  ">
                    <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adminMenu): $mod = ($i % 2 );++$i;?><li><a href="<?php echo (getAdminMenuUrl($adminMenu)); ?>"  <?php echo (getActive($adminMenu["controller"])); ?>> <i class="fa  <?php echo ($adminMenu["fa_icon"]); ?>"></i> <?php echo ($adminMenu["name"]); ?> </a><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </section>

        </div>


<!--右边主要内容显示区开始-->
<div class="col-sm-9 col-md-9 col-lg-10">
    <section class="mainbody">
        <ol class="breadcrumb">
            当前位置：
            <li><a href="<?php echo U('index/index');?>"><i class='fa fa-home'></i> 首页</a></li>
            <li><a href="<?php echo U('Products/index');?>"><i class='fa fa-product-hunt'></i>  产品管理 </a></li>
            <li class="active"><i class="fa fa-edit"></i>编辑产品</li>          
        </ol> 
        
        <form id="editForm" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">产品名：</label>
                <div class="col-sm-6 ">
                    <input type="text" class="form-control" maxlength="50"  placeholder="请输入产品名 限50字符" name ="name" value="<?php echo ($products["name"]); ?>">
                </div>
            </div>
            
            <div class="form-group" >
                <label class="col-sm-3 col-lg-2 control-label">产品类型：</label>
                <div class="col-sm-6 ">
                    <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label class=" radio-inline">
                            <input type="radio" value="<?php echo ($vo["id"]); ?>" name="type" <?php if($products["type"] == $vo['id']): ?>checked<?php endif; ?>> <?php echo ($vo["name"]); ?>
                        </label><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">title：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="text" class="form-control" maxlength="70" placeholder="产品title 最好55字符内 限70字符" name="title" value="<?php echo ($products["title"]); ?>">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">keywords：</label>
                <div class="col-sm-9 col-lg-10">
                    <input type="text" class="form-control" maxlength="200" placeholder="请输入keywords 限200字符" name="keywords" value="<?php echo ($products["keywords"]); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">description：</label>
                <div class="col-sm-9 col-lg-10">
                    <input type="text" class="form-control" maxlength="200" placeholder="请输入description 限200字符" name="description" value="<?php echo ($products["description"]); ?>">
                </div>
            </div>
            
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">缩略图：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="thumb_upload"  type="file" multiple="true" >
                    <img style="display: none" id="thumb_img" src="<?php echo ($products["thumb"]); ?>" class="img-responsive" alt="" >
                    <input id="thumb" name="thumb" type="hidden" multiple="true" value="<?php echo ($products["thumb"]); ?>">
                </div>
                          
            </div>
            <hr> 
            
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品大图：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_main_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_main_img" src="<?php echo ($products["img_main"]); ?>" class="img-responsive" alt="" >
                    <input id="img_main" name="img_main" type="hidden" multiple="true" value="<?php echo ($products["img_main"]); ?>">
                </div>
                
            </div>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品描述一：</label>
                <div class="col-sm-9 col-lg-6">
                    <textarea class="form-control description" name="description_one"  placeholder="产品描述一"><?php echo ($products["description_one"]); ?></textarea>
                </div>
            </div>
            <hr>

            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品描述二：</label>
                <div class="col-sm-9 col-lg-6">
                    <textarea class="form-control description" name="description_two"  placeholder="产品描述二"><?php echo ($products["description_two"]); ?></textarea>
                </div>
            </div>
            
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品应用场景图一：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_application_one_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_application_one_img" src="<?php echo ($products["img_application_one"]); ?>" class="img-responsive" alt="" >
                    <input id="img_application_one" name="img_application_one" type="hidden" multiple="true" value="<?php echo ($products["img_application_one"]); ?>">
                </div>
                
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品应用场景图二：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_application_two_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_application_two_img" src="<?php echo ($products["img_application_two"]); ?>" class="img-responsive" alt="" >
                    <input id="img_application_two" name="img_application_two" type="hidden" multiple="true" value="<?php echo ($products["img_application_two"]); ?>">
                </div>
                
            </div>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品描述三：</label>
                <div class="col-sm-9 col-lg-6">
                    <textarea class="form-control description" name="description_three"  placeholder="产品描述三"><?php echo ($products["description_three"]); ?></textarea>
                </div>
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">相关产品图(310x170带边框)：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="family_products_upload"  type="file" multiple="true" >
                    <img style="display: none" id="family_products_img" src="<?php echo ($products["family_products"]); ?>" class="img-responsive" alt="" >
                    <input id="family_products" name="family_products" type="hidden" multiple="true" value="<?php echo ($products["family_products"]); ?>">
                </div>
                          
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品浏览图一：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_small_one_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_small_one_img" src="<?php echo ($products["img_small_one"]); ?>" class="img-responsive" alt="" >
                    <input id="img_small_one" name="img_small_one" type="hidden" multiple="true" value="<?php echo ($products["img_small_one"]); ?>">
                </div>            
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品浏览图二：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_small_two_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_small_two_img" src="<?php echo ($products["img_small_two"]); ?>" class="img-responsive" alt="" >
                    <input id="img_small_two" name="img_small_two" type="hidden" multiple="true" value="<?php echo ($products["img_small_two"]); ?>">
                </div>
                
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品浏览图三：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="img_small_three_upload"  type="file" multiple="true" >
                    <img style="display: none" id="img_small_three_img" src="<?php echo ($products["img_small_three"]); ?>" class="img-responsive" alt="" >
                    <input id="img_small_three" name="img_small_three" type="hidden" multiple="true" value="<?php echo ($products["img_small_three"]); ?>">
                </div>              
            </div>
            <hr>
       
            <div class="form-group">
                <label for="featureEditor" class="col-sm-3 col-lg-2 control-label">Features:</label>
                <div class="col-sm-9 col-lg-10">
                    <textarea class="kindeditor form-control" id="featureEditor" name="features" ><?php echo ($products["features"]); ?></textarea>
                 </div>
            </div>
            
            <hr>
            <div class="form-group">
              <label for="specification_features" class="col-sm-3 col-lg-2 control-label">Specification feature:</label>
              <div class="col-sm-9 col-lg-10">
                  <textarea class="kindeditor form-control" id="specification_features" name="specification_features" ><?php echo ($products["specification_features"]); ?></textarea>
              </div>
            </div>
            
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品数据图1（轮播必选）：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="data_banner_one_upload"  type="file" multiple="true" >
                    <img style="display: none" id="data_banner_one_img" src="<?php echo ($products["data_banner_one"]); ?>" class="img-responsive" alt="" >
                    <input id="data_banner_one" name="data_banner_one" type="hidden" multiple="true" value="<?php echo ($products["data_banner_one"]); ?>">
                </div>             
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品数据图2（轮播可选）：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="data_banner_two_upload"  type="file" multiple="true" >
                    <img style="display: none" id="data_banner_two_img" src="<?php echo ($products["data_banner_two"]); ?>" class="img-responsive" alt="" >
                    <input id="data_banner_two" name="data_banner_two" type="hidden" multiple="true" value="<?php echo ($products["data_banner_two"]); ?>">
                </div>             
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品数据图3（轮播可选）：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="data_banner_three_upload"  type="file" multiple="true" >
                    <img style="display: none" id="data_banner_three_img" src="<?php echo ($products["data_banner_three"]); ?>" class="img-responsive" alt="" >
                    <input id="data_banner_three" name="data_banner_three" type="hidden" multiple="true" value="<?php echo ($products["data_banner_three"]); ?>">
                </div>             
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品数据图4（轮播可选）：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="data_banner_four_upload"  type="file" multiple="true" >
                    <img style="display: none" id="data_banner_four_img" src="<?php echo ($products["data_banner_four"]); ?>" class="img-responsive" alt="" >
                    <input id="data_banner_four" name="data_banner_four" type="hidden" multiple="true" value="<?php echo ($products["data_banner_four"]); ?>">
                </div>             
            </div>
            <hr>
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">产品数据图5（轮播可选）：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="data_banner_five_upload"  type="file" multiple="true" >
                    <img style="display: none" id="data_banner_five_img" src="<?php echo ($products["data_banner_five"]); ?>" class="img-responsive" alt="" >
                    <input id="data_banner_five" name="data_banner_five" type="hidden" multiple="true" value="<?php echo ($products["data_banner_five"]); ?>">
                </div>             
            </div>
            <hr>
            <div class="form-group">
              <label for="extra_one" class="col-sm-3 col-lg-2 control-label">额外添加一:</label>
              <div class="col-sm-9 col-lg-10">
                  <textarea class="kindeditor form-control" id="extra_one" name="extra_one" ><?php echo ($products["extra_one"]); ?></textarea>
              </div>
            </div>
            
            <div class="form-group">
              <label for="extra_two" class="col-sm-3 col-lg-2 control-label">额外添加二:</label>
              <div class="col-sm-9 col-lg-10">
                  <textarea class="kindeditor form-control" id="extra_two" name="extra_two" ><?php echo ($products["extra_two"]); ?></textarea>
              </div>
            </div>
           
            
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">产品状态：</label>
                <div class="col-sm-6">
                    <label class='radio-inline'>
                        <input type="radio" name="status" value="1" <?php if($products["status"] == 1): ?>checked<?php endif; ?>>正常
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" value="0" <?php if($products["status"] == 0): ?>checked<?php endif; ?>>关闭
                    </label>
                </div>
            </div>
            <input type="hidden" name="products_id" value="<?php echo ($products["products_id"]); ?>">
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="button" class="form-control btn-success btn-submit" id="btnSubmit" value="更新产品数据">
                </div>               
            </div>
            
        </form>
    </section>
</div><!--col-sm-3 col-md-9 col-lg-10 end -->
<!--右边主要内容显示区结束-->
</div><!--row end 开始标签在sidebar -->
</div><!--container-fluid  end 开始标签在sidebar -->


<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<!--每个方法的对应的模板部分的自定义javascript放在这里-->
<script>
    //在模板里面定义的u方法可以被解析成对应路由，如果是外部引入的js文件里面定义u方法就不会被解析
   var SCOPE = {
      save_url : "<?php echo U('Admin/Products/add');?>"  ,
      jump_url : "<?php echo U('Admin/Products/index');?>",
      ajax_upload_image_url : "/Admin/Image/ajaxuploadimage",//后台接口处理ajax上传的图片
      ajax_upload_swf : '/Public/uploadify/uploadify.swf'
    };
    //已经上传了图的地方就显示图片！
   
    $(function(){
       showImg('thumb_img');
       showImg('img_main_img');
       showImg('img_application_one_img');
       showImg('img_application_two_img');
       showImg('family_products_img');
       showImg('img_small_one_img');
       showImg('img_small_two_img');
       showImg('img_small_three_img');
       showImg('data_banner_one_img');
       showImg('data_banner_two_img');
       showImg('data_banner_three_img');
       showImg('data_banner_four_img');
       showImg('data_banner_five_img');
       
    });
    
</script>
<!--ajax上传缩略图js-->
<script src="/Public/uploadify/jquery.uploadify.min.js"></script>
<script src="/Public/uploadify/image.js"></script>
<!--引入kindeditor 编辑器js-->
<script src="/Public/kindeditor/kindeditor-all-min.js"></script>

<!--对编辑器进行配置-->
<script>
    var options ={
        uploadJson : '/Admin/image/kindupload',//后台接收上传文件的地址
        resizeType:2,//文本框可否缩放，1代表只可高度缩放，默认2 高宽可缩放，0代表不可缩放
        minWidth:320,//最小宽度
        filePostName:'file',
        filterMode:false,//false时允许输入任何代码 ，在代码模式下写的代码不会被过滤
        themeType:'simple',//文本框样式可选simple 或者default 默认default
        afterBlur : function(){this.sync();} ,//文本框失焦 就同步文本框的内容到value值里面
        afterUpload:function(result){dialog.successTip('上传成功');}
    };
     KindEditor.ready(function(K) {
                window.editor = K.create('#featureEditor',options);//feature编辑器
                window.editor = K.create('#specification_features',options);
                window.editor = K.create('#extra_one',options);
                window.editor = K.create('#extra_two',options);
                });
</script>

<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
<script src="/Public/js/Admin/common.js"></script>
</body>
</html>