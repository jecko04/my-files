<?php require '../includes/userpage.php'; ?>
<style><?php include '../css/order-form.css'; ?></style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body>
    <section id="orderform">
      <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "fillinfo") {
                echo '<p class="error">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "FillFoodOrder") {
                echo '<p class="error">Fill atleast 1 foodlist!</p>';
            }
            else if ($_GET['error'] == "flavorrequired") {
                echo '<p class="error">Flavor Required!</p>';
            }
        }
        if (isset($_GET['order'])) {
            if ($_GET['order'] == "success") {
                echo '<p class="order-success">Order successful!</p>';
            } else if ($_GET['order'] == "error") {
                echo '<p class="order-error">Order error</p>';
            }
        }

?>
      <form id="form_submit" class="form" action="../backEnd/orderform-script.php" method="post">

        <p>Royal Wings</p>
        <h2>Order Now</h2>
        <div class="add-info">
          <input type="text" name="fullname" placeholder="Fullname">
          <input type="text" name="contact" placeholder="Contact#">
          <input type="text" name="address" placeholder="Address">
          <input type="text" name="additional" placeholder="Add info Food/Address">
        </div>
        <div class="sel order-1">
          <div class="label">
            <img src="../img/orderfood/food1.jpg" alt="food">
            <label>Chicken Wings With Rice and 1 Free Drinks</label>
          </div>

          <select name="chicken">
            <option value="none">None</option>
            <option value="2pc Chicken Wings with Rice">2pc Chicken Wings with Rice &#8369; 59</option>
            <option value="3pc Chicken Wings with Rice">3pc Chicken Wings with Rice &#8369; 89</option>
            <option value="4pc Chicken Wings with Rice">4pc Chicken Wings with Rice &#8369; 109</option>
            <option value="6pc Chicken Wings with Rice">6pc Chicken Wings with Rice &#8369; 139</option>
            <option value="8pc Chicken Wings with Rice">8pc Chicken Wings with Rice &#8369; 159</option>
          </select>

        </div>
        <div class="sel order-2">
          <div class="label">
            <img src="../img/orderfood/food2.jpg" alt="food">
            <label>Only Chicken Wings</label>
          </div>

          <select name="solo-chicken">
            <option value="none">None</option>
            <option value="4pc Chicken">4pc Chicken &#8369; 99</option>
            <option value="6pc Chicken">6pc Chicken &#8369; 129</option>
            <option value="8pc Chicken">8pc Chicken &#8369; 149</option>
          </select>

        </div>
        <div class="sel flavor">
          <div class="label">
            <label>Chicken Wings Flavor</label>
          </div>

          <select name="flavor">
            <option value="none">None</option>
            <option value="Original">Original</option>
            <option value="Teriyaki">Teriyaki</option>
            <option value="Korean">Korean</option>
            <option value="Buffalo">Buffalo</option>
            <option value="Sambal">Sambal</option>
            <option value="Mango Habanero">Mango Habanero</option>
            <option value="Cheesy Cheese">Cheesy Cheese</option>
            <option value="Sweet Chili">Sweet Chili</option>
            <option value="Garlic Parmesan">Garlic Parmesan</option>
            <option value="Salted Egg">Salted Egg</option>
          </select>

        </div>


          <button id="submitBtn" class="btn" type="submit" name="order-submit" onclick="return checkdelete()">Submit</button>


      </form>
      <div class="waiting-process">
        <h4>After Submit wait for call confirmation and ready for your payment</h4>
        <h5>if you have question please contact us below</h5>
      </div>
      <div class="info-us">
        <h5>Contact# : 09-- --- ---- &nbsp; Address : Urban Payatas Quezon City  </h5>
      </div>
      <div class="contact-links">
        <a href="#"><i class="fa fa-facebook-square" style="font-size:24px"></i></a>
        <a href="#"><i class="fa fa-instagram" style="font-size:24px"></i></a>
        <a href="#"><i class="fa fa-twitter-square" style="font-size:24px"></i></a>
        <a href="#"><i class="fa fa-youtube-square" style="font-size:24px"></i></a>
      </div>

    </section>

  </body>
  <?php
  $script = file_get_contents('../js/order-form.js');
  echo "<script>".$script."</script>";
  ?>
</html>
