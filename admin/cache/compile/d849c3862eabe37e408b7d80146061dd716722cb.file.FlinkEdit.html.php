<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 13:27:28
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Plugin\FlinkEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:32466518890c0483e82-92205691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd849c3862eabe37e408b7d80146061dd716722cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Plugin\\FlinkEdit.html',
      1 => 1367142637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32466518890c0483e82-92205691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LinkInfo' => 0,
    'catalogList' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518890c050d916_31571588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518890c050d916_31571588')) {function content_518890c050d916_31571588($_smarty_tpl) {?><div class="box">
<div class="boxContent">
<div class="boxPopupForm">
	<div class="boxTitle">
		<h5>编辑链接信息</h5>
	</div>
	<form name="boxform" action="__APP__/index.php?s=Plugin/FlinkEditSave" method="post" id="colorBoxAjaxForm">
	<input type="hidden" name="linkid" value="<?php echo $_smarty_tpl->tpl_vars['LinkInfo']->value['id'];?>
" />
	<ul>
		<li class="formblock">
			<span>分类名称：</span>
			<select name="catalogid" style="width:150px;">
				<option value="">|-分类列表</option>
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catalogList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['c']->value['catalogname']==$_smarty_tpl->tpl_vars['LinkInfo']->value['catalogname']){?>selected<?php }?>>&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['c']->value['catalogname'];?>
</option>
				<?php } ?>
			</select>
		</li>
		<li class="formblock">
			<span>链接名称：</span>
			<input type="text" name="linkname" value="<?php echo $_smarty_tpl->tpl_vars['LinkInfo']->value['linkname'];?>
" class="input w150" />
		</li>
		<li class="formblock">
			<span>链接地址：</span>
			<input type="text" name="linkurl" value="<?php echo $_smarty_tpl->tpl_vars['LinkInfo']->value['linkurl'];?>
" class="input w250" />
		</li>
		<li class="bordernone bgf6">
			<input type="submit" name="subut" class="button btnblue2" value="修改" />
		</li>
	</ul>
	</form>
</div>
</div>
</div><?php }} ?>