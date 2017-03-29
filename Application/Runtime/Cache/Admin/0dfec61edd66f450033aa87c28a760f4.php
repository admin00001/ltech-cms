<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>后台登录|ltechlighting</title>      
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS -->

        <link rel ="stylesheet" href="/Public/css/login.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body >

        <div class="page-container">
            <h1>Login</h1>
            <form action="" method="post">
                <div>
                    <input type="text" name="username" class="username" placeholder="Username" autocomplete="off"/>
                </div>
                <div>
                    <input type="password" name="password" class="password" placeholder="Password"  />
                </div>
                <button id="submit" type="button">Sign in</button>
            </form>
            <div class="connect">
                <p>If we can only encounter each other rather than stay with each other,then I wish we had never encountered.</p>
                <p>如果只是遇见，不能停留，不如不遇见。</p>
                <a href="#">回到前台首页</a>
            </div>
        </div>
        <div class="alert" >
            <h2>信息</h2>
            <div class="alert_con">
                <p id="ts"></p>
                <p style="line-height:70px"><a class="btn">确定</a></p>
                <input type="hidden" id='posturl' value="<?php echo U('check');?>"/>
            </div>
        </div>

        <!-- Javascript -->
        <script src="/Public/js/jquery.min.js"></script>
        <script src="/Public/js/login/supersized.3.2.7.min.js"></script>
        <script src="/Public/js/login/supersized-init.js"></script>
        <script src="/Public/js/login/login.js"></script>
    </body>

</html>