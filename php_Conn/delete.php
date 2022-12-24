<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        include 'connection/conn.php';
        $email = $_POST['email'];
        $query = "DELETE FROM info WHERE email='$email'";
        $run = mysqli_query($con, $query);
        if(!$run){
            echo 'Delete failed!!!';
        } else{
            header("Location: list.php");
            exit();
        }
       
    ?>
</body>
</html>