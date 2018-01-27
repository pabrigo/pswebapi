<?php
ini_set('display_errors', 0);
$url1 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url2 = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$hostDomain = parse_url($url1, PHP_URL_HOST);

$tokens = explode('/', $url1);
$url1 = $tokens[sizeof($tokens)-1];

$url = "http://www.pipsnip.com/" . $url1;
$html = file_get_contents($url);
$tags = get_meta_tags($url);

libxml_use_internal_errors(true);
$doc = new DomDocument();
$doc->loadHTML($html);

$nodes = $doc->getElementsByTagName('title');
$metatitle = $nodes->item(0)->nodeValue;

$singleTitle = $metatitle;
$singleDescr = $tags['description'];

$ogimage = $tags['ogimage'];

$url3 = "http://www.pipsnip.com/member/premium-meta.php?premid=" . $premiumAccountID;
$tags2 = get_meta_tags($url3);
$analtcs = $tags2['analtcs'];
$defaultTitle = $tags2['title'];
$defaultDescr = $tags2['description'];
$social1 = $tags2['social-fb'];
$social2 = $tags2['social-tw'];
$social3 = $tags2['social-gl'];
if ($social1) {
	$social1Show = " &nbsp; <a href='" . $social1 . "' class='social-icons' target='_blank'><img src='http://" . $hostDomain . "/img/social-fb.png'></a> &nbsp; ";
}
if ($social2) {
	$social2Show = " &nbsp; <a href='" . $social2 . "' class='social-icons' target='_blank'><img src='http://" . $hostDomain . "/img/social-tw.png'></a> &nbsp; ";
}
if ($social3) {
	$social3Show = " &nbsp; <a href='" . $social3 . "' class='social-icons' target='_blank'><img src='http://" . $hostDomain . "/img/social-gl.png'></a> &nbsp; ";
}
$socialicons = "<span class='social-icons-wrapper'>" . $social1Show . $social2Show . $social3Show . "</span>";
?>