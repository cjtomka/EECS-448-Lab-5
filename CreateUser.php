<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "cjtomka", "zair9see", "cjtomka");

if ($mysqli->connect_errno)
{
    print"Connection failed. %s\n";
    $mysqli->connect_error;
    exit();
}
$newUser = $_POST["newUser"];
$query = "SELECT * FROM Users WHERE user_id = '$newUser'";
if($result = $mysqli->query($query)->num_rows > 0)
{
    print "That username is already in use.";
}
/*elseif ($newUser == NULL)
{
    print "That username is invalid.";
}*/
else
{
    $newUserID = "INSERT INTO Users (user_id) VALUES ('$newUser')";
    $mysqli->query($newUserID);
    print "A user with this username was registered successfully.";
}
$mysqli->close();
?>
