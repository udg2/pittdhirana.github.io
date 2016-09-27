<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $from = 'From: Dhirana 2016 <contact@dhirana.com>\r\n';
	$to = "contact@dhirana.com";
    $subject = "Contact Us Submission - Dhirana 2016";
    $body = "Here is the contact form submission information:\n\nName:\n $name\n\n E-Mail:\n $email\n\n Phone:\n $phone\n\n Message:\n $message";

	$userto = "$email";
	$usersubject = "Thank you, from Dhirana.";
    $userbody = "Dear $name,\n\nWe have received your response from the Dhirana 2016 Contact Us form and will be in touch shortly.\n\nIf you have any questions, please do not hesitate to ask us.\n\nYou can simply reply to this email at contact@dhirana.com.\n\nSincerely,\nThe Dhirana 2016 Board";
}

if ( mail($to, $subject, $body, $from) && mail($userto, $usersubject, $userbody, $from) )
{
    echo "<p>Thank you. Your response was received. You can now close this tab.</p>";
}
else
{
    echo "<p>Sorry, there was an error sending your response. Please try again. If the problem persits, please contact Dhirana 2016 via another method.</p>";
}

?>
