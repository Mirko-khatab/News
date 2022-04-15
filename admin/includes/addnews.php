<div class="d-flex">
    <?php include './sidebar.php' ?>






    <div class="col-sm-10 mt-5">
        <form class=' col-sm-5 m-auto bg-light p-5 ' style='border-radius: 5px;' action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" name='username' class="form-control" id="exampleInputEmail1">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" name="password" class="form-label">Description:</label>
                <textarea name='dsc' class="form-control" id="exampleInputPassword1"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" name="password" class="form-label">Select category:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sport
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Technology
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="3">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Healthcare
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="4">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Jobs
                    </label>
                </div>
              
            </div>
            <div class="mb-3">
                <input name='file' type="file" class="form-control w-100 bg-dark">
            </div>
            <div class="mb-3">
                <button name="add" class="btn btn-dark w-100">add</button>
            </div>
   
        </form>

    </div>

</div>
<?php
            //insert to the database
            if(isset($_POST['add'])){
                $title=$_POST['username'];
                $dsc=$_POST['dsc'];
                $cat=$_POST['flexRadioDefault'];
    //this is information about image
    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];
    $file_full_path = $file['full_path'];
    $fileEXT = explode('.', $file_name);
    $file_ActualEXT = strtolower(end($fileEXT));
    $fileAllowed = array('png', 'jpg', 'jpeg', 'svg', 'giv');
    if (in_array($file_ActualEXT, $fileAllowed)) {
        if ($file_error === 0
        ) {
            if ($file_size < 10000000) {
                $filenewname = rand() . '.' . $file_ActualEXT;
                $filedestnsion = "uplod/$filenewname";
                move_uploaded_file($file_tmp,$filedestnsion);

                $query = mysqli_query($db, "INSERT INTO `news`(`title`,`dsc`,`catagory`,`img`) values ('$title','$dsc','$cat','$filenewname')");
                if ($query) {

                    header("Location:addnews.php");
                }
            } else {
                echo "<script>alert('img size is to long   !!');</script>";
            }
        } else {
            echo "<script>alert('try again  !!');</script>";
        }
    } else {
        echo "<script>alert('file is not support !!');</script>";
    }
            }
?>