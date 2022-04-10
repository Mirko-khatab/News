<?php 
include '../../../includes/config.php';
if(isset($_GET['delete'])){
  $id=htmlspecialchars($_GET['delete']);
  $query=mysqli_query($db,"DELETE FROM news WHERE `id`='$id'");
  if($query){
        header("location:../../dashbord.php");
  
  }
}
