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
            <li><a href="<?php echo U('ProductsType/index');?>"><i class='fa fa-cog fa-spin'></i> 产品类型管理</a></li>
            <li class="active"><i class='fa fa-plus'></i> 添加产品类型 </li>          
        </ol> 
        <form class ="form-horizontal" id="editForm">
            <div class="form-group" >
                <label class="col-sm-3 col-lg-2 control-label">产品类型名：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="text" class="form-control" maxlength="255" placeholder="产品类型名" name="name" value="">
                </div>
            </div>
            <div class="form-group" >
                <label class="col-sm-3 col-lg-2 control-label">产品介绍：</label>
                <div class="col-sm-9 col-lg-6">
                    <textarea class="form-control description" maxlength="2000" placeholder="产品介绍" name="introduce" value=""></textarea>
                </div>
            </div>
            
            <div class="form-group ">
                <label class="col-sm-3 col-lg-2 control-label">缩略图(380x496)：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="thumb_upload"  type="file" multiple="true" >
                    <img style="display: none" id="thumb_img" src="" class="img-responsive" alt="" >
                    <input id="thumb" name="thumb" type="hidden" multiple="true" value="">
                </div>
            </div>
            <hr> 
            
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">状态：</label>
                <div class="col-sm-6">
                    <label class='radio-inline'>
                        <input type="radio" name="status" value="1" >正常
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" value="0" checked>关闭
                    </label>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">是否只有产品类型？：</label>
                <div class="col-sm-9 col-lg-6">
                    <label class='radio-inline'>
                        <input type="radio" name="only_type" value="1" >是
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="only_type" value="0" checked>否
                    </label>
                    <p style="color:red;margin-top: 10px;">如果只是有这个产品类型就选“是”，如果这个产品类型还有一些独立的产品型号页面要添加就选“否”</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="button" class="form-control btn-success btn-submit" id="btnSubmit" value="添加">
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
<script src="/Public/uploadify/jquery.uploadify.min.js"></script>
<script src="/Public/uploadify/image.js"></script>
<!--每个方法的对应的模板部分的自定义javascript放在这里-->
<script>
    var SCOPE = {
        save_url : "<?php echo U('Admin/ProductsType/add');?>",
        jump_url : "<?php echo U('Admin/ProductsType/index');?>",
        ajax_upload_image_url : "/Admin/Image/ajaxuploadimage",//后台接口处理ajax上传的图片
        ajax_upload_swf : '/Public/uploadify/uploadify.swf'
    };
</script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
<script src="/Public/js/Admin/common.js"></script>
</body>
</html>