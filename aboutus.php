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
    <title>About - Supplement Fit</title>
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
                    <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="products.php" class="nav-link">PRODUCTS</a></li>
                    <li class="nav-item"><a href="aboutus.php" class="nav-link" id="active_link">ABOUT US</a></li>
                    <li class="nav-item"><a href="contactus.php" class="nav-link">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container text-center">
        <h2>ABOUT SUPPLEMENT FIT</h2>
        <br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="text-align:justify;line-height:2">
                <p>Welcome to Supplement Fit, your ultimate destination for high-quality gym supplements that can help
                    you achieve your fitness goals.

                    At Supplement Fit, we understand that when it comes to achieving a fit and healthy body, there's no
                    substitute for hard work and dedication. But we also know that the right supplements can make a
                    world of difference in terms of getting the most out of your workouts, and helping you reach your
                    fitness goals faster.

                    That's why we've made it our mission to provide you with the best selection of gym supplements on
                    the market. From protein powders and pre-workout formulas to vitamins and minerals, we've got
                    everything you need to fuel your workouts and recover faster.

                    But we're not just about selling products. We're also dedicated to providing you with the
                    information you need to make informed decisions about your fitness and supplement regimen. Our blog
                    is filled with helpful tips and advice from experienced fitness professionals, so you can stay
                    up-to-date on the latest trends and techniques.

                    At Supplement Fit, we're committed to providing you with the highest level of customer service. We
                    offer fast shipping, easy returns, and a satisfaction guarantee on all of our products. And if you
                    ever have any questions or concerns, our friendly and knowledgeable customer support team is always
                    here to help.

                    So whether you're a seasoned athlete or just getting started on your fitness journey, Supplement Fit
                    is your one-stop-shop for all your supplement needs. Shop with us today and experience the
                    difference for yourself!</p>
            </div>
            <div class="col-md-1"></div>

        </div>

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
    document.getElementById("currentYear").innerHTML = new Date().getFullYear();
    </script>


</body>

</html>