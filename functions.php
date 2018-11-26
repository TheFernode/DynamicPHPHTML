<?php
require_once("setup.php");

function getPage($pagename)
{
	global $website_pages;
	$path = "$website_pages/$pagename.php";
	
	if(file_exists($path))
		return openPage($path);
	else
		return openPage("$website_pages/default.php");
}

function openPage($pageurl)
{
	$fh = fopen($pageurl, "r");
	$fc = fread($fh, filesize($pageurl));
	return $fc;
}
?>
