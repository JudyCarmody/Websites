<html>
	<head>
		<title>Anointed Hands Sewing -- Order</title>
		<link rel="stylesheet" href="css/color.css">
	</head>
	<body>
		<p id="warning">This order form is for show only. If you fill it out and submit it, you will get an error.
		</p>
		
		<p>Use this form to order your robes. I will respond within 48 hours of reciept of this form to discuss details. Please to not contact me before the 48 hour deadline.<br/><br/>
		Put 0 for any item you do not want to order.</p>
		
		<form method="get" name="robeorder" action="order.php">
		<label for="name">Your name:</label>
		<input type="text" id="name"><br/>
		
		<label for="email">Your e-mail address:</label>
		<input type="text" id="email"><br/>
		
		<label for="phone">Your phone number:</label>
		<input type="text" id="phone"><br/><br/>
		
		<label for="amount_choir">Number of choir robes:</label>
		<input type="text" id="amount_choir" name="amount_choir"><br/>
		<br/>
		
		<label for="amount_pastor">Number of pastor robes:</label>
		<input type="text" id="amount_pastor" name="amount_pastor"><br/>
		<br/>
		
		<label for="piece_suit">Number of suit pieces (2 or 3):</label>
		<input type="text" id="piece_suit" name="piece_suit"><br/>
		<br/>
		
		<label for="prom_dress">Would you like a Prom Dress? (yes for one, or enter number for amount. 0 for none.)</label>
		<input type="text" id="prom_dress" name="prom_dress"><br/>
		<br/>
		
		<label for="military">Would you like a Military outfit? (yes for one, or enter number for amount. 0 for none.)</label>
		<input type="text" id="military" name="military"><br/>
		<br/>
		
		<label for="message">Additional information:</label><br/>
		<input type="text" id="message" name="message"><br/>
		<br/>
		
		<input type="submit" value="submit">
		<?php
			include "order_form.php";
		?>
		</form>
	</body>
</html>
