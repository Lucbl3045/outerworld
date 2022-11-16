<?php
require_once("connect.php");
$sql = "SELECT * FROM posts";
$calc = consl($sql, $connect);
$cantP = 6;
$cantPags = ceil(mysqli_num_rows($calc) / $cantP);
if (isset($_GET['pag'])) {
  $p = $_GET['pag'] - 1;
} else {
  $p = 0;
}
if (isset($_GET['search'])) {
  $pa = "SELECT user_nickname,user_image,user_surname, user_firstname, user_information FROM users 
    WHERE user_nickname LIKE 
    '%" . mysqli_real_escape_string($connect, htmlspecialchars($_GET['search'])) . "%'";
  $res = consl($pa, $connect);
  /*$json = arr($res);
    return $json;*/

  if (mysqli_num_rows($res) > 0) {
    foreach ($res as $row) {
      echo "<div class='product-card'>
        <div class='product-card__info'>
        <div class='product-card__image'>
        <img src='imagenes/" . strtolower($row['product_name']) . ".jpg'/>
        </div>

        <h2 class='product-card__name'>" . $row['product_name'] . "  " . $row['dosis'] . "</h2>
        <h3 class='product-card__price'>" . $row['prize'] . "</h3>
        <p class='product-card__description'>
        " . $row['desc'] . "
        </p>
        </div>
        <button class='product-card__button' onclick='addItemToCart(`" . $row['product_name'] . "`,`" . $row['dosis'] . "`," . $row['prize'] . ",parseInt(this.nextElementSibling.value),`" . $row['product_id'] . "`)'>Comprar</button><input type='number' value='1'>
        </div>";
    }
  } else {
    echo "Lo Sentimos, no hay usuarios asi";
  }
} else {
  $sql = "SELECT user_nickname,user_image,user_surname, user_firstname, user_information FROM users";
  $res = consl($sql, $connect);
  /*$json = arr($res);
    return $json;*/

  foreach ($res as $row) {
    echo "<div class='product-card'>
        <div class='product-card__info'>
        <div class='product-card__image'>
        <img src='imagenes/" . strtolower($row['product_name']) . ".jpg'/>
        </div>

        <h2 class='product-card__name'>" . $row['product_name'] . "  " . $row['dosis'] . "</h2>
        <h3 class='product-card__price'>" . $row['prize'] . "</h3>
        <p class='product-card__description'>
        " . $row['desc'] . "
        </p>
        </div>
        <input type='number' value='1' min='1' max = '" . $row['stock'] . "'>
        <button class='product-card__button' onclick='addItemToCart(`" . $row['product_name'] . "`,`" . $row['dosis'] . "`," . $row['prize'] . ",parseInt(this.previousElementSibling.value),`" . $row['product_id'] . "`)'>Comprar</button>
      </div>";
  }
  echo "</div>";
  echo "<div class='paginator'>";
  for ($i = ($p - 5); $i < ($p + 5); $i++) {
    if ($i >= 1 && $i <= $cantPags) {
      echo "<a href='products.php?pag=" . $i . "'>" . ($i) . "</a>";
    }
  }
  echo "</div>";
}
