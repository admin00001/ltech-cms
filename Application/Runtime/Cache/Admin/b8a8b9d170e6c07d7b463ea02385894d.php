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
            <li class="active"><i class='fa fa-info  '></i> 推荐位内容管理 </li>          
        </ol> 

        <h2 class=" tab-head">
            <span class="active" data-target="banner">banner管理</span>
            <span class="" data-target="advs">首页中间广告位管理</span>
            <span class="" data-target="catalogue">Catalogue管理</span>
        </h2>
        <div class="tab-pane" id="banner">
            <button class="btn btn-default  add" id="addBanner"><i class="fa fa-plus"></i>添加banner</button>
            <button class="btn btn-default  add" id="listorderBannerUpdate" data-model="Banner"><i class="fa fa-refresh fa-spin"></i>更新banner排序</button>
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="80">排序</th>
                            <th>banner ID</th>
                            <th>banner 名</th>
                            <th>创建时间</th>
                            <th>修改时间</th>
                            <th>极小图</th>
                            <th>小图</th>
                            <th>中图</th>
                            <th>大图</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form id="listorderBannerForm">
                        <?php if(is_array($banner)): foreach($banner as $key=>$banner): ?><tr>
                                <td><input type="text" size="5" name="<?php echo ($banner["id"]); ?>" value="<?php echo ($banner["listorder"]); ?>" maxlength="4"/></td>
                                <td><?php echo ($banner["id"]); ?></td>
                                <td><?php echo ($banner["name"]); ?></td>
                                <td><?php echo (date("Y-m-d H:i",$banner["create_time"])); ?></td>
                                <td><?php echo (date("Y-m-d H:i",$banner["update_time"])); ?></td>
                                <td><?php echo (hasImg($banner["img_xs"])); ?></td>
                                <td><?php echo (hasImg($banner["img_sm"])); ?></td>
                                <td><?php echo (hasImg($banner["img_md"])); ?></td>
                                <td><?php echo (hasImg($banner["img_lg"])); ?></td>
                                <td><span id="updateStatus" data-model="Banner" data-id = "<?php echo ($banner["id"]); ?>" data-behavior = "更改状态"  <?php if($banner["status"] == 1): ?>data-status="0" <?php else: ?> data-status="1"<?php endif; ?>><?php echo (status($banner["status"])); ?></span></td>
                                <td>
                                    <a id="editBanner"   class="edit" title="编辑"  data-behavior="编辑" data-id="<?php echo ($banner["id"]); ?>" ><i class="fa fa-edit"></i> 编辑</a>
                                    <a id="deleteBanner" class="delete" title="删除" data-behavior="删除" data-id="<?php echo ($banner["id"]); ?>" data-status = "-1" data-model="Banner"><i class="fa fa-trash"></i> 删除</a>
                                </td>
                            </tr><?php endforeach; endif; ?>
                    </form>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="table-responsive tab-pane hide" id="advs" style="margin-top: 50px;">

            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>产品类型</th>
                        <th class="text-center">图片</th>
                        <th>title</th>
                        <th>description</th>
                        <th>操作</th>

                    </tr>
                <thead>
                <tbody>
                <?php if(is_array($advs)): $i = 0; $__LIST__ = $advs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$adv): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($adv["id"]); ?></td>
                        <td><?php echo ($adv["name"]); ?></td>
                        <td><?php echo (getTypeName( $type,$adv["type"])); ?></td>
                        <td ><div style="max-width: 300px; margin: 0 auto;"><img src="<?php echo ($adv["thumb"]); ?>" class="img-responsive"></div></td>
                        <td><?php echo ($adv["title"]); ?></td>
                        <td><?php echo ($adv["description"]); ?> </td>
                        <td>
                            <a id="editAdv"   class="edit" title="编辑"  data-behavior="编辑" data-id="<?php echo ($adv["id"]); ?>" ><i class="fa fa-edit"></i> 编辑</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>

        
        <div class="tab-pane hide" id="catalogue" style="margin-top: 50px;">
        <form id="editForm" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">文件名：</label>
                <div class="col-sm-9 col-lg-6">
                    <input type="text" class="form-control" maxlength="255" autocomplete="off"  placeholder="请输入文件名" name ="name" id="name" value="<?php echo ($catalogue["name"]); ?>">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-3 col-lg-2 control-label">Catalogue：</label>
                <div class="col-sm-9 col-lg-6">
                    <input id="uploadFile_upload"  type="file" multiple="true" >
                    <div id="uploadFile_show" style="display: none;margin-bottom: 10px;" class="col-sm-6"></div>
                    
                    <input id="path" name="path" class="form-control" type="text" multiple="true" value="<?php echo ($catalogue["path"]); ?>" autocomplete="off" placeholder="如果文件过大上传失败，就请通过ftp上传后把文件路径粘贴到这里，然后保存">
                </div>
            </div>    
                
            <div class="form-group">
                <div class="col-xs-6">
                    <input type="button" class="form-control btn-success btn-submit" id="btnSubmit" value="保存">
                </div>               
            </div> 
        </form>
        </div>
    </section>
</div><!--col-sm-3 col-md-9 col-lg-10 end -->
<!--右边主要内容显示区结束-->
</div><!--row end 开始标签在sidebar -->
</div><!--container-fluid  end 开始标签在sidebar -->


<script src="/Public/js/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
<script src="/Public/uploadify/jquery.uploadify.min.js"></script>
<!--每个方法的对应的模板部分的自定义javascript放在这里-->
<script>
    var SCOPE = {
        add_banner_url: "<?php echo U('Home/addBanner');?>",
        edit_banner_url: "<?php echo U('Home/editBanner');?>",
        edit_adv_url: "<?php echo U('Home/editAdv');?>",
        set_status_url: "<?php echo U('Home/setStatus');?>",
        listorder_url: "<?php echo U('Home/listorder');?>",
        ajax_upload_file_url : "/Admin/Image/ajaxuploadCatalogue",//后台接口处理ajax上传的Catalogue
        ajax_upload_swf : '/Public/uploadify/uploadify.swf',
        save_catalogue_url:"<?php echo U('Home/saveCatalogue');?>"
    };

</script>
<script src="/Public/js/Admin/positioncontent.js"></script>
</body>
</html>