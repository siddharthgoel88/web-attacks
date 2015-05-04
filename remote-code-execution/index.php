<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Traceroute application</title>
	</head>

	<body>
		<h2>Fancy traceroute app</h2> <br/>
		Enter website address/ip :
		<form action="" method="POST">
			<input type="text" name="web-address" />
			<input type="submit" name="Trace it!">
		</form>

	<?php
		if(isset($_POST['web-address'])) {
			$cmd = "traceroute " . $_POST['web-address'];
			$output = shell_exec($cmd);
			echo "<pre>" . $output . "</pre>";
		} else {
			echo "<pre>You need to enter a valid ip !!</pre>";
		}
	?>

	</body>

</html>
