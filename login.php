<?php
session_start();
$con = mysqli_connect('localhost','root','','job_bridge') or die("connection not established");

$email = $_POST["email"];
$password = $_POST["password"];
$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);

if( mysqli_num_rows($result)== 1){
    $results=mysqli_fetch_assoc($result);
    $_SESSION['id']=$results['id'];
    header("refresh:0;url=index1.php");
}
else{
    
    echo "Invalid Credentials";
}

?>