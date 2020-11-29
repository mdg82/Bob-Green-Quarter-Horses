<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo '<script>alert("ERROR! Please try again!")</script>';
	echo '<a href="http://bobgreenquarterhorses.com/"><h2>Return to site</h2></a>';
}
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($fullName)||empty($email))
{
    echo '<script>alert("Full name and email are mandatory!")</script>';
		exit;
}

/*$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}*/

if(IsInjected($email))
{
    echo "Bad email value!";
    exit;
}

$email_from = $email;//<== update the email address
$email_subject = "Message for Bob Green Quarter Horses";
$email_body = '<html><body>';
$email_body .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_body .= "<tr style='background: #eee;'><td><strong>Full name:</strong> </td><td>" . $fullName . "</td></tr>";
$email_body .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$email_body .= "<tr><td><strong>Message</strong> </td><td>" . $message . "</td></tr>";
$email_body .= "</table>";
$email_body .= "</body></html>";

$to = "bobgreen35@hotmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: form-submission.html');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
 ?>
