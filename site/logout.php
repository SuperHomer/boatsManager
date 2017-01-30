<?php
session_start();

// Destroy all session vars
$_SESSION = array();

// Destroy the session
session_destroy();

header('Location: login.php');
exit();

?>
