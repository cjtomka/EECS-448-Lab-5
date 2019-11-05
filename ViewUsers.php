<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "cjtomka", "zair9see", "cjtomka");
    if ($mysqli->connect_errno)
    {
        print"Connection failed. %s\n";
        $mysqli->connect_error;
        exit();
    }
    $query = "SELECT * FROM Users";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0)
    {
      print "<h1>User List</h1>";
      print "<table border='1'>";
      print "<tr><th>User:</th>";
        while ($row = $result->fetchassoc())
        {
            print "<td>" .$row["user_id"]. "</td>";
        }
        print "</tr></table>";
    }
    else
    {
        print "The user database is empty.";
    }
    $result->free();
    $mysqli->close();
?>
