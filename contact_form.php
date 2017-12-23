<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	header("nicholas.html");
	exit
}
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($message))
{
    echo "Name and contact info are mandatory!";
    exit;
}

$email_from = 'nicholas@nickelos.org';//<== update the email address
if(empty($subject)){
	$email_subject = "Contact Request from $name";
}else{
	$email_subject = $subject;
}

$to = "nicholas@nickelos.org";//<== update the email address
//Send the email
mail($to,$email_subject,$message);
?>
