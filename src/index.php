<?php
/***************************************

Name: SHOWCASE
Author: Matt Lang 

(C) Theorem Lab 2014

****************************************/
include_once 'showcase.php';

// Get the Current path of the file that of the resource requested
$PATH 	= isset($_GET["path"])?$_GET["path"]:"";
$DEPTH	= isset($_GET["depth"])?$_GET["depth"]:0;

echo $PATH;
exit;

// Create a new Showcase at the resource
$showcase = Showcase::create($PATH);

// If showcase cannot be created - return with a Resource Not Found error
if ($showcase == null) {
	header('HTTP/1.0 404 Not Found');
	exit;
}

showcase.render($DEPTH);

echo "End of file";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Showcase</title>
	<style>
		.showcase{
			display:inline-block;
			margin:50px;
			text-align:left;
		}

		.showcase h3{
			margin-bottom:0px;
			padding-bottom:0px;
		}
		.inner-showcase{
			display:inline-block;
			position:relative;
			width:400px;
			height:250px;
			border:1px solid;
		}
		.showcase-overlay{
			display:inline-block;
			z-index:1000;
			text-decoration:none;
			position:absolute;
		    	top:0;
		    	left:0;
		    	right:0;
		    	bottom:0;
			background-image: -moz-linear-gradient(rgba(255,255,255,0),rgba(255,255,255,0));
		}
		.showcase iframe{
			z-index:0;
			width:400px;
			height:250px;
			border:0px;
		}
		body {
			margin:0px;
			padding:50px;
			text-align:center;
		}
	</style>
</head>
<body>
<h1>Showcases</h1>
<?php 
foreach($showcases as $showcase)
{
	$showcaseFile = $showcase . '/showcase.html';
	$doc = new DOMDocument();
	$doc->loadHTML(file_get_contents($showcase . '/showcase.html'));
	$domlist = $doc->getElementsByTagName('title');
	if ($domlist->length != 0) {
		$name = $domlist->item(0)->nodeValue;
	}
	else $name = substr($showcase, 2);

?>
	<div class='showcase'>
		<h3><?php echo $name?></h3>
		<div class='inner-showcase'>
			<iframe src='<?php echo $showcase?>/showcase.html' ></iframe>
			<a href='<?php echo $showcase ?>'><span class='showcase-overlay'></span></a>
		</div>
	</div>
<?php
}
?>
</body>
</html>
