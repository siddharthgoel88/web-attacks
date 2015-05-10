<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>HTTP Parameter Tampering</title>
		<script>
			function update_rate() {
				var ticket = document.getElementById("num_of_tickets");
				var num_of_tickets = ticket.options[ticket.selectedIndex].text;	
				var total_price = 15 * num_of_tickets;
				document.getElementById("amount_div").innerHTML = total_price + " $";
				document.getElementById("amount_input").value = total_price;
			}
		</script>
	</head>

	<body>
		<center>	
			<h2>Hackathon ticket booking</h2>
			<pre> Each ticket costs 15 $ </pre>
			<form action='index.php' method='POST'>
				<table>
					<tr>
						<td>Name</td>
						<td> <input type="text" name="name" /></td>
					</tr>
					<tr>
						<td>Email</td>
						<td> <input type="text" name="email" /></td>
					</tr>
					<tr>
						<td>Number of tickets</td>
						<td>
							<select onchange="update_rate()" name="tickets" id="num_of_tickets">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>
							Total Amount
						</td>
						<td>
							<input type="hidden" name="amount" id="amount_input" value="15" />
							<div id="amount_div">15 $</div>
						</td>
					</tr>
				</table>
				<input type="submit" value="Book ticket" />
			</form>

			<br/><br/><br/><br/><br/>

			<h3>People who already bought hackathon tickets:</h3>
			<?php
				error_log("Checking");
				require_once('ticket_booking.php');


				function isFormFilled() {
					return isset($_POST["name"], $_POST["email"], $_POST["tickets"], $_POST["amount"]);
				}

				if (isFormFilled()) {
					book_ticket($_POST["name"], $_POST["email"], $_POST["tickets"], $_POST["amount"]);
				}

				echo list_all_hackers();
			?>	
		<center>

		
	</body>
</html>
