<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "cjtomka", "zair9see", "cjtomka");
if ($mysqli->connect_errno)
{
    print"Connection failed. %s\n";
    $mysqli->connect_error;
    exit();
}
$user = $_POST["user"];
if ($user == "")
{
    print "The database does not contain any users yet.";
    exit();
}
$query = "SELECT content FROM Posts WHERE author_id = '$user'";
if($result = $mysqli->query($query)->num_rows > 0)
{
    print "<h1>Posts:</h1>";
    print "<table>";
    while ($row = $results->fetch_assoc())
    {
        $post = $row["content"];
        print "<tr><td>" .$post. "</tr></td>";
    }
    print "</table>";
}
else
{
    print "The database did not contain any posts.";
}
$result->free();
$mysqli-close();
?>
