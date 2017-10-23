<?php
    $todel = $_POST['del'];
    $mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");

    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    foreach(array($todel) as $delpost)
    {
    $result = "DELETE FROM Posts WHERE post_id='$delpost'";
    if ($mysqli->query($result) === TRUE){
        echo'Deleted post: ' . $delpost . '';
    }
    else{
        echo "Error: " . $conn->error;
    }
    } 

    /* close connection */
    $mysqli->close();
?>