<!DOCTYPE html>
<html>
    <head>
        <title>Sending Email</title>
    </head>
    <body>
        <?php

            // Basic text email
            // $to = "jashment22@gmail.com";
            // $subject = "Feedback";
            // $message = "This is a test email using PHP.";
            // $message .= "It's just testing email sending capabilities.";
            // $from = "jashment22@gmail.com";
            
            // $headers = "From: " . $from;
            // mail($to, $subject, $message, $headers);
            // echo("Mail has been sent.");
            
            //HTML emails
            $to = "jashment22@gmail.com";
            $from = "jashment22@gmail.com";
            
            $headers = "From: " . $from . "\r\n";
            $headers = "Reply-To " . $from . "\r\n";
            $headers = "MIME-Version : 1.0\r\n";
            $headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            $message = "<html><body>";
            $message = "<h1> Information From Myself</h1>";
            $message = "<p>It's time to act!</p>";
            
            mail($to, $subject, $message, $headers);
            echo("Mail has been sent.");
        ?>
    </body>
</html>