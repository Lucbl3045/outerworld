<?php
define("USER", "root");
define("PASSWORD", "");
define("SERVER", "localhost");
define("BD", "outerworld");

$connect = mysqli_connect(SERVER, USER, PASSWORD, BD);

if (mysqli_connect_errno()) {
  die("Ha Sucedido un error" . mysqli_connect_errno());
}

function arr($res)
{
  while ($a = mysqli_fetch_assoc($res)) {
    $arr[] = $a;
  }
  return json_encode($arr);
}
function consl($req, $con)
{
  $res = mysqli_query($con, $req);
  if (!$res) {
    die(mysqli_error($con));
  } else {
    return $res;
  }
}
