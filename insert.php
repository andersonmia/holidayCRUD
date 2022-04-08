<?php
include('./db_credentials.php');

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$gender = $_POST['gender'];

if(!$connection){
    echo mysqli_error($connection);
}else{
    $query = "INSERT INTO crud(name,email,telephone,gender) VALUES('$name','$email','$tel','$gender')";
    $insert = mysqli_query($connection,$query) or die("Error occured: ".mysqli_error($connection));        
    header("location: home.php");
    
}
?>