<?php
require_once "setup.php";
require_once "functions.php";

$page = isset($_GET['page']) ? $_GET['page'] : "default";
$pc = getPage($page);
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="design/style.css">
<title><?php echo $website_title; ?></title>	
</head>
<body>
	<?php include "subpages/header.php"; ?>
	<div class="fieldmain">
	<table class="width100">
	<tr>
	<td class="width15" align="center" style="vertical-align: top;" rowspan="2"><?php require "subpages/sidebar.php"; ?></td>
	<td class="width85"><?php print $pc; ?></td>
	</tr>
	<tr>
	<td class="width90">
	</div>
	</table>
	</div>
</body>
</html>
