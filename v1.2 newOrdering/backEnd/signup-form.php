
<style><?php include '../css/signup-form.css'; ?></style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <section id="signup">
      <form action="signup-script.php" method="post">

        <div class="signup-form">
          <a href="../login.php"><img src="../icons/cancel.gif" alt="cancel"> </a>
          <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "emptyfield") {
                    echo '<p class="error">Fill in all fields</p>';
                } elseif ($_GET['error'] == "invalidemail") {
                    echo '<p class="error">Invalid Email</p>';
                } elseif ($_GET['error'] == "passwordcheck") {
                    echo '<p class="error">Your password do not match</p>';
                } elseif ($_GET['error'] == "emailtaken") {
                    echo '<p class="error">Email already taken</p>';
                }
            }
            if (isset($_GET['signup'])) {
                if ($_GET['signup'] == "success") {
                    echo '<p class="reg-success">Register successful</p>';
                }
            }

?>

          <label>REGISTER NOW</label>
          <input type="text" name="first" placeholder="Firstname">
          <input type="text" name="last" placeholder="Lastname">
          <input type="text" name="email" placeholder="E-mail">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdCheck" placeholder="Re-type Password">

          <select name="users">
            <option value="User">User</option>
            <option id="onlyAdmin" value="Admin">Admin</option>
          </select>
          <button type="submit" name="signup-submit">Signup</button>
        </div>
      </form>
    </section>
  </body>
</html>
