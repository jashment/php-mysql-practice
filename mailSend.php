<!DOCTYPE html>
<html>
    <head>
        <title>Sending Email</title>
    </head>
    <body>
        <?php

            // Basic text email
            $to = "jashment22@gmail.com";
            $subject = "Feedback";
            $message = "This is a test email using PHP.";
            $message .= "It's just testing email sending capabilities.";
            $from = "jashment22@gmail.com";
            
            $headers = "From: " . $from;
            mail($to, $subject, $message, $headers);
            echo("Mail has been sent.");
            
            
            
        ?>
    </body>
</html>