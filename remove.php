<?php
include('./db_credentials.php');
$id = $_GET['id'];
$query = "DELETE FROM crud WHERE id = $id";
$delete = mysqli_query($connection,$query);
    if($delete){
        echo "<script>window.alert('Deleted')</script>";
    }else{
        echo "<script>window.alert('Failed to delete')</script>";
    }
    header("location: home.php");   

?>