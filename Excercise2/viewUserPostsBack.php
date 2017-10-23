<?php
        $username = $_POST['userselection'];
        $mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");
        
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        
        $result = $mysqli->query("SELECT * FROM Posts WHERE author_id ='$username'");
            while($row = $result->fetch_assoc()) {
                echo'<p>' . $row['content'] . '.<br></p>';
        }
        
        /* close connection */
        $mysqli->close();
?>