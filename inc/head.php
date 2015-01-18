<?php 
	global $bufferString;

	function addCSSFile($file)
	{
		global $bufferString;

		$cnts = file_get_contents($file);

		if ($cnts === false) 
			return;

		$bufferString .= $cnts;
	}

	function makeCSSFile()
	{
		global $conf;
		global $bufferString;

		$fp = $conf['CACHEPATH']."/css.cache";

		if ($bufferString === "") 
			return;

		file_put_contents($fp,$bufferString);

		echo "<link href='".$fp."' rel='stylesheet'>" ;
	}

?>

<title>KSU BCM</title>
<meta charset=utf-8>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>

<?php
addCSSFile("css/bootstrap.min.css");
//addCSSFile("css/font-awesome.min.css");
addCSSFile("css/layout.css");
addCSSFile("css/slideshow.css");
addCSSFile("css/navbar.css");
addCSSFile("css/misc.css");
addCSSFile("css/home.css");

makeCSSFile();
?>
<!-- Bootstrap CSS -->
<!--
-->
<link href='css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='css/font-awesome.css'> <!--
<link href='css/layout.css' rel='stylesheet'>
<link href='css/slideshow.css' rel='stylesheet'>
<link href='css/navbar.css' rel='stylesheet'>
<link href='css/misc.css' rel='stylesheet'>
<link href='css/home.css' rel='stylesheet'>
-->
