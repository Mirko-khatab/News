<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../Css/dashbordstyle.css">
    <title>details</title>
</head>

<body style="background-color:#DFDFDE">
    <?php include "./config.php";


    ?>
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">

                <div class="navbar-bottom">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <a class="navbar-brand" href="#"><img src="../../assets/images/logo.svg" alt="" /></a>
                        </div>
                        <div>
                            <button class="navbar-toggler" type="button" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="row" data-aos="fade-up">


        <div class="col-lg-3 stretch-card grid-margin">

            <div class="card">
                <div class="card-body">
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM news ORDER BY id DESC LIMIT 3");
                    while ($row = mysqli_fetch_assoc($query)) {

                    ?>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="../uplod/<?php echo $row['img'] ?>" alt="thumb" class="img-fluid" />
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

                            </div>
                        </div>
                    <?php } ?>  

                </div>
            </div>
        </div>
        <div class="col-lg-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">

                    <?php
                    $id=$_GET['id'];
                    
                    $query = mysqli_query($db, "SELECT * FROM news where '$id'=`id`");
                    while ($row = mysqli_fetch_assoc($query)) {

                    ?>
                        <div class="row">
                            <div class="col-sm-4 grid-margin">
                                <div class="position-relative">
                                    <div class="rotate-img">
                                        <img src="../uplod/<?php echo $row['img']; ?>" alt="thumb" class="img-fluid" />
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
                    <?php }?>


                </div>
            </div>
        </div>
    </div>




    

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="../../assets/images/logo.svg" class="footer-logo" alt="" />
                        <h5 class="font-weight-normal mt-4 mb-5">
                            Newspaper is your news, entertainment, music fashion website. We
                            provide you with the latest breaking news and videos straight from
                            the entertainment industry.
                        </h5>

                    </div>
                    <div class="col-sm-4">
                        <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="footer-border-bottom pb-2">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="../../assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid" />
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
                                            <img src="../../assets/images/dashboard/home_2.jpg" alt="thumb" class="img-fluid" />
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
                                            <img src="../../assets/images/dashboard/home_3.jpg" alt="thumb" class="img-fluid" />
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
</body>

</html>