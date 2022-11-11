<?php 
session_start();
$_SESSION['user'] = "pato";
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
  <?php 
  if(isset($_SESSION['user']))
  { require_once("./navbars/logged_header.php");}
  else{ require("./navbars/unlogged_header.html");};?>
  </header>
  <div id="container">
    <section class="enter_logo">
      <div class="elements_logo">
        <div class="title_logo">
          <h1 style="font-size:4rem;background: -webkit-linear-gradient(#eee, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;">Welcome To
            Outer Worlds!</h1>
        </div>
        <div class="text_logo">
          <p style="font-size: 30px;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quam officiis
            fugit. Molestias et,
            impedit nostrum optio quasi error architecto aut enim doloremque, libero officiis. Consectetur blanditiis
            officiis doloribus expedita.</p>
        </div>
      </div>
    </section>
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam accusamus cumque eos, illum est quidem dolor
      aliquam sed nostrum eligendi? Totam quis corporis possimus a, deserunt commodi minima doloribus repellat placeat!
      Debitis, dolore maiores quasi, ut aliquid consequatur quos unde natus dicta tenetur qui odit sint modi aliquam
      mollitia quisquam dignissimos aspernatur sit possimus. Ab accusantium temporibus corrupti eos officia molestias
      deleniti blanditiis laboriosam vel eaque laborum ex obcaecati alias sapiente neque dicta, perferendis saepe
      perspiciatis laudantium aperiam, voluptatem quibusdam, mollitia tenetur! Maiores autem quod aliquid quibusdam
      omnis ab? Omnis vel voluptatem a dicta tempora fugit impedit esse possimus aspernatur nisi quasi voluptas suscipit
      quisquam at laboriosam consectetur corporis labore deleniti facere, neque nobis provident consequatur? Quis
      nostrum, veniam consequuntur, modi quasi doloribus deleniti in esse a labore, laboriosam quibusdam. Nemo
      architecto adipisci animi dicta voluptates totam distinctio nam delectus id? Sed dolorem doloribus deleniti
      voluptates amet mollitia totam asperiores, eligendi non nesciunt sint reprehenderit dicta voluptatem libero,
      suscipit rerum quisquam ipsa atque ea cum.</h1>
  </div>

  <footer id="footer_main">
    <h4 style="color:white ;">Copyright <span><a href="www.lego.com">@LucasB2</a></span></h4>
    <h4>pato</h4>
  <div class="relations"><a href="twitter.com/" ></a><a href="twitter.com/" ></a><a href="twitter.com/" ></a></div>
  </footer>
</body>
<script src="./js/header.js"></script>

</html>