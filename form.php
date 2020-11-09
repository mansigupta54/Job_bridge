<?php
$con = mysqli_connect('localhost','root',' ');
if(!$con)
{
    echo"Not connect to the server";
}
if(!mysqli_select_db($con,'job-bridge'))
{
    echo"Database not selected";
}
$username = $_POST['username']
?>