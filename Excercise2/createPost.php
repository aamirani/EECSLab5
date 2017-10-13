<?php
$user = $_POST['username'];
$post = $_POST['post'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


/* close connection */
$mysqli->close();
?>