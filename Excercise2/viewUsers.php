<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

echo'<table border=1;"><tr><th>Users</th></tr>';


$result = $mysqli->query("SELECT * FROM Users");
    while($row = $result->fetch_assoc()) {
        echo"<tr><td>" . $row['user_id'] . "</td></tr>";
}


/* close connection */
$mysqli->close();
?>