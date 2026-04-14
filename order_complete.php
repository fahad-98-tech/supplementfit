<?php
// include "connection/config.php";
// session_start();
// $id = $_POST['pid'];
// $name = $_POST['name'];
// $image = $_POST['image'];
// $size = $_POST["size"];
// $flavor = $_POST["flavor"];
// $quantity = $_POST["quantity"];
// $price = $_POST['price'];
// $total = $_POST['total'];
// $custname = $_POST['custname'];
// $phone = $_POST['phone'];
// $address = $_POST['address'];
// $email = $_POST['email'];
// $pid = mt_rand(1, 1000);

// $product = array($id, $name, $image, $size, $flavor, $quantity, $price);

// unset($_SESSION[$name]);

// $sql1 = "INSERT INTO orders(order_id,p_name,image,size,flavor,quantity,price,total,custname,phone,address,email) 
// VALUES('{$pid}','{$name}','{$image}','{$size}','{$flavor}','{$quantity}','{$price}','{$total}','{$custname}','{$phone}','{$address}','{$email}')";

// if (mysqli_query($con, $sql1)) {
//     unset($_SESSION[$name]); // Remove the item from the $_SESSION array

//     header("Location:ordersuccess.php?o_id=$pid");
// }

include "connection/config.php";
session_start();
$id = $_POST['pid'];
$name = $_POST['name'];
$image = $_POST['image'];
$size = $_POST["size"];
$flavor = $_POST["flavor"];
$quantity = $_POST["quantity"];
$price = $_POST['price'];
$total = $_POST['total'];
$custname = $_POST['custname'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$pid = mt_rand(1, 100000);
$sql1 = "INSERT INTO orders(order_id,p_name,image,size,flavor,quantity,price,total,custname,phone,address,email) 
VALUES('{$pid}','{$name}','{$image}','{$size}','{$flavor}','{$quantity}','{$price}','{$total}','{$custname}','{$phone}','{$address}','{$email}')";

if (mysqli_query($con, $sql1)) {
    foreach ($_SESSION as $key => $product) {
        if ($product[0] == $id) {
            unset($_SESSION[$key]);
            break;
        }
    }
    header("Location:ordersuccess.php?o_id=$pid&total=$total");
}