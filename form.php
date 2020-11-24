<?php
$con = mysqli_connect('localhost','root','');
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

$sql = " INSERT INTO users( first_name, last_name, e-mail,password, security_ans, gender)
 VALUES ( $fname, $lname, $email, $password, $s_ques, $gender)";
if(!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else{
    echo 'Data inserted';
    header("refresh:3;url=index1.html");
}
 
?>