<?php
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);
if(!$conn)
{
    echo "Error connecting database or table:" .mysqli_connect_error();
}


$sql="CREATE DATABASE emart";

if(!mysqli_query($conn,$sql)){
    echo "Error creating database" .mysqli_error($conn);
}
$db="emart";
$conn=mysqli_connect($server,$username,$password,$db);

$sql="CREATE TABLE logins(
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(40) NOT NULL UNIQUE,
pass VARCHAR(30) NOT NULL
)";
if(!mysqli_query($conn,$sql)){
    echo "Table creation unsuccessful" .mysqli_error($conn);
}
$sql="INSERT INTO logins (email,pass)
VALUES ('rewa@ninja.com','Dada_1234')";
if(!mysqli_query($conn,$sql)){
    echo "record creation unsuccessful ".mysqli_error($conn);
}
else{
    echo "login craetion successful";
}

mysqli_close($conn);

?>


