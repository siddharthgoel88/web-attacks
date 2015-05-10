<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reflected XSS</title>
	</head>

	<body>
		<?php
			$name = 'cookie';
			$value = 'babb7915b443a5307eb188faebb8d9a77b794ea2';	
			setcookie($name, $value, time() + 3600, '/');
		?>

		<h2>Hello App !!</h2>
		Enter your name:
		<form action="index.php" method="GET">
			<input type="text" name="hello_name" />
			<input type="submit" value="Press it!" />
		</form>


		<script>
			console.log("Hello");
			<?php
				if(isset($_GET['hello_name'])) {
					echo "document.write('Hello $_GET[hello_name]');";
				}
			?>
		</script>
	</body>
</html>
