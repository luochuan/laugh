<?php /* Smarty version Smarty-3.1.12, created on 2013-01-30 23:34:18
         compiled from "G:\website\laugh\admin\themes\green\FileManage\newdir.html" */ ?>
<?php /*%%SmartyHeaderCode:2125151093d7a05a480-51429932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a81bebbbe658afcb84aaad82ae3b08d2892c3034' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\FileManage\\newdir.html',
      1 => 1359547532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2125151093d7a05a480-51429932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51093d7a0c6644_72553321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51093d7a0c6644_72553321')) {function content_51093d7a0c6644_72553321($_smarty_tpl) {?><div class="box">
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