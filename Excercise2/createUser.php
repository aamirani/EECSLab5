<?php
$user = $_POST['username'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$newuser =  "INSERT INTO Users (user_id)
VALUES ('$user')"; 
if($mysqli->query($newuser) === TRUE){
    echo'New Record Created Successfully';
}
else{
    echo'Failed to create new user, cannot be blank or already existing';
}

$list = "SELECT user_id FROM Users";
$result = $mysql->query($list);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "User: " . $row["user_id"] . "<br>";
    }
} 
else{
    echo "0 Users";
}

/* close connection */
$mysqli->close();
?>