
<?php
  $first_name = $_POST['first name'];
  $last_name = $_POST['last name'];
  $email_address = $_POST['email'];
  $makeit = $_POST['can they make it?'];
  $makeit_message = $_POST['their message:'];
?>


<?php
	$email_from = 'deannas_91@hotmail.com';

	$email_subject = "New Form submission from Wedding Website";

	$email_body = "You have received a new message from the visitor $first_name.\n".
                            "Here is the message:\n $first_name $last_name ($email_address) says: $makeit_message and $makeit".

  $to = "deannacarina@gmail.com";

  $headers = "From: $first_name \r\n";


  mail($to,$email_subject,$email_body,$headers);

 ?>


