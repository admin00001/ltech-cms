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

            <li class="active"><i class='fa fa-product-hunt'></i>  产品类型管理</li>          
        </ol> 

        <form role="form" id="formSearch" action="<?php echo U('Products/index');?>"  method="get">
            <div class="input-group col-sm-5 col-md-3 col-lg-2">
                <select class="form-control" name="type">

                    <option  value=""> 全部产品 </option>
                    <?php if(is_array($productsType)): $i = 0; $__LIST__ = $productsType;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($type == $vo['id']): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                   

                </select>
                
                <span class="input-group-btn">
                    <button class="btn btn-default " type="submit" ><i class="fa fa-search"></i></button>
                </span>
            </div> 
            <input type="hidden" name ="listorder" value="">
        </form>
        
        
        <button class="btn btn-default  add" id="btnAdd"><i class="fa fa-plus"></i>添加产品</button>
           

        <div class="table-responsive">
            <table class="table table-hover table-bordered table-striped">
                <?php if($res == 1): ?><p style="color:#FF0543;margin-top: 10px;">没有找到相关结果！</p><?php endif; ?>
                <thead <?php if($res == 1): ?>style="display:none;"<?php endif; ?>>
                    <tr>
                        <th>首页NEW推荐</th>
                        <th id="listorderId" <?php if($listorder == 'asc'): ?>listorder="desc" <?php else: ?> listorder="asc"<?php endif; ?> >产品ID</th>
                        <th>产品名称</th>
                        <th>产品类型</th>
                        <th>产品状态</th>
                        <th>缩略图</th>
                        <th>添加时间</th>          
                        <th>最近修改时间 / 修改者</th>
                        <th>浏览数</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php if(is_array($products)): foreach($products as $key=>$product): ?><tr>
                        <td id="new"> 
                            <input type="radio" name="new"  <?php if($product["products_id"] == $new['products_id']): ?>checked<?php endif; ?>>
                            <input type="button" class="btn btn-primary btn-sm <?php if($product["products_id"] != $new['products_id'] ): ?>hide<?php endif; ?> " pull-value="<?php echo ($product["products_id"]); ?>" value="推送" id="pull" style="margin-left: 10px;" >
                        </td>
                        <td> <?php echo ($product["products_id"]); ?></td>
                        <td> <?php echo ($product["name"]); ?>   </td>
                        <td> <?php echo (getTypeName( $productsType,$product["type"])); ?> </td>
                        <td><span id="updateStatus" data-id = "<?php echo ($product["products_id"]); ?>" data-behavior = "更改状态"  <?php if($product["status"] == 1): ?>data-status="0" <?php else: ?> data-status="1"<?php endif; ?>><?php echo (status($product["status"])); ?></span></td>
                        <td> <?php echo (hasImg($product["thumb"])); ?></td>
                        <td> <?php echo (date( "Y-m-d H:i",$product["create_time"])); ?> </td>
                        <td> <?php echo (date( "Y-m-d H:i",$product["update_time"])); ?> / <span style="color:#FF0543;"><?php echo ($product["username"]); ?></span></td>
                        <td> <?php echo ($product["count"]); ?></td>
                        <td>
                            <a href="<?php echo U('Home/Products/view',array('id' => $product[products_id]));?>" target="_blank" ><i class="fa fa-eye"></i> 预览</a>
                            <a id="edit"   class="edit" title="编辑"  data-behavior="编辑" data-id="<?php echo ($product["products_id"]); ?>" ><i class="fa fa-edit"></i> 编辑</a>
                            <a id="delete" class="delete" title="删除" data-behavior="删除" data-id="<?php echo ($product["products_id"]); ?>" data-status = "-1"><i class="fa fa-trash"></i> 删除</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
            
        </div>
        <nav class="page-container">
            <?php echo ($pager); ?>
        </nav>
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
        'edit_url': "<?php echo U('Products/edit');?>",
        'add_url': "<?php echo U('Products/add');?>",
        'set_status_url': "<?php echo U('Products/setStatus');?>",
        'pull_url': "<?php echo U('Products/pull');?>"
    };
    $(function(){
        $(".table #new").click(function(){
            if($(this).children('input:radio').is(":checked")){
                $('input:button[id^="pull"]').addClass('hide');
                $(this).children('input:button').removeClass('hide');
            }       
        });  
        //推送按钮 数据保存到缓存
        $(".table #pull").click(function(){
            var self = $(this);
            var productsId = self.attr('pull-value');
            var url =SCOPE.pull_url;
            $.post(url,{productsId:productsId},function(result){
                if(result.status === 1){
                    
                    return dialog.successTip(result.message);
                }
                if(result.status === 0){
                    return dialog.error(result.message);
                }
            },'json');
        });
        
        
    });
</script>
<script src="/Public/js/layer/layer.js"></script>
<script src="/Public/js/layer/dialog.js"></script>
<script src="/Public/js/Admin/common.js"></script>
</body>
</html>