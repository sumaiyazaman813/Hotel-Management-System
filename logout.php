<?php
session_start();
session_destroy();

printf("Successfully logged out");

/* Redirect to current page */
header('Location:index.php' );
?>