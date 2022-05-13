<!DOCTYPE html>
<html lang="En">
<?php include './admin/includes/config.php' ?>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>News</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
</head>

<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial:partials/_navbar.html -->
            <header id="header">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <div class="navbar-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a class="navbar-brand" href="#"><img src="assets/images/logo.svg" alt="" /></a>
                                </div>
                                <div>
                                    <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                </div>
                                <ul class="social-media">
                                    <li>
                                        <a href="https://www.facebook.com/merankamal.kamal">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>

            <div class="content-wrapper">
                <div class="container">
                    <div class="row" data-aos="fade-up">
                        <?php
                        $query = mysqli_query($db, "SELECT * FROM newss ORDER BY id DESC LIMIT 1");
                        while ($row = mysqli_fetch_assoc($query)) {

                        ?>

                            <div class="col-xl-8 stretch-card grid-margin">
                                <div class="position-relative">
                                    <a href="./admin/includes/discription.php?id=<?php echo $row['id'] ?>">

                                        <img src="./admin/uplod/<?php echo $row['img']; ?>" alt="banner" class="img-fluid" />
                                        <div class="banner-content">
                                            <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                                last news
                                            </div>
                                            <h1 class="mb-0 text-dark"><?php echo $row['title'] ?></h1>
                                          
                                            <div class="fs-12 text-dark">
                                                <span class="mr-2">Photo </span><?php echo $row["time"]; ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <?php } ?>


                            <div class="col-xl-4 stretch-card grid-margin">
                                <div class="card bg-dark text-white">

                                    <h2>Latest news</h2>

                                    <?php
                                    $query = mysqli_query($db, "SELECT * FROM newss ORDER BY id DESC LIMIT 3");
                                    while ($row = mysqli_fetch_assoc($query)) {

                                    ?>
                                        <div class="card-body">
                                            <a href="./admin/includes/discription.php?id=<?php echo $row['id'] ?>">
                                                <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                                                    <div class="pr-3">
                                                        <h5><?php echo $row['title'] ?></h5>
                                                        <div class="fs-12">
                                                            <span class="mr-2">Photo </span><?php echo $row["time"]; ?>
                                                        </div>
                                                    </div>
                                                    <div class="rotate-img">
                                                        <img src="./admin/uplod/<?php echo $row['img']; ?>" alt="thumb" class="img-fluid img-lg" />
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php } ?>




                                </div>




                            </div>
                    </div>

                    <div class="row" data-aos="fade-up">


                        <div class="col-lg-3 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h2>Category</h2>
                                    <ul class="vertical-menu">
                                        <li><a href="index.php?id=1">sport</a></li>
                                        <li><a href="index.php?id=2">tecnology</a></li>
                                        <li><a href="index.php?id=4">jobs</a></li>
                                        <li><a href="index.php?id=3">Health care</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    $id = $_GET['id'];
                                    $query = mysqli_query($db, "SELECT * FROM newss WHERE category='$id' ORDER BY id DESC");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                        <div class="row">
                                            <div class="col-sm-4 grid-margin">
                                                <div class="position-relative">
                                                    <div class="rotate-img">
                                                        <img src="./admin/uplod/<?php echo $row['img']; ?>" alt="thumb" class="img-fluid" />
                                                    </div>
                                                    <div class="badge-positioned">
                                                        <span class="badge badge-danger font-weight-bold"><?php echo $row['time']; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8  grid-margin">
                                                <h2 class="mb-2 font-weight-600">
                                                    <?php echo $row['title']; ?>
                                                </h2>
                                                <div class="fs-13 mb-2">
                                                    <span class="mr-2">Photo </span>10 Minutes ago
                                                </div>
                                                <p class="mb-0">
                                                    <?php echo $row['dsc'] ?>
                                                </p>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>





                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card-title">
                                                Sport light
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-8 col-sm-6">
                                                    <div class="rotate-img">
                                                        <img src="assets/images/dashboard/home_16.jpg" alt="thumb" class="img-fluid" />
                                                    </div>
                                                    <h2 class="mt-3 text-primary mb-2">
                                                        Newsrooms exercise..
                                                    </h2>
                                                    <p class="fs-13 mb-1 text-muted">
                                                        <span class="mr-2">Photo </span>10 Minutes ago
                                                    </p>
                                                    <p class="my-3 fs-15">
                                                        Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 1500s, when an unknown printer
                                                        took
                                                    </p>
                                                    <a href="#" class="font-weight-600 fs-16 text-dark">Read more</a>
                                                </div>
                                                <div class="col-xl-6 col-lg-4 col-sm-6">
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Social distancing is ..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Panic buying is forcing..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div class="border-bottom pb-3 mb-3">
                                                        <h3 class="font-weight-600 mb-0">
                                                            Businesses ask hundreds..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                    <div>
                                                        <h3 class="font-weight-600 mb-0">
                                                            Tesla's California factory..
                                                        </h3>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                        <p class="mb-0">
                                                            Lorem Ipsum has been the industry's
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Sport light
                                                    </div>
                                                    <div class="border-bottom pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_17.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                    <div class="pt-3 pb-3">
                                                        <div class="rotate-img">
                                                            <img src="assets/images/dashboard/home_18.jpg" alt="thumb" class="img-fluid" />
                                                        </div>
                                                        <p class="fs-16 font-weight-600 mb-0 mt-3">
                                                            Kaine: Trump Jr. may have
                                                        </p>
                                                        <p class="fs-13 text-muted mb-0">
                                                            <span class="mr-2">Photo </span>10 Minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="card-title">
                                                        Celebrity news
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_19.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_20.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="border-bottom pb-3 pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_21.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="pt-3">
                                                                <div class="row">
                                                                    <div class="col-sm-5 pr-2">
                                                                        <div class="rotate-img">
                                                                            <img src="assets/images/dashboard/home_22.jpg" alt="thumb" class="img-fluid w-100" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-7 pl-2">
                                                                        <p class="fs-16 font-weight-600 mb-0">
                                                                            Online shopping ..
                                                                        </p>
                                                                        <p class="fs-13 text-muted mb-0">
                                                                            <span class="mr-2">Photo </span>10
                                                                            Minutes ago
                                                                        </p>
                                                                        <p class="mb-0 fs-13">
                                                                            Lorem Ipsum has been
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
            <!-- container-scroller ends -->

            <!-- partial:partials/_footer.html -->
            <footer>
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="assets/images/logo.svg" class="footer-logo" alt="" />
                                <h5 class="font-weight-normal mt-4 mb-5">
                                    Newspaper is your news, entertainment, music fashion website. We
                                    provide you with the latest breaking news and videos straight from
                                    the entertainment industry.
                                </h5>
                                <ul class="social-media mb-3">
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="mdi mdi-twitter"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Cotton import from USA to soar was American traders
                                                        predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="footer-border-bottom pb-2 pt-2">
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_2.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600">
                                                        Cotton import from USA to soar was American traders
                                                        predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <img src="assets/images/dashboard/home_3.jpg" alt="thumb" class="img-fluid" />
                                                </div>
                                                <div class="col-9">
                                                    <h5 class="font-weight-600 mb-3">
                                                        Cotton import from USA to soar was American traders
                                                        predict
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                                <div class="footer-border-bottom pb-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Magazine</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Business</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Sports</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="footer-border-bottom pb-2 pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Arts</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0 font-weight-600">Politics</h5>
                                        <div class="count">1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </footer>

            <!-- partial -->
        </div>
    </div>
    <!-- inject:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./assets/js/demo.js"></script>
    <script src="./assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
</body>

</html>