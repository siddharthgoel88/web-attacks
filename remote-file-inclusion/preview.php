<?php
	
	$url = $_GET['url'];
	
	$name = 'cookie';
	$value = 'babb0015b443a5307eb188faebb8d9a77b794ea2';	
	setcookie($name, $value, time() + 3600, '/');
	
	if(isset($url))
	{
		echo "<center> ============================= </center>";
		echo "<center>Below page is the included one</center>";
		echo "<center> ============================= </center>";
		echo "<br />";
		include("http://" . $url);
	}
	else
	{
		echo "<!doctype html><html><body>";
		echo "<center><img src='rfi.jpg'></center>";
		echo "</body></html>";
		
	}
?>
