<?php

$db=mysqli_connect('localhost','root','','News');
if(!$db){
    die("Connection failed: ".mysqli_connect_error());
}
function x($data){//function used to clear injection and problem
    global $db;
    $data=mysqli_real_escape_string($db,htmlspecialchars($data));
    return $data;
}
?>