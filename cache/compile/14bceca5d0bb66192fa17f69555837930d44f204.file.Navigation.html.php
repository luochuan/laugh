<?php /* Smarty version Smarty-3.1.12, created on 2013-05-19 14:59:43
         compiled from "F:\website\laugh\themes\default\Common\Navigation.html" */ ?>
<?php /*%%SmartyHeaderCode:206215198785fb92586-29466194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14bceca5d0bb66192fa17f69555837930d44f204' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Common\\Navigation.html',
      1 => 1366899155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206215198785fb92586-29466194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ColumnList' => 0,
    'd' => 0,
    'Column' => 0,
    'd1' => 0,
    'd2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5198785fd44e14_32489900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5198785fd44e14_32489900')) {function content_5198785fd44e14_32489900($_smarty_tpl) {?><link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
	<li>
		<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="<?php if (($_smarty_tpl->tpl_vars['d']->value['id']==$_smarty_tpl->tpl_vars['Column']->value['topid'])||(!$_smarty_tpl->tpl_vars['Column']->value['topid']&&$_smarty_tpl->tpl_vars['d']->value['id']==1)){?>navon<?php }?>"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</a>
		<?php if (isset($_smarty_tpl->tpl_vars['d']->value['SubColumnList'])&&!empty($_smarty_tpl->tpl_vars['d']->value['SubColumnList'])){?>
		<ul class="SubNavigation">
			<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['SubColumnList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
			<li>
				<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d1']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d1']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d1']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d1']->value['columnname'];?>
</a>
				<?php if (isset($_smarty_tpl->tpl_vars['d1']->value['SubColumnList'])&&!empty($_smarty_tpl->tpl_vars['d1']->value['SubColumnList'])){?>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['d2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d1']->value['SubColumnList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d2']->key => $_smarty_tpl->tpl_vars['d2']->value){
$_smarty_tpl->tpl_vars['d2']->_loop = true;
?>
					<li><a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['d2']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['d2']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['d2']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['d2']->value['columnname'];?>
</a></li>
					<?php } ?>
				</ul>
				<?php }?>
			</li>
			<?php } ?>
		</ul>
		<?php }?>
	</li>
	<?php } ?>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script><?php }} ?>