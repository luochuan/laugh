<?php /* Smarty version Smarty-3.1.12, created on 2012-12-20 17:22:58
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Column\newcolumn.html" */ ?>
<?php /*%%SmartyHeaderCode:1466850d2d8f22d4b20-95063939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f541bf277805cbdbd8254257202d2c3aae043bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Column\\newcolumn.html',
      1 => 1355994659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1466850d2d8f22d4b20-95063939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'columnTree' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50d2d8f2351be3_56176321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50d2d8f2351be3_56176321')) {function content_50d2d8f2351be3_56176321($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>添加新栏目</h5></div>
	<form name="newform" action="__APP__/index.php?s=Column/saveColumn" method="post" id="addajaxform" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>栏目内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>上级栏目: </span>
					<select id="select" name="parentid" style="width:150px;">
						<option value="">|-栏目列表</option>
						<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['columnTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">&nbsp;|-<?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</option>
						<?php } ?>
					</select>
				</li>
				<li class="formblock">
					<span>栏目名称:</span>
					<input type="text" name="columnname" value="" class="input w150" />
				</li>
				<li class="formblock">
					<span>排列顺序:</span>
					<input type="text" name="sortrank" value="" class="input w100" />
				</li>
				<li class="formautoblock">
					<span>栏目属性:</span>
					<div class="item_listh fleft">
						<label style="float:none;"><input type="radio" name="isshow" value="1" class="radio" checked="checked" />最终列表栏目（允许在本栏目发布文档，并生成文档列表） </label>
						<label style="float:none;"><input type="radio" name="isshow" value="0" class="radio" />频道封面（栏目本身不允许发布文档） </label>
						<label style="float:none;"><input type="radio" name="isshow" value="0" class="radio" />外部连接（在"文件保存目录"处填写网址） </label>
					</div>
				</li>
				<li class="formblock">
					<span>是否隐藏: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="isshow" value="1" class="radio" checked="checked" />显示</label>
						<label><input type="radio" name="isshow" value="0" class="radio" />隐藏</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>栏目描述:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>栏目内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="themes/blue/UEditor/editor_config.js" type="text/javascript"></script>
<script src="themes/blue/UEditor/editor_all_min.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor');
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>