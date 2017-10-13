<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View User Posts</title>
</head>
<body>
    <form action="viewUserPosts.php" method="POST">
        <select>
        <?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");
        
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        
        $result = $mysqli->query("SELECT * FROM Users");
            while($row = $result->fetch_assoc()) {
                echo'<option value="' . $row['user_id'] . '">' . $row['user_id'] . '</option>';
        }
        
        
        /* close connection */
        $mysqli->close();
        ?>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>