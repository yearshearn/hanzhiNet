<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header_page"); ?>


<div id="sitecontent"> 

<div class="npagePage pageEditor" id="page_about">
<div id="banner"><div style="background-image:url(uploadfile/banner01.jpg);"></div>
</div>

<div style="border-bottom:1px solid #2B2B2B; height:60px; background-color:#161616; line-height:60px; text-align:right; padding-right:100px;">
您的位置：<a href="index.html">首页</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a>了解更多</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;<a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?></a>
</div>


<div class="content">
<div class="mpageEditor module"><div class="module_container">
<div class="container_header" >

<div  class="biaoti"><?php echo $title;?></div>

    	</div>

 <div class="container_content"><div class="content_wrapper" style="background:url(uploadfile/bg.gif) no-repeat bottom center;"><div class="postbody">
        	    <?php echo $content;?>


</div>
</div></div></div></div></div></div></div>


<?php include template("content","footer"); ?>





