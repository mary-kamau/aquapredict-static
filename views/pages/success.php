<?php 
session_start();

$_SESSION['payment_success'] = true;
header('Location: /login');
?>

<p> Thank you for your payment</p>
<?php
?>
