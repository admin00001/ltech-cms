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
            <li class="active"><i class='fa  fa-cogs'></i> 基本管理 </li>    

        </ol> 

        <h2 class=" tab-head">
            <span class="active" data-target="basic">基本配置</span>
            <span class="" data-target="products">产品主页配置</span>
            <span class="" data-target="indexstatic">静态化配置</span>
        </h2>
        <div class="tab-pane" id="basic" style="margin-top: 50px;">
            <form id="editForm1" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">网站标题：</label>
                    <div class="col-sm-9 col-lg-5">
                        <input type="text" class="form-control" maxlength="60" autocomplete="off"  placeholder="请输入网站标题" name ="name"  value="<?php echo ($basic["name"]); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">网站关键词：</label>
                    <div class="col-sm-9 col-lg-8">
                        <input type="text" class="form-control" maxlength="160" autocomplete="off"  placeholder="请输入网站关键词" name ="keywords" value="<?php echo ($basic["keywords"]); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">网站描述：</label>
                    <div class="col-sm-9 col-lg-6">
                        <textarea class="form-control description" maxlength="230" name="description"><?php echo ($basic["description"]); ?></textarea>
                    </div>
                </div>
                
                
                <input type='hidden' name ="configName" value="basic_config">

                <div class="form-group">
                    <div class="col-xs-6">
                        <input type="button" class="form-control btn-success btn-submit" id="btnSubmit1" value="保存">
                    </div>               
                </div> 
            </form>
        </div>
        <div class="tab-pane hide" id="products" style="margin-top: 50px;">
            <form id="editForm2" class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Products标题：</label>
                    <div class="col-sm-9 col-lg-5">
                        <input type="text" class="form-control" maxlength="60" autocomplete="off"  placeholder="请输入Products标题" name ="name"  value="<?php echo ($products["name"]); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Products关键词：</label>
                    <div class="col-sm-9 col-lg-8">
                        <input type="text" class="form-control" maxlength="160" autocomplete="off"  placeholder="请输入products关键词" name ="keywords" value="<?php echo ($products["keywords"]); ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 col-lg-2 control-label">Products描述：</label>
                    <div class="col-sm-9 col-lg-6">
                        <textarea class="form-control description" maxlength="230" name="description"><?php echo ($products["description"]); ?></textarea>
                    </div>
                </div>
                <input type='hidden' name ="configName" value="products">

                <div class="form-group">
                    <div class="col-xs-6">
                        <input type="button" class="form-control btn-success btn-submit" id="btnSubmit2" value="保存">
                    </div>              
                </div> 
            </form>
        </div>
        
         <div class="tab-pane hide" id="indexstatic" style="margin-top: 50px;">
             <table class="table">
                 <tbody>
                    <tr>
                        <td>上次更新时间是:<span id="refreshtime" style="color: #ed2424;margin-left: 10px;font-weight: bold;"><?php echo (date("Y-m-d H:i",$refreshIndex["time"])); ?></span></td>
                        <td><button class="btn btn-success " id="refreshIndex">更新静态首页</button></td>
                    </tr>
                    <tr>
                        <td>上次更新时间是:<span id="productIndextime" style="color: #ed2424;margin-left: 10px;font-weight: bold;"><?php echo (date("Y-m-d H:i",$refreshProducts["time"])); ?></span></td>
                        <td><button class="btn btn-success " id="refreshProductIndex">更新产品主页</button></td>
                    </tr>
                 </tbody>
             </table>
             
             
         </div>
    </section>
</div><!--col-sm-3 col-md-9 col-lg-10 end -->
<!--右边主要内容显示区结束-->
</div><!--row end 开始标签在sidebar -->
</div><!--container-fluid  end 开始标签在sidebar -->


<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>  
<script>
    SCOPE = {
        save_url: "<?php echo U('Basic/save');?>",
        jump_url: "<?php echo U('Basic/index');?>"
    };
    $(function () {
        //tab-head tab切换操作
        $('.tab-head span').click(function () {
            var target = $(this).attr('data-target');
            $('.tab-head span').each(function (i) {
                $(this).removeClass('active');
            });
            $(this).addClass('active');

            $('.tab-pane').each(function () {
                $(this).addClass('hide');
            });
            $('#' + target).removeClass('hide');
        });

        //提交按钮事件，可以用来 更新/添加 
        $('#btnSubmit1').click(function () {
            var data = $("#editForm1").serialize();
            var url = SCOPE.save_url;
            var jump_url = SCOPE.jump_url;

            $.post(url, data, function (result) {
                if (result.status === 1) {
                    return dialog.success(result.message, jump_url);
                } else if (result.status === 0) {
                    return dialog.error(result.message);
                }
            }, 'json');
        });
         //提交按钮事件，可以用来 更新/添加 
        $('#btnSubmit2').click(function () {
            var data = $("#editForm2").serialize();
            var url = SCOPE.save_url;
            var jump_url = SCOPE.jump_url;

            $.post(url, data, function (result) {
                if (result.status === 1) {
                    return dialog.success(result.message, jump_url);
                } else if (result.status === 0) {
                    return dialog.error(result.message);
                }
            }, 'json');
        });
        //更新首页静态内容
        $('#refreshIndex').click(function(){
            var url ="<?php echo U('Home/Index/build_html');?>";
            $.post(url,{},function(result){
                if(result.status === 1){
                    dialog.successTip(result.message);
                    $('#refreshtime').html(result['data']['time']); 
                }
                else{
                    return dialog.error(result.message);
                }
            },'json');
        });
        
        $('#refreshProductIndex').on('click',function(){
             var url ="<?php echo U('Home/Products/build_html');?>";
             $.post(url,{},function(result){
                if(result.status === 1){
                    dialog.successTip(result.message);
                    $('#productIndextime').html(result['data']['time']); 
                }
                else{
                    return dialog.error(result.message);
                }
            },'json');
        });
    });
</script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
</body>
</html>