<div class="d-flex">
    <?php include './sidebar.php' ?>






    <div class="col-sm-10">


        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">img</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">category</th>

                    <th scope="col">Deleted</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($db, "SELECT * FROM `newss`");
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>

                        <th scope="col"><img src="../uploads/<?php echo $row['img'] ?>" alt="shabaka nea gullm" /></th>
                        <th scope="col"><?php echo $row['title'] ?></th>
                        <th scope="col"><?php echo $row['dsc'] ?></th>
                        <th scope="col"><?php echo $row['category_title'] ?></th>

                        <th scope="col"><a href="./delete.php?delete=<?php echo $row['id'] ?>">Deleted</a></th>

                    </tr>
                <?php } ?>
        </table>


    </div>






</div>