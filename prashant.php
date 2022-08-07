<?php

$Fullname= $_POST['Fullname'];
$Username= $_POST['Username'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];
$ConfirmPassword = $_POST['Confirm Password'];

$mailheader = "From:" .$name."<".$email.">\r\n"

$recipient ="prashantsapkota@gmail.com";

mail($recipient, $subject, $mailheader)
or die("Error");

echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>

    <div class="cointainer">

        <h1>Thank you for visiting.I will get back Soon..</h1>
        <p class="back">Go Back to the<a href="home.html">Homepage</a>.</p>
       
        
       
    </div> 
</body>
</html>








';

?>