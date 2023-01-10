<?php require '../includes/adminpage.php'; ?>
<style><?php include '../css/userlist.css'; ?></style>

<?php
require '../backEnd/server.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($conn, "DELETE FROM users WHERE id='$id'");

  if ($delete) {
    echo '<center style="color: #82CD47;">Remove Success</center>';
  }
}

$select = "SELECT * from users";
$query = mysqli_query($conn, $select);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
  if (isset($_GET['remove'])) {
    if ($_GET['remove'] == 'success') {
      echo "<p class='remove'>Remove Successful</p>";
    }
  }

?>

    <section id="table">
      <table>
        <tr>
          <th>User ID</th>
          <th>Firstname</th>
          <th>Lastname</th>
          <th>Email</th>
          <th>User Type</th>
          <th>Action</th>
        </tr>


          <?php
          $num = mysqli_num_rows($query);
          if ($num > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
              echo "<tr>
                  <td>".$result['id']."</td>
                  <td>".$result['user_first']."</td>
                  <td>".$result['user_last']."</td>
                  <td>".$result['user_email']."</td>
                  <td>".$result['user_type']."</td>
                  <td>
                  <a href='../backEnd/update-user.php?id=".$result['id']."' class='update-btn'>UPDATE</a>
                  <a href='../includes/userlist.php?id=".$result['id']."' onclick='return checkdelete()'  class='remove-btn'>REMOVE</a>
                  </td>
                </tr>";
              }
            }

            ?>

      </table>
    </section>

    </form>
    <?php
    $script = file_get_contents('../js/userlist.js');
    echo "<script>".$script."</script>";
    ?>
</html>
