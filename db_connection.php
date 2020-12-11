<?php
$con = mysqli_connect('localhost','root','','job_bridge') or die("connection not estblished");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['passcode'];
$phone=$_POST['phone'];
$s_ques = $_POST['Securityquestion'];
$gender = $_POST['gender'];
$sql = "INSERT INTO sign-up(first_name,last_name,email,passcode,phone,security_ans,gender) VALUES 
('$fname','$lname','$email','$password','$phone','$s_ques','$gender')";
if(!mysqli_query($con,$sql))
{
    echo 'Not inserted';
}
else{
    echo 'Data inserted';
}
//header("refresh:3;url=index1.html")
?>