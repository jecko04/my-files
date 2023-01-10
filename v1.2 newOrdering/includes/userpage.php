<style><?php include '../css/userpage.css'; ?></style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header id="user-header">
      <nav class="user-nav">
        <ul id="check">
          <a href="#"><img title="profile" class="account" src="../icons/user.png" alt="account"> </a>
          <li><a class="active" href="../includes/homepage-user.php">home</a> </li>
          <li><a class="active" href="../orderform/order-form.php">order form</a> </li>
          <li><a class="active" href="../includes/orderlist.php">All Orders<i class="fa fa-shopping-cart" style="font-size:20px"></i></a> </li>

        </ul>

      </nav>

    </header>

    <section id="user">
      <aside class="user-btn">
        <h2>Welcome</h2>
        <h3><i class="fa fa-user-circle" style="font-size:36px"></i> <br> (user)</h3>

        <form action="../includes/logout.php" method="POST">
          <button id="logStatus" type="submit" name="logout-submit">Logout</button>
        </form>
      </aside>

    </section>

  </body>
  <?php
 $script = file_get_contents('../js/userpage.js');
echo "<script>".$script."</script>";
?>
</html>
