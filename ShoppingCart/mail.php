<?php
    require('libs/PHPMailer-master/PHPMailerAutoload.php');

    $mail = new PHPMailer;

    $mail->isSMTP();
    $body = "Hello, this is your email";

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPDebug = 2;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->Username = "aaronroles.shoppingcart@gmail.com";
    $mail->Password = "arshopcart1";
    $mail->setFrom("aaronroles.shoppingcart@gmail.com", "Aaron Roles");
    // Sending to my main gmail address but if we were using this 
    // for sending to each user then I would sort through the db 
    // and send to the user's email with the matching username 
    // from the username session variable 
    $mail->addAddress("wtcchhh@gmail.com", "Aaron Roles");
    $mail->Subject = "Shopping Cart Order Confirmation";
    $mail->msgHtml($body);
    if(!$mail->send()){
        echo "Mail error - ". $mail->ErrorInfo;
    }
    else{
        echo '<script>Order placed</script>';
    }
?>