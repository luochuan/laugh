<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 23:18:37
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/public/menu.html" */ ?>
<?php /*%%SmartyHeaderCode:169587593509bcd4d4c7f51-10700829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73dfa0debbf93ce2f64e8dd19117dfdcfac6128c' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/public/menu.html',
      1 => 1352385751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169587593509bcd4d4c7f51-10700829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'k' => 0,
    'm' => 0,
    'm1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bcd4d56c2e9_71317647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcd4d56c2e9_71317647')) {function content_509bcd4d56c2e9_71317647($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" style="background: url('themes/smooth/images/content.png') repeat-y top left;">
	<div class="blankhd"></div>
	<!-- end content / left -->
	<div id="left">
		<div id="menu">
        	<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['m']->key;
?>
			<h6 id="h-menu-menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><a href="javascript:#menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><span><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</span></a></h6>
			<?php if (array_key_exists('cnode',$_smarty_tpl->tpl_vars['m']->value)){?>
			<ul id="menu-menu<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="closed">
				<?php  $_smarty_tpl->tpl_vars['m1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m1']->key => $_smarty_tpl->tpl_vars['m1']->value){
$_smarty_tpl->tpl_vars['m1']->_loop = true;
?>
				<li><a target="main" hidefocus="true" href="__APP__/?s=<?php echo $_smarty_tpl->tpl_vars['m1']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['m1']->value['action'];?>
" class=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['m1']->value['title']);?>
</a></li>
				<?php } ?>
				<!--
				<li class="collapsible last">
					<a href="#" class="plus">Offers</a>
					<ul class="collapsed">
						<li><a href="">Coupon Codes</a></li>
						<li class="last"><a href="">Rebates</a></li>
					</ul>
				</li>
				-->
			</ul>
			<?php }?>
        	<?php } ?>
		</div>
	</div>
	<!-- end content / left -->
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>