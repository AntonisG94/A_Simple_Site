<?php
session_start();
$log=1;
if (isset($_SESSION['usersname'])){
unset($_SESSION);
session_destroy();
echo "<script> alert('Logged out successfully');window.location='index.html';</script>";
}
echo "<script> alert('You must Log In First!');window.location='index.html';</script>";
?>
