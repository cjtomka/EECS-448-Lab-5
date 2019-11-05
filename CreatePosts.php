<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cjtomka", "zair9see", "cjtomka");

if ($mysqli->connect_errno)
{
    print"Connection failed. %s\n";
    $mysqli->connect_error;
    exit();
}
$newPost = $_POST["newPost"];
$user = $_POST["user"];
$query = "SELECT user_id FROM Users WHERE user_id='$user'";
if($result = $mysqli->query($query)->num_rows > 0)
{
    print "The post was successfully created.";
    $mysqli->query("INSERT INTO Posts (content, author_id) VALUES ('$newPost', '$user'");
}
else
{
    print "The username specified did not match any existing user.";
}
$mysqli->close();
?>
