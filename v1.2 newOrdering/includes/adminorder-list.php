<?php require '../includes/adminpage.php'; ?>
<style><?php include '../css/adminorder-list.css'; ?></style>

<?php
require '../backEnd/server.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $delete = mysqli_query($conn, "DELETE FROM orders WHERE id='$id'");
  if ($delete) {
    echo '<center style="color: #82CD47;">Remove Success</center>';
  }
}

$select = "SELECT * from orders";
$query = mysqli_query($conn, $select);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>
    <section id="table">
      <table>
        <tr>
          <th>Order ID</th>
          <th>Name</th>
          <th>Contact</th>
          <th>Address</th>
          <th>Add Info</th>
          <th>C.Wings With Rice & Free 1 Drinks</th>
          <th>C.Wings Only</th>
          <th>C.Wings Flavor</th>
          <th>Time</th>
          <th>Remove Order</th>
        </tr>

          <?php
          $num = mysqli_num_rows($query);
          $script = file_get_contents('../js/adminorder-list.js');
          if ($num > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
              echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fullname']."</td>
                <td>".$result['contact']."</td>
                <td>".$result['address']."</td>
                <td>".$result['additional']."</td>
                <td>".$result['food1']."</td>
                <td>".$result['food2']."</td>
                <td>".$result['flavor']."</td>
                <td>".$result['orderedTime']."</td>
                <td><a href='../includes/adminorder-list.php?id=".$result['id']."' onclick='return checkdelete()' class='remove-btn'>Remove</a></td>
                </tr>";
              }
            }
            ?>
      </table>
    </section>
    </form>
    <?php
    $script = file_get_contents('../js/adminorder-list.js');
    echo "<script>".$script."</script>"
    ?>
</html>
