<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Generation Code</title>
    <style type="text/css">
		* {
			font-family:Book Antiqua;
			color:#000;
		}
		a {
			text-decoration:none;
			border-style:double;
		}
		
		a:hover {
			color:#09F;
		}
		
		h2 {
			background-color:#0F0;
		}
	</style>
</head>

<body>
<?php
	function random($lenght){
		$load = file_get_contents('random.txt');
		$string = '';
		for($i=0; $i<$lenght; $i++){
			$acak = rand(0, strlen($load));
			$string .= $load{$acak};
		}
		return $string;
	}
	echo '<h1><p align="center">Generation Code:</p></h1>';
	echo '<h2 align="center">'.random(6).'</h2>';
?>
	<br />
	<p align="center"><a href="javascript:window.close()">Kembali</a></p>
</body>
</html>