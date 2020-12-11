<?php
$con = mysqli_connect('localhost','root','','job_bridge') or die("connection not established");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$security_question = $_POST['Securityquestion'];

if($password==$confirm_password){
    $result=mysqli_query($con,"SELECT * FROM `user` WHERE email='$email' ");
    if(mysqli_num_rows($result)==0){
        $sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `phone`, `password`, `gender`,`Securityquestion`, `who`) 
        VALUES ('$fname','$lname','$email','$phone','$password','$gender','$security_question','hirer')";
        if(!mysqli_query($con,$sql))
        {
            echo 'welcome';
        }
        else{
            header("refresh:2;url=index.html");
        }
    }else {
        echo "Email is already registered";
    }
}else {
    echo "Passsword doesn't match";
}
 
?>