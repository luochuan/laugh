<?php /* Smarty version Smarty-3.1.12, created on 2013-05-30 13:56:23
         compiled from "F:\website\laugh\themes\sindgood\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2462851a6ea07c1f0f6-78524469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfa92800826d79248626d4553b23f7cf3fcde14' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\sindgood\\index.html',
      1 => 1369892546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2462851a6ea07c1f0f6-78524469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'AboutUs' => 0,
    'Config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a6ea07cffcb8_68059000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a6ea07cffcb8_68059000')) {function content_51a6ea07cffcb8_68059000($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- <?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 -->
<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div id="ImageFlash" class="block">
		<?php echo $_smarty_tpl->getSubTemplate ("Common/ImageFlash1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- <div id="SImageCaption">
			<h1>Laugh CMS 正式版</h1>
			<h2 class="mtop5"></h2>
			<h3 class="mtop10">系统版本: Laugh CMS 正式版</h3>
			<h4>软件语言: 简体中文UTF-8</h4>
		</div> -->
		<div class="clear"></div>
	</div>
	<div id="CenterShow" class="block">
		<div class="boxBlock fleft w350 boxBlock350BG">
			<div class="boxBlockTitle boxBlockTitle350BG">
				<span class="title">新闻动态</span>
				<span class="link"><a href="__APP__/index.php?s=Article/index&columnid=2"></a></span>
			</div>
			<div class="boxBlockBody h170 boxBlockBody350BG">
				<ul class="articleList">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('cmstag_archive', array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc')); $_block_repeat=true; echo CMSTagArchive(array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><a href="__APP__/index.php?s=Article/view&columnid=[field.columnid]&archiveid=[field.id]" title="[field.title]">[field.title]</a></li>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo CMSTagArchive(array('columnid'=>2,'orderby'=>'createtime','orderway'=>'desc'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<div class="boxBlock fleft w640 mleft10 boxBlock640BG">
			<div class="boxBlockTitle boxBlockTitle640BG">
				<span class="title"><?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['columnname'];?>
</span>
			</div>
			<div class="boxBlockBody h170 boxBlockBody640BG">
				<div class="boxBlockImg fleft">
					<img src="themes/sindgood/images/aboutus_img.jpg" width="130" height="150" />
				</div>
				<div class="boxBlockText fleft w450">
					<?php echo htmlSubString(html_entity_decode($_smarty_tpl->tpl_vars['AboutUs']->value['content']),210);?>

					<a href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['action'];?>
&columnid=<?php echo $_smarty_tpl->tpl_vars['AboutUs']->value['id'];?>
" class="viewbtn">阅读全文</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="adBanner block">
		<?php echo CMSTagAdvertise(array('flag'=>1,'html'=>'<a href="[field.link]" target="_blank"><img src="[field.path]" width="1000" height="80" /></a>'),$_smarty_tpl);?>

	</div>
	<div id="BottomShow" class="block">
		<?php echo $_smarty_tpl->getSubTemplate ("Common/ProductList.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="boxBlock fleft w250 mleft10 boxBlock250BG">
			<div class="boxBlockTitle boxBlockTitle250BG">
				<span class="title">联系我们</span>
			</div>
			<div class="boxBlockBody boxBlockBody250BG">
				<div class="contactUS">
					<?php echo html_entity_decode($_smarty_tpl->tpl_vars['Config']->value['AboutUs']);?>

				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>