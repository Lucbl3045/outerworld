<?php
require("connect.php");
session_start();
$check = "SELECT * FROM users WHERE user_nametag = '"
. mysqli_real_escape_string($connect,htmlspecialchars($_POST['User'][0])). "'";
$res = consl($check, $connect);
if (mysqli_num_rows($res) == 0) {
  if ($_POST['role'] == "admin") {
    $Cnt = "SELECT MAX(user_adminnum) as adminn from users";
    $max = consl($Cnt, $connect);
    $fetch = mysqli_fetch_assoc($max);
    $adminnum = $fetch['adminn'];
  } else {
    $adminnum = "NULL";
  }

  $ins = "INSERT INTO users VALUES('S-" . date("Y-m-d H:i:s") . rand(0, 500) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['User'])) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['email'])) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['Password'])) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['name'])) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['surname'])) . "','"
    . mysqli_real_escape_string($connect, htmlspecialchars($_POST['role'])) . "',"
    . $adminnum . ",NULL)";
    echo($ins);
  consl($ins, $connect);
  if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == "admin") {
    header("location:../usertables.php");
  } else {
    include_once("login.php");
  }
} else {
  header("location:../Register.php");
}
?>