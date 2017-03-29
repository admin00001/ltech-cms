<?php
return array(
    //URL地址不区分大小写
    'URL_CASE_INSENSITIVE' =>true,
    'URL_MODEL'=>2, //重写模式
    'LOAD_EXT_CONFIG' => 'db',//额外配置：db.php
    'MD5_PRE' =>'ltechcms',
    'HTML_FILE_SUFFIX' => '.html',
    'MODULE_ALLOW_LIST' => array('Home','Admin'),
    'DEFAULT_MODULE'  => 'Home',
    'SESSION_OPTIONS' => array(
        'expire' => 7200
    ),
    'ERROR_MESSAGE'   =>  'page error ～',//错误显示信息,非调试模式有效
    'ERROR_PAGE' => '/Home/Index/error.html'//404错误模板
);