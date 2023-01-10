<style><?php include '../css/update-user.css'; ?></style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section id="update">
      <form action="" method="post">

        <div class="update-form">
          <a href="../includes/userlist.php"><img src="../icons/cancel.gif" alt="cancel"> </a>

<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfield") {
        echo '<p class="error">Fill in all fields</p>';
} else if ($_GET['error'] == "passwordcheck") {
    echo '<p class="error">Password do not matched</p>';
} else if ($_GET['error'] == "idrequired") {
    echo '<p class="error">Id Required!</p>';
} else if ($_GET['error'] == "Failed") {
    echo '<p class="update-success">Update unsuccessful</p>';
}
}
if (isset($_GET['update'])) {
    if ($_GET['update'] == "success") {
        echo '<p class="update-success">Update successful</p>';
    }

}
?>

          <label>UPDATE YOUR DATA</label>
          <input type="text" name="id" placeholder="Account Id">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdCheck" placeholder="Re-type Password">

          <button type="submit" name="update-submit">Update</button>
        </div>
      </form>
    </section>
  </body>


</html>

<?php
  require 'server.php';

  if (isset($_POST['update-submit'])) {
    $id = $_POST['id'];

    $updatePwd = $_POST['pwd'];
    $updateCheckPwd = $_POST['pwdCheck'];

    if (empty($updatePwd) || empty($updateCheckPwd)) {
      header("location: ../backEnd/update-user.php?error=emptyfield");
      exit();
    }
    else if (empty($id)) {
      header("location: ../backEnd/update-user.php?error=idrequired");
      exit();
    }
    elseif ($updatePwd !== $updateCheckPwd) {
        header("location: ../backEnd/update-user.php?error=passwordcheck");
        exit();
      }
    else{
      if ($updatePwd === $updateCheckPwd) {

        $new_password = password_hash($updatePwd, PASSWORD_DEFAULT);
        $query = "UPDATE users SET user_pwd = '$new_password' WHERE id=$id";
        $run = mysqli_query($conn, $query);

        if ($run) {
          header("location: ../backEnd/update-user.php?update=success");
          exit();
        }


      }
    }

  }


?>
