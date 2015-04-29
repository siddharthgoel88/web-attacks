<?php
	
	$file = $_GET['file'];
	if(isset($file))
	{
		include("$file");
	}
	else
	{
		echo "<!doctype html><html><body>";
		echo "<center><img src='morpheus_lfi.jpg'></center>";
		echo "</body></html>";
		
	}
?>
