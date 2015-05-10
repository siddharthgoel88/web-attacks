<?php
	
	$file = $_GET['file'];
	if(isset($file))
	{
		echo "<center> ============================= </center>";
		echo "<center>Below page is the included one</center>";
		echo "<center> ============================= </center>";
		echo "<br />";
		include("$file");
	}
	else
	{
		echo "<!doctype html><html><body>";
		echo "<center><img src='morpheus_lfi.jpg'></center>";
		echo "</body></html>";
		
	}
?>
