<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="./assets/includes/Css/dashbordstyle.css">
    <title>adminpanel</title>
</head>

<body>
    <?php include "../includes/config.php" ?>




    <div class="d-flex">
        <div class="d-flex flex-column vh-100 flex-shrink-0 p-3 text-white bg-dark col-sm-2" style="width: 250px;">
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">

                <li> <a href="#Dashbord" class="nav-link text-white"> <i class="fa fa-dashboard"></i><span class="ms-2">Dashbord</span> </a> </li>
                <li> <a href="#addnews" class="nav-link text-white"> <i class="fa fa-first-order"></i><span class="ms-2">addnews</span> </a> </li>

                <li> <a href="#about" class="nav-link text-white"> <i class="fa fa-bookmark"></i><span class="ms-2">About</span> </a> </li>
            </ul>
            <hr>
        </div>

        <div class="col-sm-10">

            <?php
            $query = mysqli_query($db, "SELECT * FROM `newss`");
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">img</th>
                            <th scope="col">title</th>
                            <th scope="col">description</th>
                            <th scope="col">category</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <th scope="col"><?php echo $row['img'] ?></th>
                            <th scope="col"><?php echo $row['title'] ?></th>
                            <th scope="col"><?php echo $row['dsc'] ?></th>
                            <th scope="col"><?php echo $row['category_title'] ?></th>
                        </tr>
                </table>

            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>