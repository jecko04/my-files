<?php require 'header.php'; ?>
<style><?php include 'css/menu.css'; ?></style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section>

      <menu id="food-menu">
          <div class="menu-img menu1">
            <div><a href="#">VIEW</a></div>
          </div>
          <div class="menu-img menu2">
            <div><a href="#">VIEW</a></div>
          </div>
          <div class="flavor-btn">
            <h3>Chicken Wings Flavor List &nbsp;
              <a href="#" onclick="foodTogBtn()" ><img src="icons/down.gif" alt="dropdown"> </a>
            </h3>

          </div>
          <div class="flavor-list">
            <ul>
              <li class="l">Original</li>
              <li class="l">Teriyaki</li>
              <li class="l">Korean</li>
              <li class="l">Buffalo</li>
              <li class="l">Sambal</li>
              <li class="l">Mango Habanero</li>
              <li class="l">Cheesy Cheese</li>
              <li class="l">Sweet Chili</li>
              <li class="l">Garlic Parmesan</li>
              <li class="l">Salted Egg</li>
            </ul>
          </div>
      </menu>

    </section>
    <?php
   $script = file_get_contents('js/menu.js');
echo "<script>".$script."</script>";
?>
  </body>
</html>
