<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header_style.css">
  <link rel="stylesheet" href="css/footer_style.css">
  <title>OuterWorld</title>

</head>
<!--
<style> 

   background-color: rgb(189, 3, 3);
  
</style>
-->

<body>
  <header id="header_main">
    <?php isset($_SESSION['user']) ? require_once("./navbars/logged_header.html") : require_once("./navbars/unlogged_header.html"); ?>
  </header>
  <div id="container">
    <?php
    if (isset($_SESSION['user'])) {
      require("./views/feed.php");
    } else {
      require("./views/whoweare.html");
    }
    ?>
    <footer id="footer_main">
      <h4 style="color:white ;">Copyright <span><a href="www.lego.com">@LucasB2</a></span></h4>
      <h4>pato</h4>
      <div class="relations"><a href="twitter.com/"></a><a href="twitter.com/"></a><a href="twitter.com/"></a></div>
    </footer>
</body>
<script src="./js/header.js"></script>

</html>