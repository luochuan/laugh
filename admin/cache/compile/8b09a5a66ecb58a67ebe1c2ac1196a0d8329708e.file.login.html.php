<?php /* Smarty version Smarty-3.1.12, created on 2012-12-07 16:50:56
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3155150c1adf0c47070-87128550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b09a5a66ecb58a67ebe1c2ac1196a0d8329708e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\login.html',
      1 => 1354847565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3155150c1adf0c47070-87128550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ecode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c1adf0cae6f2_54552174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c1adf0cae6f2_54552174')) {function content_50c1adf0cae6f2_54552174($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="themes/blue/style/login.css" media="screen">
<div id="loginTop"></div>
<div id="loginCenter">
    <div id="loginasdf">
        <div id="loginCaption">
            <img src="themes/blue/images/login_caption_logo.png" width="173" height="60" />
        </div>
        <div id="loginPanel">
            <div class="login logTop">
                <h3>网站后台管理系统</h3>
            </div>
            <div class="login logForm">
                <form name="logform" method="post" action="__APP__/?s=login/loginCheck">
                    <ul>
                        <li><span>用户名:</span><input type="text" name="username" value="" class="input" /></li>
                        <li><span>密&nbsp;&nbsp;&nbsp;码:</span><input type="password" name="password" value="" class="input" /></li>
                        <li><span>验证码:</span><input type="text" name="vcode" value="" class="input" style="width:80px;" />&nbsp;<img src="__APP__/?s=vcode" class="vcode" /></li>
                        <li><input type="submit" name="subut" class="button btnyellow2" value="登录" /></li>
                    </ul>
                </form>
            </div>
            <!-- <div id="logError"><?php echo $_smarty_tpl->tpl_vars['ecode']->value;?>
</div> -->
            <div class="loginWelcome"></div>
        </div>
    </div>
    <div></div>
</div>
<div id="loginBottom">Powered by xxx &copy; 2012-2015</div>
<script language="javascript">
$(document).ready(function(){
    $("form[name=logform]").submit(function() {
        var username = $(this).find("input[name=username]").val();
        var password = $(this).find("input[name=password]").val();
        var vcode = $(this).find("input[name=vcode]").val();
        
        if (!username || !password || !vcode) {
            alert('请填写完整登录信息!');
            return false;
        }
        
        return true;
    });
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>