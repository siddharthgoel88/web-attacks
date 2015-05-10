<?php
	echo "Yuhu !! I am just another page <br/>";

        if(isset($_GET['redirect'])){
		echo "Will be redirecting in 5 seconds";
                $redirect_url = $_GET['redirect'];
                header("refresh: 5; url=" . $redirect_url );
        }	
?>
