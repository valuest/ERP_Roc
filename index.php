<?php
    //框架生产模式(线上)和开发模式(调试)
    define('APP_DEBUG',ture);//开发模式
    //define('APP_DEBUD',flase);//生产模式
    
    //静态资源文件访问目录设置常量
    //Home分组
    define('CSS_URL','/ERP_Roc/Public/css/');
    define('IMG_URL','/ERP_Roc/Public/images/');
    define('JS_URL','/ERP_Roc/Public/js/');
    //Admin分组
    define('ADMIN_CSS_URL','/ERP_Roc/Admin/Public/css/');
    define('ADMIN_IMG_URL','/ERP_Roc/Admin/Public/images/');
    define('ADMIN_JS_URL','/ERP_Roc/Admin/Public/js/');
    //调用TP接口文件
    include'../ThinkPHP/THinkPHP.php';