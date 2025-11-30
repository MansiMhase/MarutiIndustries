<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));
    $to ="info@marutiindustries.com";
    $subject ="New Enquiry from ".$name;
    $body ="You have received a new enquiry:\n\n";
    $body.="Name: ".$name."\n";
    $body.="Email:". $email."\n";
    $body.="Message:\n".$message."\n";
    $headers="From:".$email."\r\n";
    $headers.="Reply-To: ".$email."\r\n";
    if (mail($to,$subject,$body,$headers)) {
        echo "<h3 style='color:green;'>Thank you, $name! Your enquiry has been sent successfully.</h3>";
    } else {
        echo "<h3 style='color:red;'>Sorry, there was a problem sending your enquiry. Please try again later.</h3>";
    }
} else {
    echo "<h3 style='color:red;'>Invalid request.</h3>";
}
?>
