<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userinformation');

$name = $_POST['mail'];
$pass = $_POST['passkey'];
$digit = $_POST['digit'];

$s = "select * from usertable where email = '$name'";
$d = "select * from usertable where phone = '$digit'";
$result = mysqli_query($con,$s ) or  die(mysql_error());
$num = mysqli_num_rows($result);

if($num>0){
  echo "User Name already taken";
}

else{
    $signin="insert into usertable(email,password,phone) values ('$name','$pass','$digit')";
    mysqli_query($con,$signin);
    echo"signup successful";
}
?>