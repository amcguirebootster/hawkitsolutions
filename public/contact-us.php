<?php 
$to = 'info@yourdomain.com'; // Put in your email address here
$subject  = "Contact Us Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// User info (DO NOT EDIT!)
if(!empty($_POST['request-1'])) {
	$request1 = stripslashes($_REQUEST['request-1']); // request
} else {
	$request1 = ' ';
}
if(!empty($_POST['request-2'])) {
	$request2 = stripslashes($_REQUEST['request-2']); // request
}else {
	$request2 = ' ';
}
if(!empty($_POST['request-3'])) {
	$request3 = stripslashes($_REQUEST['request-3']); // request
}
else {
	$request3 = ' ';
}
if(!empty($_POST['request-4'])) {
	$request4 = stripslashes($_REQUEST['request-4']); // request
}else {
	$request4 = ' ';
}
$company = stripslashes($_REQUEST['company']); // sender's comapny
$firstname = stripslashes($_REQUEST['firstname']); // sender's first name
$lastname = stripslashes($_REQUEST['lastname']); // sender's last name
if(!empty($_POST['address'])) {
	$address = stripslashes($_REQUEST['address']); // sender's address
}else {
	$address = ' ';
}
$city = stripslashes($_REQUEST['city']); // sender's city
$zip = stripslashes($_REQUEST['zip']); // sender's city zip code
$phone = stripslashes($_REQUEST['phone']); // sender's phone
$email = stripslashes($_REQUEST['email']); // sender's email
$message = stripslashes($_REQUEST['message']); // message
$msg = "";

// The message you will receive in your mailbox
// Each parts are commented to help you understand what it does exaclty.
// YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
$msg .= "Request For: ".$request1. "," .$request2. "," .$request3. "," .$request4."\r\n\n<br />"; 
$msg .= "Company: ".$company."\r\n\n<br />";  
$msg .= "First Name: ".$firstname."\r\n\n";  
$msg .= "Last Name: ".$lastname."\r\n\n<br />";  
$msg .= "Address: ".$address."\r\n\n";  
$msg .= "City: ".$city."\r\n\n";  
$msg .= "Zip Code: ".$zip."\r\n\n<br />";  
$msg .= "Phone No.: ".$phone."\r\n\n<br />";  
$msg .= "Subject: ".$subject."\r\n\n<br />"; // add subject to the message
$msg .= "E-mail: ".$email."\r\n\n<br />";  // add sender's email to the message
$msg .= "Message: ".$message."\r\n\n<br />";  
$msg .= "\r\n\n"; 

$mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable
echo $msg;
if($mail) {
	header("Location:index.html");	
} else {
	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
}

?>