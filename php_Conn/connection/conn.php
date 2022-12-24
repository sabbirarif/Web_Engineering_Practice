<?php

$con=mysqli_connect("localhost","root","","test");
if(!$con){
    die('Connection error'.mysqli_connect.error());
} /* else{
    echo '<script>alert("Connection successfull!!!")</script>';
} */

?>