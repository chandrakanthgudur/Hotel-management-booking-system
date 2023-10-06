<!DOCTYPE html>
<html><head> <meta charset="utf-8">
<title>Thank You for Joining our Mailing List</title>
</head>
<body>
<?php
//Create PHP variable and assign incoming POST variables to PHP variables
$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email = $_POST['email'];
$contactnumber = $_POST['contactnumber'];
//Create a thank you message using PHP variables in HTML elements.
$html_string="<h3>Thank you </h3><p>Dear $firstname $lastname<br><br> Thank
you for joining our mailing list. We can provide $contactnumber and $email
with useful information about events and reservations at Hotel RajHans. <br><br>Management Team</p>";
	
echo "$html_string";
?>
</body></html>
