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
$email = $_POST["uname"];
$password = $_POST["psw"];
$sql = "Select * from user where email='$email' AND password='$password'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);
if($num == 1){
    $login=true;
    header("refresh:0;url=index1.html");
}
else{
    
    $showError = "Invalid Credentials";
}

?>