<?php
include("./db.php");
$name = $_POST['name'];
$score = $_POST['score'];

if(($name == "") || ($score == "")){
    echo "<h1>Fill in all the requirements</h1>";
}else{
    if(!$conn){
        echo (mysqli_connect_error());
    }else{
        $sql = "INSERT INTO demo_table(name,score) VALUES('$name','$score')";        
        $insert = mysqli_query($conn,$sql) or die("<h1>Error occured</h1>".mysqli_connect_error());
    }
    $conn -> close();
    header("location: index.php");
}
?>