<?php
session_start();
include "connection/config.php";
$id = $_GET["id"];
$id2 = $_GET["id2"];
$getitem = "select * from products where p_id='$id'";
$result = mysqli_query($con, $getitem);
$row = mysqli_fetch_array($result);
$id = $row['p_id'];
$name = $row['p_name'];
$image = $row['p_image'];
$size = $row["p_size"];
$flavor = $row["p_flavor"];
$quantity = 1;
$price = $row['p_price'];
$product = array($id, $name, $image, $size, $flavor, $quantity, $price);
$_SESSION[$name] = $product;

if (isset($id2)) {

    header('location:products.php');
} else {

    header('location:index.php');
}