<?php
session_start();
if (!isset($log)){
  $host = "localhost";
  $user = "root";
  $password ="";
  $db= "test";
  if(($_POST['loginusersname'])!=""){
    $myusername = $_POST['loginusersname'];
    $mypassword = $_POST['loginpass'];
    $myusername = stripslashes($_POST['loginusersname']);
    $mypassword = stripslashes($_POST['loginpass']);
    $con =new mysqli($host, $user, $password, $db);
    $sql ="SELECT * FROM contactform WHERE usersname = '$myusername' and pass = '$mypassword'";                                                                                                                                                                                                                                                       error_reporting(E_ERROR | E_PARSE);
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if (($row['usersname'] == $myusername) && ($row['pass'] == $mypassword)){
      header("Location: index.html");
      session_start();
      $_SESSION['usersname']=1;
    }
    else{
      $_SESSION['usersname']=0;
      include 'failtologin.html';}
  }
}
echo "<script> alert('You are already Logged In');window.location='index.html';</script>";
?>
