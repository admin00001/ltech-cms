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
            <li class="active"><i class='fa fa-home'></i> 首页</li>
        </ol>       


        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>栏目</th>
                        <th>类别</th>
                        <th>缩略图</th>
                        <th>最大次数</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>最多浏览数的产品</td>
                        <td><?php echo ($maxcountproduct["name"]); ?></td>
                        <td><a href=" <?php echo U('Products/edit',array('id' => $maxcountproduct[products_id] ));?>"><img src="<?php echo ($maxcountproduct["thumb"]); ?>" class="img-responsive center-bloack" alt="<?php echo ($maxcountproduct["name"]); ?>"></a></td>
                        <td><?php echo ($maxcountproduct["count"]); ?></td>
                    </tr> 
                    
                    <tr>
                        <td>最多下载数的文件</td>
                        <td><?php echo ($maxcountfile["name"]); ?></td>
                        <td><a href=" <?php echo U('Download/edit',array('id' => $maxcountfile[id] ));?>" ><?php echo (getFileType($maxcountfile["path"])); ?></a></td>
                        <td><?php echo ($maxcountfile["count"]); ?></td>
                    </tr>
                    
                    <tr>
                        <td>最多阅读数的News</td>
                        <td><?php echo ($maxcountNewsRead["title"]); ?></td>
                        <td><a href=" <?php echo U('News/edit',array('id' => $maxcountNewsRead[news_id] ));?>" ><img src="<?php echo ($maxcountNewsRead["thumb"]); ?>" class="img-responsive center-bloack" alt="<?php echo ($maxcountNewsRead["title"]); ?>"></a></td>
                        <td><?php echo ($maxcountNewsRead["count"]); ?></td>
                    </tr>
                    
                    <tr>
                        <td>最多阅读数的Projects</td>
                        <td><?php echo ($maxcountProjectsRead["name"]); ?></td>
                        <td><a href=" <?php echo U('Projects/edit',array('id' => $maxcountProjectsRead[projects_id] ));?>" ><img src="<?php echo ($maxcountProjectsRead["thumb"]); ?>" class="img-responsive center-bloack" alt="<?php echo ($maxcountProjectsRead["name"]); ?>"></a></td>
                        <td><?php echo ($maxcountProjectsRead["count"]); ?></td>
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
<!--每个方法的对应的模板部分的自定义javascript放在这里-->
</body>
</html>