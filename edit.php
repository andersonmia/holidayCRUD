<?php
include('./db_credentials.php');
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];
$id = $_POST['id'];
if(!$connection){
    echo mysqli_connect_error();
}else{
    $query = "UPDATE crud SET name = '$name', email = '$email', telephone = '$tel', gender = '$gender' WHERE id = $id";
    $update = mysqli_query($connection,$query) or die("Error occured: ".mysqli_connect_error());
    header("location: home.php");
}
?>