<?php

if(isset($_POST['submit'])){

$name = $_POST['name'];

$email = $_POST['email'];

$phone = $_POST['phone'];

$rating = $_POST['rating'];

$comments = $_POST['comments'];

echo "Thank you, $name for your comments.<br>";

echo "Your email address is $email and your phone number is $phone<br>";

echo "You stated that you found this example to be $rating and added: <br>$comments.<br>";



}

?>
