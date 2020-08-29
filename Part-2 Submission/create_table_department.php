<?php

$link = mysqli_connect('localhost','root','','MidTerm');

if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE class(
    name VARCHAR(40) NOT NULL PRIMARY KEY,
    meets_at VARCHAR(20) NULL,
    room VARCHAR(10) NULL,
    fid INT NULL)";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}    

else{
    echo "Error: Could not able to create table." .mysqli_error($link);
}

mysqli_close($link)

?>