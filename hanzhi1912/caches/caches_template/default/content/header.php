<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="agent-pc theme-bwhite">
<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!--首页banne-->
<link href="<?php echo CSS_PATH;?>lrzk.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>lrzk.js"></script>
<!--[if lte IE 6]>
<script type="text/javascript" src="<?php echo JS_PATH;?>belatedPNG.js"></script>
<script type="text/javascript">
var __IE6=true;
DD_belatedPNG.fix('.logo img,.prev img,.next img,img');
</script>
<![endif]-->

<!--合作伙伴-->
<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet" type="text/css">
<SCRIPT src="<?php echo JS_PATH;?>ScrollPic.js" type=text/javascript></SCRIPT>


<!--公共-->
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>style.css">
<link href="<?php echo CSS_PATH;?>font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo JS_PATH;?>home-jquey.js" data-main="indexMain"></script>


<title>上海汉智工程建设集团有限公司</title>
</head>

<body class="gh0">

<div id="header" style=" background:url(<?php echo IMG_PATH;?>bg.png) repeat-x ;">
<div class="wrapper">
<div class="content">
<div id="headTop">
<a href="index.html" id="logo">
<img src="<?php echo IMG_PATH;?>logoo.png" height="44" /></a>
<div id="openBtn" class="fl btn"><div class="lcbody">
<div class="lcitem top"><div class="rect top"></div></div>
<div class="lcitem bottom"><div class="rect bottom"></div>
</div></div>
</div></div>

<div id="navWrapper"><div class="content">
<p class="search_but" style="display:none">
<i class="fa fa-search" aria-hidden="true"></i></p>


<ul class="nav movedx" data-movedx-mid="1">
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
<a href="<?php echo siteurl($siteid);?>">首页</a>

<li class="navitem"><a href="<?php echo siteurl($siteid);?>" target="_self"><span data-title="首页">首页</span></a></li>

<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><!--  一级栏目循环开始  -->
<li class="navitem">
<a <?php if($catid==$r[catid] || $top_parentid==$r[catid]) { ?> class="active"<?php } ?> href="<?php echo $r['url'];?>">
<span data-title="<?php echo $r['catname'];?>"><?php echo $r['catname'];?></span><i class="fa fa-angle-down"></i>
</a>
<?php if($r[arrchildid]) { ?> <!--是否有子栏目-->
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=562eba0525a72e8a95a03bd7c7d4da01&action=category&catid=%24r%5Bcatid%5D&num=15&siteid=%24siteid&order=listorder+ASC&return=data2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data2 = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
<ul class="subnav">  <?php $n=1;if(is_array($data2)) foreach($data2 AS $v) { ?><!--子栏目循环开始-->
<li><a href="<?php echo $v['url'];?>" target="_self"><?php echo $v['catname'];?></a></li> <?php $n++;}unset($n); ?><!--子栏目循环结束-->
</ul>
</li>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php } ?>
<?php $n++;}unset($n); ?><!--  一级栏目循环结束-->
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	

</ul>
</div></div>
</div></div></div>