<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 09:54:11
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\ColumnModel\addSinglePage.html" */ ?>
<?php /*%%SmartyHeaderCode:8447517b2fc3c80091-06431141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7a9463cc31d081e8226a5e7d6e794a48c392fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\ColumnModel\\addSinglePage.html',
      1 => 1366268658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8447517b2fc3c80091-06431141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'userInfo' => 0,
    'timestamp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517b2fc3d20e03_42190393',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517b2fc3d20e03_42190393')) {function content_517b2fc3d20e03_42190393($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>增加新页面</h5></div>
	<form name="newform" action="__APP__/index.php?s=CTModel/saveSinglePage" enctype="multipart/form-data" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>文档内容</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>文档标题:</span>
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>文档标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>文件名:</span>
					<input type="text" name="filename" value="/a/index1.html" class="input w200" />
					(相对于网站安装目录)
				</li>
				<li class="formblock">
					<span>模板文件名:</span>
					<input type="text" name="template" value="/SinglePage/singlepage.html" class="input w250" />
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150 inputfile" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['username'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>发布时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['timestamp']->value);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" checked="checked" />允许</label>
						<label><input type="radio" name="status" value="0" class="radio" />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>文档内容:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
    UE.getEditor('myEditor',{
    });
    $("form[name=newform]").submit(function(){
    	var title = $(this).find("input[name=title]").val();
    	if (!title) {
    		alert("请填写文档标题!");
    		return false;
    	}
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>