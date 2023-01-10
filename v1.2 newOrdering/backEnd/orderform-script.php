<?php

if (isset($_POST['order-submit'])) {

  require 'server.php';

  $fullname = $_POST['fullname'];
  $cont = $_POST['contact'];
  $addr = $_POST['address'];
  $additional = $_POST['additional'];
  $food1 = $_POST['chicken'];
  $food2 = $_POST['solo-chicken'];
  $flavor = $_POST['flavor'];

  if (empty($fullname) || empty($cont) || empty($addr) || empty($additional)) {
    header("location: ../orderform/order-form.php?error=fillinfo");
    exit();
  }
  else if ($food1 === 'none' && $food2 === 'none'){
    header("location: ../orderform/order-form.php?error=FillFoodOrder");
    exit();
  }
  else if ($flavor === 'none') {
    header("location: ../orderform/order-form.php?error=flavorrequired");
    exit();
  }
  else {
    $sql = "INSERT into orders (fullname, contact, address, food1, food2, flavor, additional, orderedTime) VALUES ('$fullname', '$cont' , '$addr', '$food1', '$food2', '$flavor', '$additional', NOW())";

    $run = mysqli_query($conn, $sql) or die (mysqli_query());

    if ($run) {

      header("location: ../orderform/order-form.php?order=success");
      exit();
    }
    else {
      header("location: ../orderform/order-form.php?order=error");
      exit();
    }
  }
}
