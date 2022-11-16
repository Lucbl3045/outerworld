<?php
if (!isset($_POST['name'])) {
  require_once("connect.php");
}
$sql = "SELECT user_nickname,user_image
   FROM users WHERE user_mail ='"
  . mysqli_real_escape_string($connect, htmlspecialchars($_POST['email'])) . "'
   AND user_password ='"
  . mysqli_real_escape_string($connect, htmlspecialchars($_POST['password'])) . "'";
$resul = consl($sql, $connect);
if (mysqli_num_rows($resul) == 1) {
  session_start();
  foreach (mysqli_fetch_assoc($resul) as $pos => $val) {
    $_SESSION[$pos] = $val;
    header("location:../index.php");
  }
} else {
  header("location:../login.php");
}
