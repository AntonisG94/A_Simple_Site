<?php
session_start();
if ($_SESSION['usersname']==NULL) {
      header("Location: firstlogin.html");
      exit();
}
if ($_SESSION['usersname']==0) {
      header("Location: failtologin.html");
      exit();
}
header("Location: programm.html");
?>
