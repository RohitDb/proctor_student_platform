<?php
$username="root";
$server="localhost";
$password="";
$database="Dbms_project";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    echo("End".mysqli_connect_error());
}
?>