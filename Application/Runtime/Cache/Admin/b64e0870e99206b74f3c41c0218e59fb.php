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
            <li><a href="<?php echo U('Admin/index');?>"><i class='fa fa-user-plus'></i> 用户管理 </a> </li>
            <li class="active"><i class='fa fa-refresh fa-spin '></i> 编辑用户 </li>          
        </ol> 
        <form id="editForm" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">用户名：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="text" class="form-control" maxlength="255" autocomplete="off"   placeholder="请输入用户名" name ="username" value="<?php echo ($admin["username"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">真实姓名：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="text" class="form-control" maxlength="255"  autocomplete="off"  placeholder="请输入真实姓名" name ="realname" value="<?php echo ($amdin["realname"]); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">密码：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="password" class="form-control" maxlength="255"  autocomplete="off"  placeholder="输入新密码" name ="password" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">确认密码：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="password" class="form-control" maxlength="255"  autocomplete="off"   placeholder="请确认新密码" name="comfirmPsw" value="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">email：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="email" class="form-control" maxlength="255" autocomplete="off" placeholder="请输入email" name ="email" value="<?php echo ($admin["email"]); ?>">
                </div>
            </div>
            <input type="hidden" name="admin_id" value="<?php echo ($admin["admin_id"]); ?>">
            <?php if($admin["authority"] == 1): ?><div class="form-group">
                <label class="col-sm-3  col-lg-2 control-label">状态：</label>
                <div class="col-sm-9 col-lg-6">
                    <label class='radio-inline'>
                        <input type="radio" name="status" value="1" <?php if($admin["status"] == 1): ?>checked<?php endif; ?> >正常
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="status" value="0" <?php if($admin["status"] == 0): ?>checked<?php endif; ?> >关闭
                    </label>
                </div>
            </div><?php endif; ?>
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="button" class="form-control btn-success btn-submit" id="btnSubmit" value="更新">
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
<script>
    var SCOPE ={
        save_url : "<?php echo U('Admin/add');?>",
        jump_url : "<?php echo U('Admin/index');?>"
    };
</script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
<script src="/Public/js/Admin/common.js"></script>
</body>
</html>