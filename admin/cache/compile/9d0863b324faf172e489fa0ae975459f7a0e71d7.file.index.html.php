<?php /* Smarty version Smarty-3.1.12, created on 2012-10-24 17:07:29
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:107415087afd129a848-94382269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0863b324faf172e489fa0ae975459f7a0e71d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\index.html',
      1 => 1349574506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107415087afd129a848-94382269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5087afd12e8fc4_89123366',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5087afd12e8fc4_89123366')) {function content_5087afd12e8fc4_89123366($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sitemap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<iframe frameborder="0" id="head" name="head" src="__APP__/?s=public/head" scrolling="no" style="position:absolute; width:100%; height:90px; visibility:inherit; z-index:1; overflow:auto;">
</iframe>
<iframe frameborder="0" id="body" name="body" src="__APP__/?s=public/body" scrolling="no" style="width:100%; height:100%; z-index:1; overflow:auto;">
</iframe>
<style>
body {
	padding: 0;
	margin: 0;
    overflow:hidden;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>