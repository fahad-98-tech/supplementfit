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
    <title>Supplement Fit</title>
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
        <h2>ORDER CONFIRMATION</h2>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $id = $_GET['pid'];
            $name = $_GET['nam'];
            $image = $_GET['img'];
            $size = $_GET["siz"];
            $flavor = $_GET["fla"];
            $quantity = $_GET["qua"];
            $price = $_GET['pri'];
            $total = (float) $price * (float) $quantity;
            ?>

            <div class="col-md-4">
                <div class="card mb-4 shadow">
                    <a href="#"><img src="images/<?php echo $image; ?>" class="card-img-top"
                            alt="<?php echo $name; ?>"></a>

                </div>
            </div>
            <div class="col-md-8">
                <form method="POST" action="order_complete.php">

                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $name; ?>
                            <input type="hidden" name="pid" value="<?php echo $id; ?>">
                            <input type="hidden" name="image" value="<?php echo $image; ?>">

                            <input type="hidden" name="name" value="<?php echo $name; ?>">
                        </h5>
                        <p class="card-text">Price: $
                            <b>
                                <?php echo $price; ?>
                                <input type="hidden" name="price" value="<?php echo $price; ?>">
                            </b>
                        </p>
                        <p class="card-text">Flavor:
                            <b>
                                <?php echo $flavor; ?>
                                <input type="hidden" name="flavor" value="<?php echo $flavor; ?>">
                            </b>
                        </p>
                        <p class="card-text">Size:
                            <b>
                                <?php echo $size; ?>
                                <input type="hidden" name="size" value="<?php echo $size; ?>">
                            </b>
                        </p>
                        <p class="card-text">Quantity:
                            <b>
                                <?php echo $quantity; ?>
                                <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
                            </b>
                        </p>
                        <hr>
                        <p class="card-text">Total:
                            <b>
                                <?php echo $total; ?>
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </b>
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="custname" class="form-control" placeholder="Customer name"
                                    required>
                                <br>
                                <input type="text" name="address" class="form-control" placeholder="Complete Address"
                                    required>
                                <br>

                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Contact Number"
                                    required>
                                <br>
                                <input type="email" name="email" class="form-control" placeholder="E-mail Address"
                                    required>
                            </div>

                        </div>
                        <input type='submit' value='Place Order' class='btn btn-info btn-lg'>
                        <input type='reset' value='Cancel' class='btn btn-danger btn-lg'>

                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <a href="products.php" type="button" class="btn btn-secondary" data-dismiss="modal">Continue
                        Shopping</a>
                    <a href="mycart.php" type="button" class="btn btn-primary">My Cart</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.navbar-toggler').click(function () {
                $('.sidebar').toggleClass('active');
            })
            $('.add-to-cart-btn').click(function () {
                event.preventDefault(); // prevent the default behavior of the link

                id_emp = $(this).attr('id')
                $.ajax({
                    url: "ajaxfile.php",
                    method: 'post',
                    data: {
                        emp_id: id_emp
                    },
                    success: function (result) {
                        $(".modal-body").html(result);
                    }
                });

                $('#myModal').modal("show");
                $('#myModal').on('hidden.bs.modal', function () {
                    window.location.href = "insertcart.php?id=" + id_emp + "&id2=productpage";
                });

            })
        })
    </script>
    <br><br>

    <br><br><br><br>

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
        document.getElementById("currentYear").innerHTML = new Date().getFullYear();
    </script>


</body>

</html>