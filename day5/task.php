<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="db_connection.php" method="post" enctype="multipart/form-data">
    <label for="">Name</label><br>
    <input type="text" name="name"><br><br>
    <label for="">Email</label><br>
    <input type="email" name="email"><br><br>
    <label for="">Password</label><br>
    <input type="text" name="password"><br><br>
    <label for="">Room No.</label><br>
    <input type="text" name="room_no"><br><br>
    <label for="">Ext</label><br>
    <input type="text" name="ext"><br><br>
    <label for="">Profile picture</label><br>
    <input type="file" name="img"><br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>