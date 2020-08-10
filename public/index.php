<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>SIMPLE E-MAIL SENDER</title>
    <style></style>
</head>
<body>
    <?php
        function sendMail(){
            $to = "abc@example.com";
            $subject = "SUBJECT";
            $message = "
                <!DOCTYPE html>
                <html>
                <head>
                    <meta charset='UTF-8'/>
                    <title>EMAIL</title>
                </head>
                <body>
                    <div class='header' style='left:0;right:0;top:0;position:absolute;'>

                    </div>
                    <div class='container'>

                    </div>
                    <div class='footer' style='left:0;right:0;bottom:0;position:relative;'>

                    </div>
                </body>
                </html>
            ";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <xyz@example.com">' . "\r\n";
            $headers .= 'Cc: xyz@example.com"' . "\r\n";
            mail($to,$subject,$message,$headers);
        }
        sendMail();
    ?>
</body>
</html>