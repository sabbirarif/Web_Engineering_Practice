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

        $query = "SELECT * FROM info";
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
                echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['mobile']."</td>";
            }
            echo "</table>";
        }
    ?>
    <h1>Search</h1>
    <form action="search.php" method="post">
        <p>Email: <input type="email" name="email" id="user-mail"></p>
        <button type="submit">Submit</button>
    </form>
    <h1>Del</h1>
    <form action="delete.php" method="post">
        <p>Email: <input type="email" name="email" id="user-mail"></p>
        <button type="submit">Submit</button>
    </form>
</body>
</html>