<?php 
// functions
function getVariable($vparam, $vdefault) {
	$result = $vdefault;
	if (isset($vparam)) {
  		$result = (get_magic_quotes_gpc()) ? $vparam : addslashes($vparam);
	}
	return $result;
}
// youtube interface
$yt_keynum = "6jrOQnqPhLk";
$yt_squery = getVariable($_GET['tag'], "santana");
$yt_pagnum = getVariable($_GET['pag'], 1);
$yt_paglen = 10;

$yt_urltot = "http://www.youtube.com/api2_rest";
$yt_urltot.= "?method=youtube.videos.list_by_tag";
$yt_urltot.= "&dev_id=" . $yt_keynum;
$yt_urltot.= "&page=" . $yt_pagnum;
$yt_urltot.= "&per_page=" . $yt_paglen;
$yt_urltot.= "&tag=" . $yt_squery;

header('Content-Type: text/xml; charset=ISO-8859-1');
// ----------------
$lineas = file($yt_urltot);
foreach ($lineas as $lnum => $linea) {
   echo $linea;
}
?>