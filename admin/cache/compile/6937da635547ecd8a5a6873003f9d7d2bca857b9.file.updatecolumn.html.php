<?php /* Smarty version Smarty-3.1.12, created on 2013-01-16 16:43:38
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Column\updatecolumn.html" */ ?>
<?php /*%%SmartyHeaderCode:2251450f6683aa62418-73276422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6937da635547ecd8a5a6873003f9d7d2bca857b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Column\\updatecolumn.html',
      1 => 1358325796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251450f6683aa62418-73276422',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'ColumnInfo' => 0,
    'columnTree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f6683ab807b2_58480770',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f6683ab807b2_58480770')) {function content_50f6683ab807b2_58480770($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>更新栏目信息</h5></div>
	<form name="newcolumnform" action="__APP__/index.php?s=Column/saveUpdateColumn" enctype="multipart/form-data" method="post" class="newform">
		<input type="hidden" name="columnid" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['id'];?>
" />
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
					<select id="select" name="parentid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>栏目名称:</span>
					<input type="text" name="columnname" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['columnname'];?>
" class="input w200" />
				</li>
				<li class="formblock">
					<span>排列顺序:</span>
					<input type="text" name="sortrank" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['sortrank'];?>
" class="input w100" />
				</li>
				<li class="formautoblock">
					<span>栏目属性:</span>
					<div class="item_listh fleft">
						<label style="float:none;"><input type="radio" name="columntype" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['ColumnInfo']->value['columntype']==1){?>checked="checked"<?php }?> />最终列表栏目（允许在本栏目发布文档，并生成文档列表） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="2" class="radio" <?php if ($_smarty_tpl->tpl_vars['ColumnInfo']->value['columntype']==2){?>checked="checked"<?php }?> />频道封面（栏目本身不允许发布文档） </label>
						<label style="float:none;"><input type="radio" name="columntype" value="3" class="radio" <?php if ($_smarty_tpl->tpl_vars['ColumnInfo']->value['columntype']==3){?>checked="checked"<?php }?> />外部连接（在"文件保存目录"处填写网址） </label>
					</div>
				</li>
				<li class="formblock">
					<span>是否隐藏: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="isshow" value="1" class="radio" <?php if ($_smarty_tpl->tpl_vars['ColumnInfo']->value['isshow']==1){?>checked="checked"<?php }?> />显示</label>
						<label><input type="radio" name="isshow" value="0" class="radio" <?php if ($_smarty_tpl->tpl_vars['ColumnInfo']->value['isshow']==0){?>checked="checked"<?php }?> />隐藏</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['title'];?>
" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['keyword'];?>
" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>栏目描述:</span>
					<textarea name="description" value="<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['description'];?>
" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>栏目内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['content'];?>
</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btnyellow2" value="修改" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor',{
    	initialFrameWidth: 900,
    	initialFrameHeight: 320
    });
    $("form[name=newcolumnform]").submit(function(){
    	var columnname = $(this).find("input[name=columnname]").val();
    	if (!columnname) {
    		alert("请填写栏目名称!");
    		return false;
    	}
    	var sortrank = $(this).find("input[name=sortrank]").val();
    	if (!sortrank) {
    		alert("请填写栏目排序位置!");
    		return false;
    	}
    });
    $("select[name=parentid]").find("option").each(function (){
    	if ($(this).val()==<?php echo $_smarty_tpl->tpl_vars['ColumnInfo']->value['parentid'];?>
) $(this).attr("selected",true);
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>