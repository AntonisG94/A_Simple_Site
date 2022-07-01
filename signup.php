<?php
session_start();
$host = "localhost";
$user = "root";
$password ="";
$db= "test";
$con =new mysqli($host, $user, $password, $db);
$myusername = $_POST['usersname'];
$mypassword = $_POST['pass'];
$myusername = stripslashes($_POST['usersname']);
$mypassword = stripslashes($_POST['pass']);
$sql ="SELECT * FROM contactform WHERE usersname = '$myusername'";                                                                                                                                                                                                                                                       error_reporting(E_ERROR | E_PARSE);
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if (isset($row)){
  echo "<script>alert('There is already an Account with the same Username!!');window.location='signup.html';</script>";
  unset($_SESSION);
  session_destroy();
}
else{
  if(($_POST["pass"]==$_POST["confirmpass"])){
      $gender = $_POST['gender'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $useremail = $_POST['useremail'];
      $phone = $_POST['phone'];
      $usersname = $_POST['usersname'];
      $pass = $_POST['pass'];
      $confirmpass = $_POST['confirmpass'];
      $agree = $_POST['agree'];
      $sql = "INSERT INTO contactform(title,firstname,lastname,useremail,phone,usersname,pass,confirmedpass,terms)
      VALUES('".$gender."' , '".$firstname."' , '".$lastname."' , '".$useremail."' , '".$phone."' , '".$usersname."' , '".$pass."' , '".$confirmpass."' , '".$agree."');" ;
      $result1 = mysqli_query($con,$sql) or die(mysqli_error());
  }
  else{
    echo "<script>alert('Form not Sumbitted Passwords do not match!');window.location='signup.html';</script>";
  }
}
if($result1){
  header("Location: login.html");
}
?>
