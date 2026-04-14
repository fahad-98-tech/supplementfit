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
    <div class="container-fluid mt-1">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active bg-warning"></li>
                <li data-target="#myCarousel" data-slide-to="1" class="bg-warning"></li>
                <li data-target="#myCarousel" data-slide-to="2" class="bg-warning"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/b1.jpg" alt="Los Angeles" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/b2.jpg" alt="Chicago" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="images/b3.jpg" alt="New York" class="img-fluid">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon bg-info"
                    style="border-radius: 10px; height: 20px; width:20px"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon  bg-info"
                    style="border-radius: 10px; height: 20px; width:20px"></span>
            </a>
        </div>
    </div>
    <br><br>
    <div class="container text-center">
        <h2>TOP SELLING PRODUCTS</h2>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <?php
            include "connection/config.php";
            $query = "SELECT * from products LIMIT 4";
            $rs = mysqli_query($con, $query);
            if (mysqli_num_rows($rs) > 0) {
                while ($row = mysqli_fetch_assoc($rs)) {
                    ?>
                    <div class="col-md-3">
                        <div class="card mb-4 shadow">
                            <a href="productpage.php?p_id=<?php echo $row['p_id']; ?>"><img
                                    src="images/<?php echo $row['p_image']; ?>" class="card-img-top"
                                    alt="<?php echo $row['p_name']; ?>"></a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $row['p_name']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo $row['p_description']; ?> <br>
                                    -
                                    <?php echo $row['p_size']; ?>
                                </p>
                                <p class="card-text">Price: $
                                    <?php echo $row['p_price']; ?>
                                </p>
                                <p class="card-text">Flavor:
                                    <?php echo $row['p_flavor']; ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="button" class="btn btn-sm btn-info">Buy</button>
                                    <button id='<?php echo $row['p_id']; ?>' type="button"
                                        class="btn btn-sm btn-outline-info add-to-cart-btn">Add to
                                        Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "0 results";
            }
            mysqli_close($con);
            ?>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
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
                    window.location.href = "insertcart.php?id=" + id_emp;
                });

            })
        })
    </script>
    <br><br>
    <div class="container text-center">
        <h2>SAVE ON YOUR FAVORITE SUPPLEMENTS</h2>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="images/saveyour.PNG" class="img-fluid" />
            </div>
            <div
                style="z-index: 1; width:50%;position:absolute;background-color:#f6f6f6;padding: 50px;margin-left: 30%;margin-top:5% ;">
                <h2>BUY MORE SAVE MORE</h2>
                <p><b>15% OFF ORDERS $100 OR MORE</b></p>
                <p><b>20% OFF ORDERS $150 OR MORE</b></p>
                <p>Use Code <b>SAVEMORE</b> at checkout.</p>
                <a href="products.php" type="button" class="btn btn-lg btn-outline-info">SHOP NOW</a>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="images/billion.png" alt="your image description" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <br>
                <h4><b>Supplement Fit</b> is a website dedicated to providing high-quality supplements for individuals
                    who are
                    serious about their fitness goals. Whether you're a professional athlete or just starting out on
                    your fitness journey, we have a range of supplements that can help you reach your goals faster and
                    more efficiently.</h4>
            </div>

        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>OPTIMUM QUALITY</h2>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="images/three.png" alt="your image description" class="img-fluid mx-auto d-block">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="aboutus.php" type="button" class="btn btn-lg btn-outline-info">ABOUT US</a>
            </div>
        </div>
    </div>
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