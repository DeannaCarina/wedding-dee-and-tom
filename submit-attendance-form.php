<?php
if(isset($_POST['email'])) {
    $email_to = "deannacarina@gmail.com";
    $email_subject = "Someone is confirming their attendance!";
    $first_name = $_POST['first_name']; // required
    $last = $_POST['last_name']; // required
    $email_from = $_POST['email_address']; // required
    $makeit = $_POST['makit']; // required
    $makeit_message = $_POST['makeit_message']; //not required

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Form details below.\n\n";
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_address)."\n";
    $email_message .= "Can they make it?: ".clean_string($makeit)."\n";
    $email_message .= "Their message: ".clean_string($makeit_message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);
?>

  <?php
}
?>