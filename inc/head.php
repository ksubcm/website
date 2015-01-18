<?php 
	global $bufferString;

	function addCSSFile($file)
	{
		global $bufferString;

		$cnts = file_get_contents($file);

		if ($cnts === false) 
			return;

		$bufferString .= compress($cnts);
	}

	function compress($buffer)
	{
		$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
		/* remove tabs, spaces, new lines, etc. */        
		 $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
		/* remove unnecessary spaces */        
		$buffer = str_replace('{ ', '{', $buffer);
		$buffer = str_replace(' }', '}', $buffer);
		$buffer = str_replace('; ', ';', $buffer);
		$buffer = str_replace(', ', ',', $buffer);
		$buffer = str_replace(' {', '{', $buffer);
		$buffer = str_replace('} ', '}', $buffer);
		$buffer = str_replace(': ', ':', $buffer);
		$buffer = str_replace(' ,', ',', $buffer);
		$buffer = str_replace(' ;', ';', $buffer);

		return $buffer;
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

<link href='css/bootstrap.min.css' rel='stylesheet'>
<link rel='stylesheet' href='css/font-awesome.css'> 

<?php
//addCSSFile("css/bootstrap.min.css");
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
<link href='css/layout.css' rel='stylesheet'>
<link href='css/slideshow.css' rel='stylesheet'>
<link href='css/navbar.css' rel='stylesheet'>
<link href='css/misc.css' rel='stylesheet'>
<link href='css/home.css' rel='stylesheet'>
-->
