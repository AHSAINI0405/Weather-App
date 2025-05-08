<?php 
session_start();
if(Session_destroy())
{
    header("Location:login.html");

}
?>