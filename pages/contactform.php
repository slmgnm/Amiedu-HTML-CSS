<?php

if (isset($_POST['submit'])) {
$fname = $_POST['fname'];

$Email = $_POST['Email'];
$Cname = $_POST['Cname'];
$message = $_POST['message'];


$mailTo = "saleemghanem@gmail.com";
$headers = "From: ".$Email;
$txt = "You have received an e-mail from ".$fname.".\n\n".$message;

mail($mailTo, $txt, $headers);
header("Location: contact.php?mailsend");
}
