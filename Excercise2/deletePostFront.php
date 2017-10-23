<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Posts</title>
</head>
<body>
    <form action="deletePost.php" method="POST">
        <table>
            <thead>
                <th>Author</th>
                <th>Post</th>
                <th>Delete?</th>
            </thead>
            <tbody>
            <?php
            $mysqli = new mysqli("mysql.eecs.ku.edu", "aamirani", 'P@$$word123', "aamirani");
            
            /* check connection */
            if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            
            
            $result = $mysqli->query("SELECT * FROM Posts");
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row['author_id'] . "</td><td>" . $row['content'] . "</td><td><input type='checkbox' name='del' value='" . $row['post_id'] . "'></td></tr>";
            }
            
            /* close connection */
            $mysqli->close();
            ?>
         </tbody>
        </table>
        <button type="submit">Submit</button>
    </form>

</body>
</html>