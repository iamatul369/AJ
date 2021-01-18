<?php
$to = "atuljain12359@gmail.com";
$subject="Email TO AJ TECH";

$name=$_POST['name'];
$Email= $_POST['Email'];
$Message=$_POST['Message'];

$headers .="From: $Email";

mail($to,$subject,$headers);

echo "Email has been sent!  Thank You $name";
?>