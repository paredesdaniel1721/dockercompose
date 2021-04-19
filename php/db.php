<?php
session_start();

$conn = mysqli_connect(
  'mysql8:3306',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
