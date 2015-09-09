<?php

$server = "localhost";
$db_name = "applyeng_docket";
$mysqlusername = "applyeng";
$mysqlpassword = "3J#D(lNkTAuw";

// Normal connect to MySQL
/*
$conn = mysql_connect("$server", "$mysqlusername", "$mysqlpassword") or die("cannot connect to server");
$db = mysql_select_db($db_name, $conn) or die("database not located");*/

// Connect to PDO
$dbh = new PDO('mysql:host='.$server.';dbname='.$db_name, $mysqlusername, $mysqlpassword, array(
        PDO::ATTR_PERSISTENT => true
));
?>