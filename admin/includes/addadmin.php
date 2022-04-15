<div class="d-flex">
  <?php include './sidebar.php' ?>






  <div class="col-sm-10 mt-5">
    <form class=' col-sm-5 m-auto bg-light p-5 ' style='border-radius: 5px;' action="#" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">UserName :</label>
        <input type="text" name='username' class="form-control" id="exampleInputEmail1">
        <div id="emailHelp" class="form-text">Only user name like miran kamal.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password :</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>

      <div class="mb-3">
        <button name="add" class="btn btn-dark w-100 p-3">Add</button>
      </div>
      <?php
      //insert to database
      if (isset($_POST['add'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username) || empty($password)){
          echo "<P class='alert text-center alert-danger' role='alert'>Error you can not add </P>";
        }else{
          
        $query = mysqli_query($db, "INSERT INTO `admin`(`admin_username`, `admin_password`) VALUES ('$username','$password')");
        if ($query) {
          echo "<P class='alert text-center alert-success' role='alert'>success</P>";
        } 
      }}


      ?>
    </form>


  </div>

</div>