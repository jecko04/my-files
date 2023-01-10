<?php require 'header.php'; ?>
<style><?php include 'css/login.css'; ?></style>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <section id="login">
      <form action="backEnd/login-script.php" method="POST">
        <div class="login-form">
          <label>LOGIN</label>
            <input type="text" name="users" placeholder="Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
            <a href="backEnd/signup-form.php">Signup?</a>
        </div>
      </form>

    </section>

  </body>
</html>
