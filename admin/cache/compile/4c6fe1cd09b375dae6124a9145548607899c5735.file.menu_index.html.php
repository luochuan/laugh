<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 23:40:56
         compiled from "G:\website\laugh\admin\themes\blue\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:3269750c0bc888c2d07-30372927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c6fe1cd09b375dae6124a9145548607899c5735' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\public\\menu_index.html',
      1 => 1354793056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3269750c0bc888c2d07-30372927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c0bc888c7655_23148730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c0bc888c7655_23148730')) {function content_50c0bc888c7655_23148730($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist:eq(0) > ul.menusub").css("display","block");
});
</script><?php }} ?>