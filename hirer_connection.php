<?php
$con = mysqli_connect('localhost','root','','job_bridge') or die('Connection not established');

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['Phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$security_question = $_POST['Securityquestion'];
if($password==$confirm_password){
    $result=mysqli_query($con,"SELECT * FROM `user` WHERE email='$email' ");
    if(mysqli_num_rows($result)==0){
        $sql = "INSERT INTO `user`(`fname`, `lname`, `email`, `phone`, `password`, `gender`, `Securityquestion`, `who`) 
        VALUES ('$first_name','$last_name','$email','$phone','$password','$gender','$security_question','student')";
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
