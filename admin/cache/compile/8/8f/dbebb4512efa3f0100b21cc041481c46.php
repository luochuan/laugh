<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/green/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/green/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/green/js/div_window.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost:82/laugh';
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<ul class="controlTop">
		<li class="controlLeftTop"></li>
		<li class="controlRightTop"></li>
	</ul>
	<div id="controlContent">
<div class="opTop">
	<a href="/laugh/admin/index.php?s=Article/index">文章列表</a>
	<a href="/laugh/admin/index.php?s=Article/add">发布新文章</a>
	<a href="/laugh/admin/index.php?s=Article/recover">回收站</a>
</div>
<div class="captitle"><h5>文档列表 【目前共有0条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
		<li class="table_list_l table_list_l120" accessStatus=1>操作</li>
	</ul>
<div class="contentTableList">
        <ul class="table_list"><li class="table_list_center">空</li></ul>
    </div>
<div id="opBottom" class="opBottom">
	<a href="javascript:;" name="checkAll">全选</a>
	<a href="javascript:;" name="unCheckAll">取消</a>
	<a href="javascript:;" name="articleUpdate">更新</a>
	<a href="javascript:;" name="articleReview">审核</a>
	<a href="/laugh/admin/index.php?s=Article/moveArticle" name="articleMove">移动</a>
	<a href="javascript:;" name="articleDelete">删除</a>
</div>

<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function (){
var articleClass = function (){
	var articleObj = {
		checkAll: $("#opBottom a[name=checkAll]"),
		unCheckAll: $("#opBottom a[name=unCheckAll]"),
		articleUpdate: $("#opBottom a[name=articleUpdate]"),
		articleReview: $("#opBottom a[name=articleReview]"),
		articleMove: $("#opBottom a[name=articleMove]"),
		articleDelete: $("#opBottom a[name=articleDelete]")
	}
	var getArticleID = function (){
		var articleid= "";
		$("input[name='articleid[]']").each(function (){
			if ($(this).attr("checked")) articleid += articleid ? ","+$(this).val() : $(this).val();
		});
		return articleid;
	};
	articleObj.checkAll.click(function (){
		$("input[flag=articleID]").attr("checked","checked");
	});
	articleObj.unCheckAll.click(function (){
		$("input[flag=articleID]").attr("checked",false);
	});

	//移动栏目
	articleObj.articleMove.colorbox();
	articleObj.articleMove.click(function (){
		var articleid = getArticleID();
		$(this).attr("href",$(this).attr("href")+"&articleid="+articleid);
	});
	
	//删除文档
	articleObj.articleDelete.click(function (){
		var articleid = getArticleID();
		var d = {
			articleid: articleid
		};
		$.post("/laugh/admin/index.php?s=Article/recoverArticle",d,function (data){
			alert(data.info);
			if (!data.status) location.href = location.href;
		},'json');
	});
}
articleClass();
});
</script>
    </div>
    <ul class="controlBottom">
		<li class="controlLeftBottom"></li>
		<li class="controlRightBottom"></li>
	</ul>
</div>
</body>
<script type="text/javascript" src="themes/green/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/green/js/public.js"></script>
<script type="text/javascript" src="themes/green/js/common.js"></script>
<script type="text/javascript" src="themes/green/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>