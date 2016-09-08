<?php 
require("simplepie.inc");
require("functions.php");

$pageUrl = "http://gdata.youtube.com/feeds/videos";
$pageSiz = 10;
$pageQue = getVariable($_GET["query"], "oasis");
$pageNum = getVariable($_GET["page"], 1);
$pageIni = $pageNum*$pageSiz-9;
$pageEnd = $pageUrl."?vq=".urlencode($pageQue)."&start-index=".$pageIni."&max-results=".$pageSiz."&alt=rss";

$vfeed = new SimplePie();
$vfeed->feed_url($pageEnd);
$vfeed->init();
$vfeed->handle_content_type();
$vmax = $vfeed->get_item_quantity();

for ($x = 0; $x < $vmax; $x++) { 
	$vitem = $vfeed->get_item($x);
	$video = getVideoid($vitem->get_id());
?>
<p>
	<a href="http://www.youtube.com/watch?v=<?php echo $video; ?>"><?php echo $vitem->get_title(); ?></a><br>
	<em><?php echo $vitem->get_id(); ?></em><br>
	<?php echo feed2txt($vitem->get_description()); ?><br>
	<img src="http://img.youtube.com/vi/<?php echo $video; ?>/2.jpg">
</p>
<?php
}
?>