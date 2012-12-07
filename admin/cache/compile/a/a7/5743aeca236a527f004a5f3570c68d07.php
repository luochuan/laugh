<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="themes/blue/js/jquery.js"></script>
<!-- <script type="text/javascript" src="themes/blue/js/PIE.js"></script> -->
<title>管理中心</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
</script>
</head>

<body>
<link rel="stylesheet" type="text/css" href="themes/blue/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/blue/style/header.css" />
<div id="header">
	<!-- header -->
<div class="logo">
    <h1>管理中心</h1>
</div>
<div class="headerNav">
    <div class="uinfo">
        您好 , admin [ <a href="/laugh/admin/?s=index/logout">退出</a> ] | <a href="javascript:;">系统设置</a> | <a href="javascript:;">参数设置</a>
    </div>
    <div class="nav">
        <ul class="hmenu">
            <li class="navon"><a hidefocus="true" href="javascript:;" groupid="0" title="管理中心" class="navHeadMenu">管理中心</a></li>
                        <li><a href="javascript:;" groupid="1" title="系统管理" class="navHeadMenu">系统管理</a></li>
                        <li><a href="javascript:;" groupid="2" title="用户中心" class="navHeadMenu">用户中心</a></li>
                        <li><a href="javascript:;" groupid="3" title="核心内容" class="navHeadMenu">核心内容</a></li>
                        <li><a href="javascript:;" groupid="4" title="网站更新" class="navHeadMenu">网站更新</a></li>
                        <li><a href="javascript:;" groupid="5" title="系统插件" class="navHeadMenu">系统插件</a></li>
                        <li><a href="javascript:;" groupid="6" title="系统设置" class="navHeadMenu">系统设置</a></li>
                    </ul>
    </div>
</div>
</div>
<div id="menuTree">
	<!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a target="main" hidefocus="true" href="javascript:;" class="">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist:eq(0) > ul.menusub").css("display","block");
});
</script>
</div>
<div id="main">
	<iframe frameborder="0" name="main" src="/laugh/admin/?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
	Copyright &copy; xxx. 2012-2015
</div>
</body>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/div_window.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
</html>