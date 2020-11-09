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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$s_ques = $_POST['Securityquestion'];
$gender = $_POST['gender'];
?>