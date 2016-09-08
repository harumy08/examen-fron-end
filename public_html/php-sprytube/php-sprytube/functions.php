<?php
// -----------------------------------
function feed2txt($document){
	$search = array('@<script[^>]*?>.*?</script>@si',   // Strip out javascript
				    '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly
				    '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags
				    '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA
	);
	$text = preg_replace($search, ' ', $document);
	
	$excerpt_length = 60;
	$words = explode(' ', $text, $excerpt_length + 1);
	if (count($words) > $excerpt_length) {
		array_pop($words);
		array_push($words, '[...]');
		$text = implode(' ', $words);
	}
	return trim($text);
}
function getVideoid($varurl) {
	$varid = str_replace("http://gdata.youtube.com/feeds/videos/", "", $varurl);
	return $varid;
}
function getVariable($vparam, $vdefault) {
	$result = $vdefault;
	if (isset($vparam)) {
  		$result = (get_magic_quotes_gpc()) ? $vparam : addslashes($vparam);
	}
	return $result;
}
?>