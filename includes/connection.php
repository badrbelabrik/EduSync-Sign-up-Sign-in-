<?php 
$con = mysqli_connect("localhost","root","","school_db");
if (mysqli_connect_errno()){
    echo "failed to connect to database: ". mysqli_connect_error();
    exit();
}
?>