<?php /* Smarty version Smarty-3.1.12, created on 2013-04-27 18:55:13
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Download\add.html" */ ?>
<?php /*%%SmartyHeaderCode:32206517bae9165dfc1-81354247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17593a4214705ee3a62dbb10826dfd55c5111721' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Download\\add.html',
      1 => 1367060085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32206517bae9165dfc1-81354247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'columnTree' => 0,
    'userInfo' => 0,
    'timestamp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_517bae916e0012_45928473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517bae916e0012_45928473')) {function content_517bae916e0012_45928473($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Download/index">下载列表</a>
	<a href="__APP__/index.php?s=Download/add" class="opTopOn">上传新文件</a>
	<a href="__APP__/index.php?s=Download/recover">回收站</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>创建新文档</h5></div>
	<form name="newform" action="__APP__/index.php?s=Download/save" enctype="multipart/form-data" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>上传文件</span></a></div>
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
					<span>文档主栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>文档缩略图:</span>
					<input type="file" name="image" value="" class="input w150 inputfile" />
				</li>
				<li class="formblock">
					<span>文档来源:</span>
					<input type="text" name="source" value="" class="input w200" />
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
					<!-- <div id="fileBox">
						<div class="fileBoxName">
							<font color="#4E4E4E">文件名称: </font>
							<font color="#747474">LaughCMS_2013-04-10_UTF8.zip</font>
						</div>
						<div class="fileBoxSize">
							<font color="#4E4E4E">文件大小: </font>
							<font color="#747474">12.5M</font>
						</div>
						<div class="fileBoxNum">
							<font color="#4E4E4E">下载次数: </font>
							<font color="#747474">35 次</font>
						</div>
					</div> -->
				</li>
				<li class="formblock">
					<span>选择文件:</span>
					<input type="file" name="attachment" class="input w230 inputfile" />
				</li>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
    $("form[name=newform]").submit(function(){
    	var title = $(this).find("input[name=title]").val();
    	if (!title) {
    		alert("请填写文档标题!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择文档所在主栏目!");
    		return false;
    	}
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>