<?php
$con = mysqli_connect('localhost','root','','hirer');
if(!$con)
{
    echo"Not connect to the server";
}
if(!mysqli_select_db($con,'hirer'))
{
    echo"Database not selected";
}
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$security_question = $_POST['Securityquestion'];
$sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `phone`, `password`, `Securityquestion`) 
VALUES ($first_name,$last_name,$email,$phone,$password,$security_question)";
if(!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else{
    echo 'Data inserted';
    header("refresh:3;url=index1.html");
}
?>
