<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 13:59:44
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\FileManage\newdir.html" */ ?>
<?php /*%%SmartyHeaderCode:132375100cdd0eef6b0-07296384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca31fc9f165484619dad159569456fce1b1ec9e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\FileManage\\newdir.html',
      1 => 1358844567,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132375100cdd0eef6b0-07296384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5100cdd0f375c8_92827076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5100cdd0f375c8_92827076')) {function content_5100cdd0f375c8_92827076($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxFrom">
	<div class="boxTitle">
		<h5>新建目录</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/newDir&action=save" method="post" id="ajaxform">
	<input type="hidden" name="dir" value="<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
" class="input w200" />
	<ul>
		<li class="formblock">
			<span>当前目录：</span>
			<div class="caption"><?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
</div>
		</li>
		<li class="formblock">
			<span>目录名：</span>
			<input type="text" name="newdir" value="" class="input w200" />
		</li>
		<li class="bordernone">
			<input type="submit" name="subut" class="button btngreen2" value="保存" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>