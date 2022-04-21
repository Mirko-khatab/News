<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../Css/dashbordstyle.css">
    <title>adminpanel</title>
</head>

<body style="background-color:#DFDFDE">
    <?php include "./config.php";


    ?>





    <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark col-sm-2 justify-content-between" style="width: 250px;">
        <div>
            <ul class="nav nav-pills flex-column mb-auto">

                <li> <a href="./dashbordnews.php" class=" nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Dashbord</span> </a> </li>
                <li> <a href="./addnews.php" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">addnews</span> </a> </li>
                <li> <a href="./addadmin.php" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">addadmin</span> </a> </li>

                <li> <a href="./about.php" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">About</span> </a> </li>


            </ul>
        </div>
        <div>
            <a href="../index.php" class="nav-link text-white h2 "> <i class="fa fa-bookmark"></i><span class="ms-2">Logout</span> </a>
        </div>
    </div>


</body>

</html>