<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>royalwings-webpage</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>


    <header id="header-main">

      <nav class="navBar">
        <div class="logo">
          <a href="#"><img src="img/logo/logo1.1.png" alt="rw-logo"></a>
          <h2>Royal<i class="fa fa-anchor"></i>Wings</h2>
        </div>

          <ul id="check">
            <li><a class="active" href="index.php">Home</a> </li>
            <li><a class="active" href="gallery.php">Gallery</a> </li>
            <li><a class="active" href="menu.php">Menu</a> </li>
            <li><a class="active" href="login.php">Login</a> </li>

          </ul>

          <a href="#"><img class="menu" onclick="toggleNav()" src="icons/menu-bar.png" alt="menu"> </a>
      </nav>


    </header>

    <?php
   $script = file_get_contents('js/header.js');
    echo "<script>".$script."</script>";
    ?>
  </body>

</html>
