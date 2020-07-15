<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userinformation');

$name = $_POST['user'];
$pass = $_POST['pass'];

$s = "select * from usertable where email = '$name' AND password = '$pass'"; 
$result = mysqli_query($con,$s) or  die(mysql_error());
$num = mysqli_num_rows($result);

if($num==1){
    mysqli_query($con,$s);
    echo"signin successful";
    header('Location:welcome.php');  
}

else{
    echo "Not Found! username or password is incorrect";

}
?>