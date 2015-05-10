<?php
	require_once("../utils/db_init.php");

	function book_ticket($name, $email, $tickets, $amount) {
		$db = get_db_connection();
		error_log("Parameter => " . $name . " " . $email . " " . $tickets . " " . $amount);
		try {
		$db->insert('parameter_tampering', [
			'name' => $name ,
			'email' => $email ,
			'number_of_tickets' => $tickets,
			'amount' => $amount
		]);
		} catch(Exception $e) {
 			 error_log('Message: ' .$e->getMessage());
		}
	}

	function list_all_hackers() {
		$db = get_db_connection();
		$hackers = $db->select('parameter_tampering', '*');
		$output = "<pre><table>";
		foreach($hackers as $hacker) {
			$output .= "<tr><td>" .$hacker["id"] . ". " . $hacker["name"] . " booked "
				. $hacker["number_of_tickets"] . " and paid "
				. $hacker["amount"] . "$ . (Email: "
				. $hacker["email"] . " ) </td></tr>";
		}
		$output .= "</table></pre>";
		return $output;
	}
	
?>
