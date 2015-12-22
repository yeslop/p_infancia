<?php 
 session_start();
  if(!isset($_SESSION['user_authorized'])) header("Location:index.php");

    include('_include/configuration.php');
  include('_classes/conectar.php');
  include('_classes/crud.php');

  $con = new Coneccion($server,$user,$password,$dbname);
  $con->conectar();
  $crud = new Crud();

 ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<link href='http://fonts.googleapis.com/css?family=Clicker+Script' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Oldenburg' rel='stylesheet' type='text/css'/>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<script type="text/javascript">(function() { (function(){function c(a){this.t={};this.tick=function(a,c,b){var d=void 0!=b?b:(new Date).getTime();this.t[a]=[d,c];if(void 0==b)try{window.console.timeStamp("CSI/"+a)}catch(e){}};this.tick("start",null,a)}var a;window.performance&&(a=window.performance.timing);var h=a?new c(a.responseStart):new c;window.jstiming={Timer:c,load:h};if(a){var b=a.navigationStart,e=a.responseStart;0<b&&e>=b&&(window.jstiming.srt=e-b)}if(a){var d=window.jstiming.load;0<b&&e>=b&&(d.tick("_wtsrt",void 0,b),d.tick("wtsrt_",
"_wtsrt",e),d.tick("tbsd_","wtsrt_"))}try{a=null,window.chrome&&window.chrome.csi&&(a=Math.floor(window.chrome.csi().pageT),d&&0<b&&(d.tick("_tbnd",void 0,window.chrome.csi().startE),d.tick("tbnd_","_tbnd",b))),null==a&&window.gtbExternal&&(a=window.gtbExternal.pageT()),null==a&&window.external&&(a=window.external.pageT,d&&0<b&&(d.tick("_tbnd",void 0,window.external.startE),d.tick("tbnd_","_tbnd",b))),a&&(window.jstiming.pt=a)}catch(k){}})();window.tickAboveFold=function(c){var a=0;if(c.offsetParent){do a+=c.offsetTop;while(c=c.offsetParent)}c=a;750>=c&&window.jstiming.load.tick("aft")};var f=!1;function g(){f||(f=!0,window.jstiming.load.tick("firstScrollTime"))}window.addEventListener?window.addEventListener("scroll",g,!1):window.attachEvent("onscroll",g);
 })();</script>
<meta content='blogger' name='generator'/>
<link href='favicon.ico' rel='icon' type='image/x-icon'/>
<link href='http://kiddiezshop-btemplates.blogspot.com/' rel='canonical'/>
<link rel="alternate" type="application/atom+xml" title="Kiddiez Shop - Atom" href="http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default" />
<link rel="alternate" type="application/rss+xml" title="Kiddiez Shop - RSS" href="http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default?alt=rss" />
<link rel="service.post" type="application/atom+xml" title="Kiddiez Shop - Atom" href="https://www.blogger.com/feeds/6852192370751838918/posts/default" />
<link rel="me" href="https://www.blogger.com/profile/12349406774361643377" />
<link rel="openid.server" href="https://www.blogger.com/openid-server.g" />
<link rel="openid.delegate" href="http://kiddiezshop-btemplates.blogspot.com/" />
<!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
<title>
Kiddiez Shop
</title>
<link type='text/css' rel='stylesheet' href='https://www.blogger.com/static/v1/widgets/537653047-widget_css_bundle.css' />
<link type='text/css' rel='stylesheet' href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=6852192370751838918&zx=7b04a788-0865-46f3-95bd-7f829e0d37ec' />
<link rel="stylesheet" type="text/css" href="screen.css">






<script type='text/javascript'>
summary_noimg = 300;
summary_img = 200;
img_thumb_height = 180;
img_thumb_width = 190;
</script>
<script type='text/javascript'>
//<![CDATA[

function removeHtmlTag(strx,chop){ 
	if(strx.indexOf("<")!=-1)
	{
		var s = strx.split("<"); 
		for(var i=0;i<s.length;i++){ 
			if(s[i].indexOf(">")!=-1){ 
				s[i] = s[i].substring(s[i].indexOf(">")+1,s[i].length); 
			} 
		} 
		strx =  s.join(""); 
	}
	chop = (chop < strx.length-1) ? chop : strx.length-2; 
	while(strx.charAt(chop-1)!=' ' && strx.indexOf(' ',chop)!=-1) chop++; 
	strx = strx.substring(0,chop-1); 
	return strx+'...'; 
}

function createSummaryAndThumb(pID){
	var div = document.getElementById(pID);
	var imgtag = "";
	var img = div.getElementsByTagName("img");
	var summ = summary_noimg;
	if(img.length>=1) {	
		imgtag = '<span style="float:left; padding:0px 10px 5px 0px;"><img src="'+img[0].src+'" width="'+img_thumb_width+'px" height="'+img_thumb_height+'px"/></span>';
		summ = summary_img;
	}
	
	var summary = imgtag + '<div>' + removeHtmlTag(div.innerHTML,summ) + '</div>';
	div.innerHTML = summary;
}



//]]>
</script>
<!--[if IE]> <style type="text/css"> #menu li { position:static; } </style> <![endif]-->
<!--Internet Explorer Trancparency fix-->
<!--[if lt IE 8]> <script src="http://ie7-js.googlecode.com/svn/version/2.0(beta3)/IE8.js" type="text/javascript"></script> <![endif]-->
<script type="text/javascript">var a="&m=1",d="(^|&)m=",e="?",f="?m=1";function g(){var b=window.location.href,c=b.split(e);switch(c.length){case 1:return b+f;case 2:return 0<=c[1].search(d)?null:b+a;default:return null}}var h=navigator.userAgent;if(-1!=h.indexOf("Mobile")&&-1!=h.indexOf("WebKit")&&-1==h.indexOf("iPad")||-1!=h.indexOf("Opera Mini")||-1!=h.indexOf("IEMobile")){var k=g();k&&window.location.replace(k)};
</script><script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('headEnd');
</script></head>
<body>
<div id='header-outer' style="cursor: pointer">
	<?php include('template/header-outer.php'); ?>	
</div>
<div id='NavbarMenu'>
<div class='navbarleft'>
<div class='nav section' id='nav'><div class='widget PageList' id='PageList1'>
<h2>Pages</h2>
<div class='widget-content'>
<ul>
<?php
 include("template/menuprincipal.php");
?>
</ul>
<div class='clear'></div>
<span class='widget-item-control'>
<span class='item-control blog-admin'>
<a class='quickedit' href='http://www.blogger.com/rearrange?blogID=6852192370751838918&widgetType=PageList&widgetId=PageList1&action=editWidget&sectionId=nav' onclick='return _WidgetManager._PopupConfig(document.getElementById("PageList1"));' target='configPageList1' title='Edit'>
<img alt='' height='18' src='http://img1.blogblog.com/img/icon18_wrench_allbkg.png' width='18'/>
</a>
</span>
</span>
<div class='clear'></div>
</div>
</div></div>
</div>
</div>
<div id='wrap'>
<div id='wrap-inner'>
<div id='outer-wrapper'><div id='wrap2'>
<div id='content-wrapper'>
<div id='crosscol-wrapper' style='text-align:center'>
<div class='crosscol section' id='crosscol'></div>
</div>
<div id='main-wrapper'>
<div class='main section' id='main'><div class='widget Blog' id='Blog1'>
<div class='blog-posts hfeed'>

	<div class="date-outer">

		<h2 class='date-header'><span>Wednesday, November 18, 2015</span></h2>

		<div class="date-posts">


			<div class='post-outer'>
                 <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a >  El colegio
</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/unidad_I_el_colegio.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>La familia</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/fami.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>El cuerpo humano y los sentidos</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/sentidos1.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>Aseo personal y elementos de aseo</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/aseo1.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a href='prog_jardin.php?uid=6'>Prendas de vestir y estados del clima</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/prendas.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>Las plantas y germinación</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/planta1.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>Las plantas y los Alimentos</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/planta2.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>La granja y animales domésticos</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/granja.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                         <!-- entrada !-->
                 <div class='post hentry'>
                 	<a name='4085996068485245780'></a>
                 	<h3 class='post-title entry-title'>

                 		<a>Animales acuáticos</a>



                 	</h3>
                 	<div class='post-header'>
                 		<div class='post-header-line-1'></div>
                 	</div>
                 	<div class='post-body entry-content' id='post-body-4085996068485245780'>
                 		<div id='summary4085996068485245780'><p><img src="imagenes/agua.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="190" height="180"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		</div>
                 		<script type='text/javascript'>createSummaryAndThumb("summary4085996068485245780");</script>
                 		<p><img src="http://lh3.googleusercontent.com/_Zuzii37VUO4/Ta0nUiWvDBI/AAAAAAAAFog/nL_6t681_Gk/s000/Mammoth-Hot-Springs-Yellow-Stone-By-RePublicDomain.jpg" alt="Mammoth Hot Springs, Yellow Stone, USA. By RePublicDomain.com" width="500" height="375"/></p><p>Download this and more <a href="http://btemplates.com/">Blogger Templates</a> at <a href="http://btemplates.com" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px; !important; background:none !important;" title="BTemplates"><img src="http://1.bp.blogspot.com/_zNpQsOlwuPA/S2lKsFgNlMI/AAAAAAAAAKw/0Qay8rrjLKQ/s000/btemplates-small.png" alt="BTemplates" style="border:0 !important;text-decoration:none !important; margin:0px !important; padding:0px;background:none !important;" /></a>. For tutorials, tips and tricks about Blogger visit our <a title="Blogger Tutorials" href="http://blog.btemplates.com">Blog</a>.</p>
                 		<div style='clear: both;'></div>
                 	</div>
                 	<div class='post-footer'>
                 		<div class='post-footer-line post-footer-line-1'><span class='post-author vcard'>
                 			Posted by
                 			<span class='fn'>BTemplates</span>
                 		</span>
                 		<span class='post-timestamp'>
                 			at
                 			<a class='timestamp-link' href='2015/11/lorem-ipsum_18.html' rel='bookmark' title='permanent link'><abbr class='published' title='2015-11-18T22:32:00-08:00'>10:32 PM</abbr></a>
                 		</span>
                 		<span class='post-comment-link'>
                 		</span>
                 		<span class='post-icons'>
                 			<span class='item-control blog-admin pid-1099626233'>
                 				<a href='https://www.blogger.com/post-edit.g?blogID=6852192370751838918&postID=4085996068485245780&from=pencil' title='Edit Post'>
                 					<img alt='' class='icon-action' height='18' src='http://img2.blogblog.com/img/icon18_edit_allbkg.gif' width='18'/>
                 				</a>
                 			</span>
                 		</span>
                 		<div class='post-share-buttons goog-inline-block'>
                 			<a class='goog-inline-block share-button sb-email' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=email' target='_blank' title='Email This'><span class='share-button-link-text'>Email This</span></a><a class='goog-inline-block share-button sb-blog' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=blog' onclick='window.open(this.href, "_blank", "height=270,width=475"); return false;' target='_blank' title='BlogThis!'><span class='share-button-link-text'>BlogThis!</span></a><a class='goog-inline-block share-button sb-twitter' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=twitter' target='_blank' title='Share to Twitter'><span class='share-button-link-text'>Share to Twitter</span></a><a class='goog-inline-block share-button sb-facebook' href='https://www.blogger.com/share-post.g?blogID=6852192370751838918&postID=4085996068485245780&target=facebook' onclick='window.open(this.href, "_blank", "height=430,width=640"); return false;' target='_blank' title='Share to Facebook'><span class='share-button-link-text'>Share to Facebook</span></a><div class='goog-inline-block dummy-container'><g:plusone source='blogger:blog:plusone' href='http://kiddiezshop-btemplates.blogspot.com/2015/11/lorem-ipsum_18.html' size='medium' width='300' annotation='inline'/></div>
                 		</div>
                 	</div>
                 	<div class='post-footer-line post-footer-line-2'><span class='post-labels'>
                 		Labels:
                 		<a href='search/label/Lorem%203.html' rel='tag'>Lorem 3</a>,
                 		<a href='search/label/Lorem%204.html' rel='tag'>Lorem 4</a>
                 	</span>
                 	<span class='post-location'>
                 	</span>
                 </div>
                 <div class='post-footer-line post-footer-line-3'></div>
             </div>
         </div>
                 <!-- entrada !-->
                      

			</div>


		</div>
	</div>
      
</div>
<div class='blog-pager' id='blog-pager'>
<a class='home-link' href='index.html'>Home</a>
</div>
<div class='clear'></div>
<div class='blog-feeds'>
<div class='feed-links'>
Subscribe to:
<a class='feed-link' href='http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default' target='_blank' type='application/atom+xml'>Posts (Atom)</a>
</div>
</div>
<script type="text/javascript">window.___gcfg = {'lang': 'en'};</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/coordenadas.js"></script>
<script type="text/javascript" src="js/deal_index.js"></script>
</div></div>
</div>
<!-- Sidebar -->
<div id='sidebar-wrapper-right'>
<div class='sidebar2 section' id='sidebar2'><div class='widget PopularPosts' id='PopularPosts1'>
<h2>Panel de Control</h2>

    <h3>Bienvenido(a) <?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></h3>
        <a href="destroy.php">Salir</a>

</div></div>
</div>
<!-- spacer for skins that want sidebar and main to be the same height-->
<!-- PQR!-->
<div id='sidebar-wrapper-right'>
    <div class='sidebar2 section' id='sidebar3'>
        <div class='widget PopularPosts' id='PopularPosts2'>
            <h2>Menú Principal</h2>
            <div class='widget-content popular-posts'>
                <ul>
                    <li><a href="revisa_pqr.php">Ver comentarios</a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>


            </div>
        </div>
    </div>
</div>
<!-- PQR!-->
<div class='clear'>&#160;</div>
</div>
<!-- end content-wrapper -->
</div></div>
<!-- end outer-wrapper -->
</div>
</div>
<div id='credit-wrapper'>
<div id='credit'>
<a href='index.html'>Corporacón Politécnico de Magangué Nit: N° 900.170.599-2 Resolución: N° 4052(Dic 15-210) </a> 
</div></div>

<script type="text/javascript">
if (window.jstiming) window.jstiming.load.tick('widgetJsBefore');
</script><script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2759014865-widgets.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<script type='text/javascript'>
if (typeof(BLOG_attachCsiOnload) != 'undefined' && BLOG_attachCsiOnload != null) { window['blogger_templates_experiment_id'] = "templatesV1";window['blogger_blog_id'] = '6852192370751838918';BLOG_attachCsiOnload(''); }_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6852192370751838918','//kiddiezshop-btemplates.blogspot.com.co/','6852192370751838918');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '6852192370751838918', 'bloggerUrl': 'https://www.blogger.com', 'title': 'Kiddiez Shop', 'pageType': 'index', 'url': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'canonicalUrl': 'http://kiddiezshop-btemplates.blogspot.com/', 'homepageUrl': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'canonicalHomepageUrl': 'http://kiddiezshop-btemplates.blogspot.com/', 'blogspotFaviconUrl': 'favicon.ico', 'enabledCommentProfileImages': true, 'adultContent': false, 'disableAdSenseWidget': false, 'analyticsAccountNumber': '', 'useUniversalAnalytics': false, 'pageName': '', 'pageTitle': 'Kiddiez Shop', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'languageDirection': 'ltr', 'feedLinks': '\74link rel\75\42alternate\42 type\75\42application/atom+xml\42 title\75\42Kiddiez Shop - Atom\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default\42 /\76\n\74link rel\75\42alternate\42 type\75\42application/rss+xml\42 title\75\42Kiddiez Shop - RSS\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/feeds/posts/default?alt\75rss\42 /\76\n\74link rel\75\42service.post\42 type\75\42application/atom+xml\42 title\75\42Kiddiez Shop - Atom\42 href\75\42https://www.blogger.com/feeds/6852192370751838918/posts/default\42 /\76\n', 'meTag': '\74link rel\75\42me\42 href\75\42https://www.blogger.com/profile/12349406774361643377\42 /\76\n', 'openIdOpTag': '\74link rel\75\42openid.server\42 href\75\42https://www.blogger.com/openid-server.g\42 /\76\n\74link rel\75\42openid.delegate\42 href\75\42http://kiddiezshop-btemplates.blogspot.com/\42 /\76\n', 'latencyHeadScript': '\74script type\75\42text/javascript\42\76(function() { (function(){function c(a){this.t\75{};this.tick\75function(a,c,b){var d\75void 0!\75b?b:(new Date).getTime();this.t[a]\75[d,c];if(void 0\75\75b)try{window.console.timeStamp(\42CSI/\42+a)}catch(e){}};this.tick(\42start\42,null,a)}var a;window.performance\46\46(a\75window.performance.timing);var h\75a?new c(a.responseStart):new c;window.jstiming\75{Timer:c,load:h};if(a){var b\75a.navigationStart,e\75a.responseStart;0\74b\46\46e\76\75b\46\46(window.jstiming.srt\75e-b)}if(a){var d\75window.jstiming.load;0\74b\46\46e\76\75b\46\46(d.tick(\42_wtsrt\42,void 0,b),d.tick(\42wtsrt_\42,\n\42_wtsrt\42,e),d.tick(\42tbsd_\42,\42wtsrt_\42))}try{a\75null,window.chrome\46\46window.chrome.csi\46\46(a\75Math.floor(window.chrome.csi().pageT),d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.chrome.csi().startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),null\75\75a\46\46window.gtbExternal\46\46(a\75window.gtbExternal.pageT()),null\75\75a\46\46window.external\46\46(a\75window.external.pageT,d\46\0460\74b\46\46(d.tick(\42_tbnd\42,void 0,window.external.startE),d.tick(\42tbnd_\42,\42_tbnd\42,b))),a\46\46(window.jstiming.pt\75a)}catch(k){}})();window.tickAboveFold\75function(c){var a\0750;if(c.offsetParent){do a+\75c.offsetTop;while(c\75c.offsetParent)}c\75a;750\76\75c\46\46window.jstiming.load.tick(\42aft\42)};var f\75!1;function g(){f||(f\75!0,window.jstiming.load.tick(\42firstScrollTime\42))}window.addEventListener?window.addEventListener(\42scroll\42,g,!1):window.attachEvent(\42onscroll\42,g);\n })();\74/script\076', 'mobileHeadScript': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/f01787774e22c89a', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'sf': 'n'}}, {'name': 'messages', 'data': {'archive': 'Archive', 'deleteBacklink': 'Delete Backlink', 'deleteComment': 'Delete Comment', 'keepReading': 'Keep reading', 'labels': 'Labels', 'loading': 'Loading...', 'myBlogList': 'My Blog List', 'myFavoriteSites': 'My favorite sites', 'newer': 'Newer', 'newest': 'Newest', 'noTitle': 'No title', 'older': 'Older', 'oldest': 'Oldest', 'popularPosts': 'Popular Posts', 'popularPostsFromThisBlog': 'Popular posts from this blog', 'postAComment': 'Post a Comment', 'reportAbuse': 'Report Abuse', 'search': 'Search', 'share': 'Share', 'showAll': 'Show all', 'subscribe': 'Subscribe', 'subscribeToThisBlog': 'Subscribe to this blog', 'onlyTeamMembersCanComment': 'Note: Only a member of this blog may post a comment.'}}, {'name': 'skin', 'data': {'vars': {}, 'override': ''}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\75classic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\75flipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\75magazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\75mosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\75sidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\75snapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\75timeslide'}}}]);
_WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header', null, document.getElementById('Header1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList1', 'nav', null, document.getElementById('PageList1'), {'title': 'Pages', 'links': [{'href': 'http://btemplates.com/tag/kids/', 'title': 'Kids Blogger templates', 'isCurrentPage': false}, {'href': 'http://kiddiezshop-btemplates.blogspot.com.co/', 'title': 'Home', 'isCurrentPage': true}, {'href': 'p/about.html', 'title': 'About', 'isCurrentPage': false, 'id': '6762982778811014991'}, {'href': 'p/contact.html', 'title': 'Contact', 'isCurrentPage': false, 'id': '7516724079117576998'}], 'mobile': false}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'main', null, document.getElementById('Blog1'), {'cmtInteractionsEnabled': false, 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/68035727-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/1185134592-lightbox_bundle.css'}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'sidebar2', null, document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'sidebar2', null, document.getElementById('HTML3'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'sidebar2', null, document.getElementById('HTML2'), {}, 'displayModeFull'));
_WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'sidebar2', null, document.getElementById('HTML1'), {}, 'displayModeFull'));
</script>
</body>
</html>