<?php
$to = "cesaromar1973@gmail.com"; // Your Brand Mail ID
$from = "no-reply@us-cubanormalization.org"; // Replace it with your From Mail ID

$headers = "From: " . $from . "Saving Lives Campaign";

$subject = "New subscription";

$body = "New user subscription: " . $_POST['email'];
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{
if (mail($to, $subject, $body, $headers, "-f " . $from))
{
echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
}
else
{
echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';
}
}
?>