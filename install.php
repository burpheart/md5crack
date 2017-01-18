<?php
include 'config.php';
$sql = "CREATE TABLE Persons \r\n(\r\nid bigint NOT NULL AUTO_INCREMENT, \r\nPRIMARY KEY(id),\r\nhash varchar(40),\r\nLastName varchar(255)\r\n)";
if (mysql_query("CREATE DATABASE sha1", $con) && mysql_query("CREATE DATABASE md5", $con) && mysql_query("CREATE DATABASE mysql5", $con)) {
    mysql_select_db("sha1", $con);
    mysql_query($sql, $con);
    mysql_select_db("md5", $con);
    mysql_query($sql, $con);
    mysql_select_db("mysql5", $con);
    mysql_query($sql, $con);
    echo "ok";
} else {
    echo "Error creating database: " . mysql_error();
}
mysql_close($con);