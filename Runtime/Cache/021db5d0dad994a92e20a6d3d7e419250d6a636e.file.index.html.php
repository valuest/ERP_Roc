<?php /* Smarty version Smarty-3.1.6, created on 2016-07-30 21:09:57
         compiled from "/Library/WebServer/Documents/ERP_Roc/Admin/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:2003190189579ca1d2c86f77-51748409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '021db5d0dad994a92e20a6d3d7e419250d6a636e' => 
    array (
      0 => '/Library/WebServer/Documents/ERP_Roc/Admin/View/Index/index.html',
      1 => 1469884194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2003190189579ca1d2c86f77-51748409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_579ca1d2cfb44',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579ca1d2cfb44')) {function content_579ca1d2cfb44($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Library/WebServer/Documents/ThinkPHP/Library/Vendor/Smarty/plugins/modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页</title>
<link rel="stylesheet" type="text/css" href="<?php echo @ADMIN_CSS_URL;?>
style.css" />
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery-1.6.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
index.js"></script>
</head>
<body>
    
<div class="nav-top">
	<span>药品进销存管理系统</span>
    <div class="nav-topright">
    	<p>当前时间:<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %H:%M:%S');?>
</p>
        <span>您好：管理员</span><span>注销</span>
    </div>
</div>
<div class="nav-down">
	<div class="leftmenu1">
        <div class="menu-oc"><img src="<?php echo @ADMIN_IMG_URL;?>
menu-all.png" /></div>
    	<ul>
        	<li>
            	<a class="a_list a_list1">全局设置</a>
                <div class="menu_list menu_list_first">
                	<a class="lista_first" href="#">基本设置</a>
                    <a href="#">其他设置</a>
                    <a href="#">界面风格</a>
                    <a href="#">系统工具</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list2">权限管理</a>
                <div class="menu_list">
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list3">新闻管理</a>
                <div class="menu_list">
                	<a href="#">新闻中心</a>
                    <a href="#">添加新闻</a>
                    <a href="#">修改新闻</a>
                    <a href="#">删除新闻</a>
                </div>
            </li>
            <li>
            	<a class="a_list a_list3">新闻管理</a>
                <div class="menu_list">
                	<a href="#">新闻中心</a>
                    <a href="#">添加新闻</a>
                    <a href="#">修改新闻</a>
                    <a href="#">删除新闻</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="leftmenu2">
    	<div class="menu-oc1"><img src="<?php echo @ADMIN_IMG_URL;?>
menu-all.png" /></div>
        <ul>
        	<li>
            	<a class="j_a_list j_a_list1"></a>
                <div class="j_menu_list j_menu_list_first">
                	<span class="sp1"><i></i>全局设置</span>
                	<a class="j_lista_first" href="#">基本设置</a>
                    <a href="#">其他设置</a>
                    <a href="#">界面风格</a>
                    <a href="#">系统工具</a>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list2"></a>
                <div class="j_menu_list">
                	<span class="sp2"><i></i>权限管理</span>
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
            <li>
            	<a class="j_a_list j_a_list3"></a>
                <div class="j_menu_list">
                	<span class="sp3"><i></i>权限管理</span>
                	<a href="#">基本权限</a>
                    <a href="#">分配权限</a>
                    <a href="#">权限管理</a>
                    <a href="#">成员管理</a>
                </div>
            </li>
        </ul>
        
    </div>
    <div class="rightcon">
    	<div class="right_con">
        	<p style="text-align:left; margin-top:50px">右侧内容自适应哦！我是左对齐</p>
            <p style="text-align:center">右侧内容自适应哦！我是居中</p>
            <p style="text-align:right">右侧内容自适应哦！我是右对齐</p>
            <h1>我是标题1。。。</h1>
            <h2>我是标题2。。。</h2>
            <h3>我是标题3。。。</h3>
            <h4>我是标题4。。。</h4>
            <h5>我是标题5。。。</h5>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">
	
</script><?php }} ?>