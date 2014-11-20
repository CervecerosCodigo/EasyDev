<?php
session_start();

$_SESSION['loggetInn'] = false;

header("Location: login.php");

?>