<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="昆山,信德佳,昆山信德佳,电气,设备,电力,电网,监控">
<meta name="description" content="昆山信德佳电气科技有限公司" />
<link type="text/css" rel="stylesheet" href="themes/sindgood/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/sindgood/style/frame.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/sindgood/style/global.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/sindgood/style/style.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="themes/sindgood/js/common.js"></script>
<script type="text/javascript" src="themes/sindgood/js/frame.js"></script>
<title>昆山信德佳电气科技有限公司</title>
<script type="text/javascript">
var JS_APP = '/laugh';
</script>
</head>

<body>
<div id="Top">
	
</div>
<div id="Header">
	<div id="HeaderMain">
		<div id="HeaderStatus">
			<div class="Logo">
				<a href="/laugh"><img src="/laugh/themes/sindgood/images/logo.png" /></a>
			</div>
			<div class="Center">
				昆山信德佳电气科技有限公司
			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<!-- <div class="Search">
					<form method="POST" action="/laugh/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='搜索...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="搜索..." size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div> -->
				<div class="STelephone">
					<span class="title">服务热线：</span>
					<span class="content">0512-36607986</span>
				</div>
			</div>
		</div>
		<link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/sindgood/style/navigation.css" media="screen">
<div class="NavigationBlock">
<ul class="headerNavigation wrap">
		<li>
		<a href="/laugh/index.php?s=Index/index&columnid=1" class="">网站首页</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Article/index&columnid=2" class="">新闻资讯</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=3">IT知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index&columnid=12">PHP知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=4">网络知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/index&columnid=5">前端知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/index&columnid=13">数据库知识</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Product/index&columnid=6" class="navon">产品展示</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Product/index&columnid=14">网络产品</a>
							</li>
						<li>
				<a href="/laugh/index.php?s=Product/index&columnid=15">电子产品</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Image/index&columnid=7" class="">客户案例</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Download/index&columnid=8" class="">下载中心</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Plugin/Cooperate&columnid=9" class="">招贤纳士</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/AboutUS&columnid=10" class="">关于我们</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/ContactUS&columnid=11" class="">联系我们</a>
			</li>
	</ul>
</div>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script>
	</div>
</div>
<style type="text/css">
.STelephone {
	margin-top: 15px;
	margin-left: 12px;
}
.STelephone .title {
	color: #316AB0;
    font-family: "Arial";
    font-size: 14px;
    font-weight: bold;
}
.STelephone .content {
	color: #FF0000;
    font-family: "Georgia";
    font-size: 20px;
    font-weight: bold;
}
</style>
<script type="text/javascript">
//加入收藏 <a onclick="AddFavorite(window.location,document.title)">加入收藏</a>
function AddFavorite(sURL, sTitle)
{
    try {
        window.external.addFavorite(sURL, sTitle);
    } catch(e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

//设为首页 <a onclick="SetHome(this,window.location)">设为首页</a>
function SetHome(obj,vrl){
    try {
        obj.style.behavior = 'url(#sindgood#homepage)';
        obj.setHomePage(vrl);
    } catch(e) {
        if(window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");

	            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
	            prefs.setCharPref('browser.startup.homepage',vrl);
            } catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
            }
        }
    }
}
$(document).ready(function (){
	$("#setHome").click(function (){
		SetHome(this,window.location.href);
	});
	$("#addFavorite").click(function (){
		AddFavorite(window.location.href,$("title").text());
	});
});
</script>
<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <a href="/laugh">首页</a> > <a href="/laugh/index.php?s=Product/index&columnid=6">产品展示</a>
	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title">产品展示</span>
				</div>
				<div class="boxBlockBody">
					<ul class="ProductList">
																		<li>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=9">
								<img src="/laugh/Uploads/Image/201304/02/1364884203_zxvkaj_4664.png" />
							</a>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=9" class="title">Web服务攻击反侦查痕迹检测</a>
						</li>
												<li>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=12">
								<img src="/laugh/Uploads/Image/201304/02/1364884946_37uz4d_4967.png" />
							</a>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=12" class="title">Vim文本编辑器 v7.3 正式版</a>
						</li>
												<li>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=11">
								<img src="/laugh/Uploads/Image/201304/02/1364884636_tpajd4_786.png" />
							</a>
							<a href="/laugh/index.php?s=Product/view&columnid=6&archiveid=11" class="title">4 款 Linux 下开源的个人日记管理软件</a>
						</li>
																	</ul>
					
				</div>
			</div>
		</div>
		<div id="sideBlock" class="fleft w250 mleft10">
	<div class="boxBlock">
		<div class="boxBlockTitle">
			<span class="title">快捷导航</span>
		</div>
		<div class="boxBlockBody">
			<ul class="SideNavList">
				
				<li><a href="javascript:;">新闻资讯</a></li>
				
			</ul>
		</div>
	</div>
	<div class="boxBlock mtop10">
		<div class="boxBlockTitle">
			<span class="title">联系我们</span>
		</div>
		<div class="boxBlockBody">
			<div class="contactUS">
				<h5><font color="#FF6600"><b>昆山信德佳电气科技有限公司</b></font></h5>
<h5><font color="#FF6600">Kunshan Sindgood Electrical Technology Co., LTD</font></h5>
<h5>电 话: 0512-36607986 15962257765</h5>
<h5>传 真: 0512-36607986</h5>
<h5>网 址: www.sindgood.com</h5>
<h5>地 址: 江苏省昆山市苇城南路1699号工业技术研究院</h5>
			</div>
		</div>
	</div>
</div>
		<div class="clear"></div>
	</div>
	<div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
									<li><a tabid="#flinkboxTab1" href="javascript:;" class="bordernone">分类一</a></li>
						<li><a tabid="#flinkboxTab2" href="javascript:;" >分类二</a></li>
								</ul>
	</div>
	<div class="FlinkBody">
						<div id="flinkboxTab1" class="boxTabContent">
			<ul class="flinkList">
												<li><a href="http://www.baidu.com/" target="_blank">百度</a></li>
											</ul>
		</div>
				<div id="flinkboxTab2" class="boxTabContent">
			<ul class="flinkList">
												<li><a href="http://www.weibo.com/" target="_blank">新浪微博</a></li>
											</ul>
		</div>
					</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//友情链接切换tab
$("#Flink ul#FlinkboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script>
</div>
<div id="Footer">
	<ul id="Link">
						<li class="bordernone"><a href="http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9">招贤纳士</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10">关于我们</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11">联系我们</a></li>
				<li ><a href="javascript:;">在线手册</a></li>
				<li ><a href="javascript:;">帮助中心</a></li>
					</ul>
	<div id="copyright">
		昆山信德佳电气科技有限公司
		<br/>
		Powered by <a target="_blank" href="javascript:;">LaughCMS v1.0 Released</a> 版权所有 © 2012-2013, All right reserved. 
	</div>
</div>
<script type="text/javascript" src="public/js/scrollToTop.js"></script>
</body>
</html>