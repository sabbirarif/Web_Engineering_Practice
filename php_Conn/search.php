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
        $query = "SELECT * FROM info WHERE email='$email'";
        $run = mysqli_query($con, $query);

        if(mysqli_num_rows($run) > 0){
            echo "
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
            ";
            while($row = mysqli_fetch_assoc($run)){
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['mobile']."</td>
                ";
            }
            echo "</table>";
        }
    ?>
</body>
</html>