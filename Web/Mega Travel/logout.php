<?php
session_start(); // Start the session to access session variables

// Destroy all session data
session_destroy();

// Redirect to the homepage (index.php) after logging out
header("Location: index.php");
exit();
?>
