<?php

$subject = "Test email message from PHP";
$to = array('josh@joshbutts.com', 'josh.butts@vertive.com', 'josh@offers.com');
$body = "This is just at test email message";

$from = "From: Josh Butts <josh@joshbutts.com>\r\n";


foreach ($to as $recipient) {
    mail($recipient, $subject, $body, $from);
}
