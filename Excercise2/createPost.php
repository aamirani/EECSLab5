<?php
$user = $_POST['username'];
$post = $_POST['post'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$result = $mysqli->query("SELECT * FROM Users WHERE user_id = '$user'");
if($result->num_rows > 0){

$newpost =  "INSERT INTO Posts (post_id, content, author_id)
VALUES ('NULL', '$post', '$user')"; 
if($mysqli->query($newpost) === TRUE){
    echo'New Post Created Successfully';
}
else{
    echo'Failed to create new post, cannot be blank or already existing';
}
}
else{
    echo'Failed to create new post, cannot have non-existant user';
}

/* close connection */
$mysqli->close();
?>