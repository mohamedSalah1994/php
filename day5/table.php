<?php
$conn = mysqli_connect("localhost", "root" ,"" , "test");
if (! $conn){
    echo mysqli_connect_error();
    exit();
}
$query = "SELECT * FROM users ";
$result = mysqli_query($conn,$query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table style="width:100%">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Room No</th>
        <th>Ext</th>
        <th>Image</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)){ ?>
       <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['password']?></td>
        <td><?php echo $row['room']?></td>
        <td><?php echo $row['ext']?></td>
        <td><img src="<?php echo $row['profile_picture']?>" alt=""></td>

    </tr>
   <?php } ?>


</table>
</body>
</html>
<?php
mysqli_free_result($result);
mysqli_close($conn)
?>
