<?php
$host='localhost';
$user='root';
$password='';
$db_name='logindb';
$conn=mysqli_connect($host,$user,$password,$db_name);
if (mysqli_connect_errno())
{
    echo "failed to connect";
    mysqli_connect_error();
    exit();

}
?>