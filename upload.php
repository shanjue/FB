<?php
  $name = $_FILES['photo']['name'];
  $tmp = $_FILES['photo']['tmp_name'];
  $type = $_FILES['photo']['type'];
  if ($type ==  "image/jpeg" || $type == "image/gif" || $type == "image/png") {
    move_uploaded_file($tmp ,"photo/$name");
    header("location:index.php");
  }
?>
