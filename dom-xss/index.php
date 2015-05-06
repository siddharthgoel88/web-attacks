<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>DOM XSS</title>
	</head>

	<body>
		<?php
			$name = 'cookie';
			$value = 'babb7915b443a5307eb188faebb8d9a77b794ea2';	
			setcookie($name, $value, time() + 3600, '/');
		?>

		<h2>Hello App !!</h2>
		Enter your name:
		<form action='' method='POST'>
			<input type='text' id='hello_name' />
			<input type='button' value='Press it!' onclick='welcomeUser()' />
		</form>


		<script>
			console.log("Hello");

		//	function sayHello() {
				if (document.location.href.indexOf("#name") != -1) {
					//var node = document.createElement("");
					//var msg = document.createTextNode("Hello " + document.location.href.substring(document.location.href.indexOf("#name=")+6) + " !!");
					//node.appendChild(msg);
					//document.getElementById("hello_message").appendChild(node);
					//document.getElementById("hello_message").value = "Hello";
					document.write(decodeURIComponent("Hello " + document.location.href.substring(document.location.href.indexOf("#name=")+6) + " !!"));
				}
		//	}
			
			function welcomeUser() {
				var lastIndex = -1;
				if (document.location.href.indexOf("#") != -1) {
					lastIndex = document.location.href.indexOf("#");
				} else {
					lastIndex = document.location.href.length;
				}
				document.location = document.location.href.substring(0, lastIndex) + '#name=' + document.getElementById('hello_name').value;
				location.reload();
				//sayHello();
			}
		</script>

	</body>
</html>
