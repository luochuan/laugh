<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 17:29:30
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\public\head.html" */ ?>
<?php /*%%SmartyHeaderCode:15275509b7b7adf7e46-68360279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9912a15a612011d01ab77e295d8da6fc3a209e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\public\\head.html',
      1 => 1352359907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15275509b7b7adf7e46-68360279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userInfo' => 0,
    'userAccess' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b7b7ae758c8_03608039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b7b7ae758c8_03608039')) {function content_509b7b7ae758c8_03608039($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- header -->
<div id="header">
    <!-- logo -->
    <div id="logo">
        <h1><a href="" title="管理中心">管理中心</a></h1>
    </div>
    <!-- end logo -->
    <!-- user -->
    <ul id="user">
        <li class="first">您好 , <em><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
</em> [ <a target="_top" href="__APP__/?s=index/logout">退出</a> ]</li>
        <li><a target="_blank" href="__APPM__/?s=index">网站首页</a></li>
        <li class="last"><a href="javascript:;">网站地图</a></li>
    </ul>
    <!-- end user -->
    <div id="header-inner">
        <div id="home">
            <a href="__APP__/?s=index" title="Home"></a>
        </div>
        <!-- quick -->
        <ul id="quick">
            <li>
                <a hidefocus="true" href="__APP__/?s=index/body&groupid=0" title="管理中心" target="body"><span class="normal">管理中心</span></a>
            </li>
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userAccess']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
            <li>
                <a href="__APP__/?s=public/body&groupid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" title="<?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
" target="body"><span><?php echo html_entity_decode($_smarty_tpl->tpl_vars['value']->value['title']);?>
</span></a>
                <!--
                <ul>
                    <li><a href="#">Manage Products</a></li>
                    <li><a href="#">Add Product</a></li>
                    <li>
                        <a href="#" class="childs">Sales</a>
                        <ul>
                            <li><a href="">Today</a></li>
                            <li class="last"><a href="">Yesterday</a></li>
                        </ul>
                    </li>
                    <li class="last">
                        <a href="#" class="childs">Offers</a>
                        <ul>
                            <li><a href="">Coupon Codes</a></li>
                            <li class="last"><a href="">Rebates</a></li>
                        </ul>
                    </li>
                </ul>
                -->
            </li>
            <?php } ?>
        </ul>
        <!-- end quick -->
        <div class="corner tl"></div>
        <div class="corner tr"></div>
    </div>
</div>
<!-- end header -->
<style>
body {
    overflow:hidden;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>