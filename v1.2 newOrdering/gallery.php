<?php require 'header.php'; ?>
<style><?php include 'css/gallery.css'; ?></style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section id="index-gallery" class="wrapper-gallery">
    <p>RoyalWings</p>
    <h2>Food Gallery</h2>
    <div class="gallery-img img1">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img2">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img3">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img4">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img5">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img6">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img7">
      <div><a href="#">VIEW</a></div>
    </div>
    <div class="gallery-img img8">
      <div><a href="#">VIEW</a></div>
    </div>
  </section>
  <?php
 $script = file_get_contents('js/gallery.js');
echo "<script>".$script."</script>";
?>
  </body>
</html>
