<?php
include("connection.php");
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysqli_query($conn,"select Username from registertb where Username='$user_check'");
$row=mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
@$login_Session=$row['Username'];
if(!isset($_SESSION['login_user']))
{
    header("location:login.html");
    die();
}
?>