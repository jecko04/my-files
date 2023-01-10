<style><?php include '../css/adminpage.css'; ?></style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header id="admin-header">
      <nav class="admin-nav">
        <ul id="check">
          <a href="#"><img title="profile" class="account" src="../icons/user.png" alt="account"> </a>
          <li><a class="active" href="../includes/homepage-admin.php">Home</a> </li>
          <li><a class="active" href="../includes/adminorder-list.php">Order List</a> </li>
          <li><a class="active" href="../includes/userlist.php">Users Account</a> </li>
        </ul>




      </nav>

    </header>



    <section id="admin">
      <aside class="admin-btn">
        <h2>Welcome</h2>
        <h3><i class="fa fa-user-circle" style="font-size:36px"></i> <br> (admin)</h3>

        <form action="../includes/logout.php" method="POST">
          <button id="logStatus" type="submit" name="logout-submit">Logout</button>
        </form>
      </aside>

    </section>

  </body>
  <?php
 $script = file_get_contents('../js/adminpage.js');
 echo "<script>".$script."</script>";
  ?>
</html>
