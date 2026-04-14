<?php
session_start();
$id = $_POST['name0'];
$name = $_POST['name1'];
$image = $_POST['name2'];
$size = $_POST["name3"];
$flavor = $_POST["name4"];
$quantity = $_POST["name5"];
$price = $_POST['name6'];
$event = $_POST['event'];

$product = array($id, $name, $image, $size, $flavor, $quantity, $price);
if ($event == "Update") {
    $_SESSION[$name] = $product;
    header('location:mycart.php');
} else if ($event == "Delete") {
    unset($_SESSION[$name]);
    header('location:mycart.php');
} else if ($event == "Checkout") {
    header("location:buy.php?pid=$id&nam=$name&img=$image&siz=$size&fla=$flavor&qua=$quantity&pri=$price");
}
?>