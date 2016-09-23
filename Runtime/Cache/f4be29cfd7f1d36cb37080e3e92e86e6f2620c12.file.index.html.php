<?php /* Smarty version Smarty-3.1.6, created on 2016-07-29 23:04:59
         compiled from "/Library/WebServer/Documents/ERP_Roc/Home/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:316863744579b66aad7fa32-58231430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4be29cfd7f1d36cb37080e3e92e86e6f2620c12' => 
    array (
      0 => '/Library/WebServer/Documents/ERP_Roc/Home/View/Index/index.html',
      1 => 1469804697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316863744579b66aad7fa32-58231430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_579b66aade697',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b66aade697')) {function content_579b66aade697($_smarty_tpl) {?> <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>药品ERP管理系统</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?php echo @IMG_URL;?>
login.js"></script>
    <link href="<?php echo @CSS_URL;?>
login.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <h1>药品进销存管理系统<sup>by Roc</sup></h1>
<div class="login" style="margin-top:50px;">
    
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">管理员登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">员工登陆</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
  
    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">    

            <!--管理员登录-->
            <div class="web_login" id="web_login">
               
               
               <div class="login-box">
    
            
			<div class="login_form">
				<form action="http://www.js-css.cn" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="u" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="p" name="p" class="inputstyle"/>
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--管理员登录end-->
  </div> 
  <!--员工登录-->
   <div class="qlogin" id="qlogin" style="display:none; height: 205px;">
   
    <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="http://www.js-css.cn" method="post">
	      <input type="hidden" name="to" value="log"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div class="login_form">
				<form action="http://www.js-css.cn" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    
                    <input type="text" id="u" name="username" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    
                    <input type="password" id="p" name="p" class="inputstyle"/>
                </div>
                </div>
               
                <div style="padding-left:50px;margin-top:20px;"><input type="submit" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
        
    </div>
    </div>
  <!--员工登陆end-->
</div>
<div class="jianyi">*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问本站</div>
</body></html><?php }} ?>