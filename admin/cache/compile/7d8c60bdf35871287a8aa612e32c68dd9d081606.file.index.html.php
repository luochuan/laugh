<?php /* Smarty version Smarty-3.1.12, created on 2012-12-09 15:29:29
         compiled from "G:\website\laugh\admin\themes\blue\index.html" */ ?>
<?php /*%%SmartyHeaderCode:615250c43dd9852c25-90732414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8c60bdf35871287a8aa612e32c68dd9d081606' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\blue\\index.html',
      1 => 1354977701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '615250c43dd9852c25-90732414',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c43dd98affc3_43521548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c43dd98affc3_43521548')) {function content_50c43dd98affc3_43521548($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/blue/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/blue/style/header.css" />
<div id="header">
	<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="menuTree">
	<?php echo $_smarty_tpl->getSubTemplate ("public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
	<iframe frameborder="0" name="main" src="__APP__/index.php?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
	<?php echo $_smarty_tpl->getSubTemplate ("public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>