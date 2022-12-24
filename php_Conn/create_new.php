<?php

include 'connection/conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['phone'];

$query = "insert into info(name,email,mobile)
            values('$name','$email','$mobile')";


// checking if the data passed to db successfully or not
$run = mysqli_query($con, $query);
if(!$run){
    echo 'submission failed!!!';
} else{
    header("Location: list.php");
    exit();
}

?>