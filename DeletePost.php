<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cjtomka", "zair9see", "cjtomka");
if($mysqli->connect_errno)
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$removePosts = $_POST["checkbox"];
if($removePosts)
{
    foreach($removePosts as $val)
    {
        $query = "DELETE FROM Posts WHERE post_id = '$val'";
        if($mysqli->query($query) == TRUE)
        {
            print "The post registered to the ID" .$val. "was deleted.";
            print "<br>";
        }
        else
        {
            print "Error: " .$sql. "<br>" .$mysqli->error;
        }
    }
}
else
{
    print "No posts were selected for deletion.";
}
$mysqli->close();
?>