<?php require '../includes/userpage.php'; ?>
<style><?php include '../css/order-list.css'; ?></style>


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
          <th>Fullname</th>
          <th>Chicken Wings With Rice and 1 Free Drinks</th>
          <th>Only Chicken Wings</th>
          <th>Chicken Wings Flavor</th>
          <th>Time</th>
        </tr>


          <?php

          require '../backEnd/server.php';


          $select="SELECT * from orders";
          $query=mysqli_query($conn, $select);

          $num = mysqli_num_rows($query);
          if ($num > 0) {
            while ($result = mysqli_fetch_assoc($query)) {
              echo "<tr>
                  <td>".$result["id"]."</td>
                  <td>".$result["fullname"]."</td>
                  <td>".$result["food1"]."</td>
                  <td>".$result["food2"]."</td>
                  <td>".$result["flavor"]."</td>
                  <td>".$result["orderedTime"]."</td>
                </tr>";
              }
            }

            ?>

      </table>
    </section>

</html>
