<?php

$_hostname = "localhost";
$_username = "root";
$_password = "";
$_database = "db_point_of_sales_2025";

$koneksi = mysqli_connect($_hostname, $_username, $_password, $_database);

if (!$koneksi) {
  die('koneksi gagal' . mysqli_connect_error());
}
