<?php
	if(!isset($POST['submit'])){
		// this page should not be accessed directly; need to submit form!
		echo "ERROR! Please submit the form.";
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$amount_choir = $POST['amount_choir'];
	$amount_pastor = $POST['amount_pastor'];
	$piece_suit = $POST['piece_suit'];
	$prom_dress = $POST['prom_dress'];
	$bridesmaids_dress = $POST['bridesmaids_dress'];
	$military = $POST['military'];
	$message = $POST['message'];
	
	// validate data
	if(empty($name)||empty($email)||empty($phone)){
		echo "Name, email, and phone number are required. Please try again.";
		exit;
	}
	
	$email_from = "aquathros@gmail.com;"
	$email_subj = "New Order";
	$email_body = "New apparel order.\n".
		"$name has ordered: \n".
		"----- START ORDER FORM -----\n".
		"$amount_choir choir robe(s)\n".
		"$amount_pastor pastor robe(s)\n".
		"$piece_suit piece suit(s)\n".
		"$prom_dress prom dress(es)\n".
		"$bridesmaids_dress bridesmaids dress(es)\n".
		"$military Military outfit(s)\n".
		"Additional information from client:\n".
		"$message\n\n\n".
		"----- END ORDER FORM -----\n".
		"Client's contact information:\n".
		"Phone number: $phone\n".
		"Email: $email";
	$email_to = "aquathros@gmail.com";
	$headers = "From $email_from \r\n";
	
	// send the form
	mail($email_to, $email_subj, $email_body, $headers);

	// redirect to main page
	header("Location:main.htm");
	else{
		?><span><?php echo "Please fill out all items on the form."; <?php
	}
?>
