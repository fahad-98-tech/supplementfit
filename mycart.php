<?php
session_start();
$count = 0;
foreach ($_SESSION as $val) {
    $count++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/ticon.png" />
    <title>My Cart</title>
    <style>
        .card:hover {
            transform: scale(1.06);
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md bg-info navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand"><img src="images/logo.png" /></a>
            <div class="navbar-brand">
                <a href="mycart.php" class="nav-link" style="float: left;" title="Shopping Cart">
                    <i style="color: white;" class="fa-solid fa-cart-shopping"><span
                            class="badge badge-pill badge-danger"><?php echo $count; ?></span></i>
                </a>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynav">
                <ul class="navbar-nav m-auto text-center">
                    <li class="nav-item"><a href="index.php" class="nav-link" id="active_link">HOME</a></li>
                    <li class="nav-item"><a href="products.php" class="nav-link">PRODUCTS</a></li>
                    <li class="nav-item"><a href="aboutus.php" class="nav-link">ABOUT US</a></li>
                    <li class="nav-item"><a href="contactus.php" class="nav-link">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container text-center">
        <h2>YOUR SHOPPING CART</h2>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive-lg table-bordered table-hover">
                    <thead class="thead-dark bg-dark" style="text-align:center;color:white">
                        <tr>
                            <td>Item-Id</td>
                            <td>Name</td>
                            <td>Image</td>
                            <td>Servings</td>
                            <td>Flavor</td>
                            <td>Quantity</td>
                            <td>Unit Price</td>
                            <td>Total</td>
                            <td>Update</td>
                            <td>Remove</td>
                            <td>Checkout</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($_SESSION as $product) {
                            $p = 0;
                            $q = 0;
                            echo "<form action='editCart.php' method='POST'>";
                            echo "<tr>";
                            foreach ($product as $key => $value) {
                                if ($key == 0) {
                                    echo "<td>ID-" . $value . "</td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                } else if ($key == 1) {
                                    echo "<td>Name-" . $value . "</td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                } else if ($key == 2) {
                                    echo "<td><img src='images/" . $value . "' height='70' width='70'/></td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                } else if ($key == 3) {
                                    echo "<td>" . $value . "</td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                } else if ($key == 4) {
                                    echo "<td>" . $value . "</td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                } else if ($key == 5) {
                                    // echo "<td>" . $value . "</td>";
                                    // echo "<td><input type='number' ononinput='submitNumber();'  ></td>";
                                    echo "<td><input type='number' style='width:60px' id='numberInput' name='name$key' value='" . $value . "' class='form-control' name='numberInput' pattern='[1-9][0-9]*' required oninput='checkNumberValidity()'></td>";
                                    $q = $value;
                                } else if ($key == 6) {
                                    echo "<td>$" . $value . "</td>";
                                    echo "<input type='hidden' name='name$key' value='" . $value . "'>";
                                    $p = $value;
                                }
                            }
                            $total = (float) $p * (float) $q;
                            echo "<td>$" . $total . "</td>";
                            echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
                            echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
                            echo "<td><input type='submit' name='event' value='Checkout' class='btn btn-dark'></td>";
                            echo "</tr>";
                            echo "</form>";
                        }
                        if (empty($product)) {
                            echo "<tr><td colspan='5'>No items found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container text-center">
        <a href="products.php" type="button" class="btn btn-lg btn-outline-info">CONTINUE SHOPPING</a>
        <br>
    </div>
    <div style="height:200px">
        <br>
    </div>
    <footer class=" footer mt-auto py-3 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; <span id="currentYear"></span> Supplement Fit. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript code to get the current year -->
    <script>
        function checkNumberValidity() {
            const numberInput = document.getElementById("numberInput").value;
            if (isNaN(numberInput) || numberInput < 1) {
                document.getElementById("numberInput").value = "1";
            }
        }
        document.getElementById("currentYear").innerHTML = new Date().getFullYear();
    </script>







</body>

</html>