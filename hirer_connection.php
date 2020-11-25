<?php
$con = mysqli_connect('localhost','root','','job-bridge');
if(!$con)
{
    echo"Not connect to the server";
}
if(!mysqli_select_db($con,'job-bridge'))
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
    echo 'welcome';
}
else{
    echo 'Data inserted';
    
}
header("refresh:0;url=index1.html")
?>
