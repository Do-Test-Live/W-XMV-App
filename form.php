<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/favicon.png">
    <title>X Moment World</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php
$result = 2;
include ("config/dbconfig.php");
if (isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $query = $con->query("INSERT INTO `contact`(`name`, `email`, `contact_no`) VALUES ('$name','$email','$number')");
    if($query){
        $result = 1;
    }else{
        $result = 0;
    }
}
?>

<!-- fakeloader -->
<div class="fakeLoader"></div>
<!-- end fakeloader -->

<!-- navbar -->
<div class="navbar">
    <div class="left">
        <a href="#" class="link link-back"><i class="icon ion-ios-arrow-back"></i></a>
    </div>
    <div class="title">
        Register
    </div>
    <div class="right">

    </div>
</div>
<!-- end navbar -->

<!-- pages wrapper -->
<div class="pages-wrapper">

    <!-- separator -->
    <div class="separator-large"></div>
    <!-- end separator -->
<?php
if($result == 1){
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Thank You </strong> Your data is successfully submitted to us!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}elseif ($result == 0){
    ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry! </strong> Something went wrong. Please try again later.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
}
    ?>

    <!-- intro app -->
    <div class="intro-app">
        <div class="container">
            <div class="intro-content">
                <div class="mask"></div>
                <img src="img/intro-bg.jpg" alt="image-demo">
                <div class="caption">
                    <h4 class="text-white mb-1">Welcome to X Moment World</h4>
                    <p class="text-white">The Lion Zone</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end intro app -->

    <!-- separator -->
    <div class="separator-large"></div>
    <!-- end separator -->

    <!-- sign up -->
    <div class="sign-up">
        <div class="container">
            <form class="form-fill" action="" method="post">
                <div class="form-wrapper">
                    <div class="input-wrap">
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="input-wrap">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-wrap">
                        <input type="text" name="number" placeholder="Contact Number">
                    </div>
                </div>
                <div class="button-default">
                    <button class="button" name="submit">Submit</button>
                </div>
            </form>

            <!-- separator -->
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <div class="separator-medium"></div>
            <!-- end separator -->
        </div>
        <!-- separator -->
        <div class="separator-small"></div>
        <!-- end separator -->

        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="content-box shadow-sm">
                    <h4 class="mb-1">Join Us!</h4>

                    <!-- separator -->
                    <div class="separator-small"></div>
                    <!-- end separator -->

                    <div class="social-media-icon">
                        <ul>
                            <li><a href="https://www.facebook.com/XMomentWorld" target="_blank"><img src="img/facebook.png" style="height: 40px; width: 40px;"/></a></li>
                            <li><a href="https://t.me/XmomentTech" target="_blank"><img src="img/telegram.png" style="height: 40px; width: 40px;"/></a></li>
                        </ul>
                    </div>

                    <!-- separator -->
                    <div class="separator-small"></div>
                    <!-- end separator -->


                </div>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- end sign up -->


    <!-- toolbar bottom -->
    <div class="toolbar">
        <div class="container">
            <ul class="toolbar-bottom toolbar-wrap">
                <li class="toolbar-item">
                    <a href="index.html" class="toolbar-link">
                        <img src="img/home-1.png" style="height: 22px;">
                    </a>
                </li>
                <li class="toolbar-item">
                    <a href="land.html" class="toolbar-link">
                        <img src="img/map-1.png" style="height: 22px;">
                    </a>
                </li>
                <li class="toolbar-item">
                    <a href="marketplace.html" class="toolbar-link">
                        <img src="img/market-1.png" style="height: 22px;">
                    </a>
                </li>
                <li class="toolbar-item">
                    <a href="profile.html" class="toolbar-link toolbar-link-active">
                        <img src="img/profile-1.png" style="height: 22px;">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- end toolbar bottom -->

</div>
<!-- end pages wrapper -->

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/fakeLoader.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/main.js"></script>

</body>


</html>