<?php /* Smarty version Smarty-3.1.12, created on 2014-01-15 13:46:13
         compiled from "F:\website\LaughCMS\themes\default\Common\ProductList.html" */ ?>
<?php /*%%SmartyHeaderCode:1860052d620a5f3a0d3-63115294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1dac156fe8d9490683399e8a58ae6ad7ac7536' => 
    array (
      0 => 'F:\\website\\LaughCMS\\themes\\default\\Common\\ProductList.html',
      1 => 1389753787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860052d620a5f3a0d3-63115294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ProductColumnID' => 0,
    'SubColumnList' => 0,
    'd' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d620a60abbd5_79912700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d620a60abbd5_79912700')) {function content_52d620a60abbd5_79912700($_smarty_tpl) {?><div id="ImgListBlock" class="boxBlock fleft w740">
	<div class="boxBlockTitle">
		<span class="title">产品展示</span>
		<span class="link"><a href="__APP__/index.php?s=Product/index&columnid=<?php echo $_smarty_tpl->tpl_vars['ProductColumnID']->value;?>
">更多>></a></span>
		<ul id="ImgboxTab" class="boxTab fleft">
			<?php if (is_array($_smarty_tpl->tpl_vars['SubColumnList']->value)&&!empty($_smarty_tpl->tpl_vars['SubColumnList']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SubColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			<li><a tabid="#boxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['AutoIndex'];?>
" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</a></li>
			<?php } ?>
			<?php }?>
		</ul>
	</div>
	<div class="boxBlockBody h350">
		<?php if (is_array($_smarty_tpl->tpl_vars['SubColumnList']->value)&&!empty($_smarty_tpl->tpl_vars['SubColumnList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SubColumnList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div id="boxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['AutoIndex'];?>
" class="boxTabContent">
			<ul class="ProductList h335">
				<?php if (isset($_smarty_tpl->tpl_vars['d']->value['ProductList'])&&is_array($_smarty_tpl->tpl_vars['d']->value['ProductList'])&&!empty($_smarty_tpl->tpl_vars['d']->value['ProductList'])){?>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['ProductList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
				<li>
					<a class="img" href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><img src="__APP__<?php echo $_smarty_tpl->tpl_vars['v']->value['thumbimage'];?>
" /></a>
					<a class="title" href="__APP__/index.php?s=Product/view&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
				</li>
				<?php } ?>
				<?php }?>
			</ul>
		</div>
		<?php } ?>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//图片切换tab
$("#ImgListBlock ul#ImgboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});
</script><?php }} ?>