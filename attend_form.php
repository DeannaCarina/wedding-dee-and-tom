<?php
/* Check all form inputs using check_input function */
$first_name = check_input($_POST['first_name']);
$last_name  = check_input($_POST['last_name']);
$email_address    = check_input($_POST['email_address']);
$makeit  = check_input($_POST['makeit']);
$makeit_message   = check_input($_POST['makeit_message']);

$myemail = "deannacarina@gmail.com"; // Replace with your E-mail address.

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email_address))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
{
    $website = '';
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name: $first_name $last_name
E-mail: $email_address
Attending?: $makeit
Message: $makeit_message

End of message
";

/* Send the message using mail() function */

$headers="From: $first_name $last_name<$email_address>\r\nReturn-path: $email_address\r\n";
mail($myemail, $subject, $message, $headers);


// echo "ok"; // For testing purposes only
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
<b>We apologize for the inconvenience, an error occurred.</b><br />
<?php echo $myError; ?>
<?php
exit();
}