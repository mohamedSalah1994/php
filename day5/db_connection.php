<?php
$conn = mysqli_connect("localhost", "root" ,"" , "test");
if (! $conn){
    echo mysqli_connect_error();
    exit();
}

$name = $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$room_no= $_POST['room_no'];
$ext= $_POST['ext'];
$img= $_FILES['img']['name'];
$query = "INSERT INTO users(name,email,password,room,ext,profile_picture)VALUES 
('$name','$email','$password','$room_no','$ext','$img')";
mysqli_query($conn,$query);
mysqli_close($conn);


move_uploaded_file($_FILES['img']['tmp_name'],"uploaded/".$_FILES['img']['name']);