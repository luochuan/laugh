<?php /* Smarty version Smarty-3.1.12, created on 2013-01-11 17:55:38
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2521050efe19adb0145-02514381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53f00f5ee180756fa28d0a0cf6f2a76cd9b7e291' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Public\\menu_index.html',
      1 => 1357525394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2521050efe19adb0145-02514381',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50efe19addff86_91369300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50efe19addff86_91369300')) {function content_50efe19addff86_91369300($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Public/welcome" target="main">欢迎页</a></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Admin/profile" target="main">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist > ul.menusub").css("display","block");
	// $("li.menulist:eq(0) > ul.menusub > li:eq(1) > a").addClass('tabon');
});
</script><?php }} ?>