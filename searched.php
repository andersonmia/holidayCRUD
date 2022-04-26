<?php 
$search = $_POST['name'] ;
echo $search ;
echo '<br>';

include './testdb.php' ;
if(!$conn){
    echo " not connected";
}
else{
echo "connected";
    $query = "select * from users where name =  $search " ; 
    $selectQuery=mysqli_query($conn,"SELECT * FROM users WHERE name  LIKE '%$search%'");
    // $select = mysqli_query($conn,$query) or die(mysqli_connect_error($conn));
    if($selectQuery){  
        echo "<table>" ;
        echo " <tr><th>Name</th> <th>Email</th></tr>" ;
        while($row = mysqli_fetch_assoc($selectQuery)){
            // echo `hello  {$row['name']}` ;
            echo "<tr><th> " .$row['name'] ." </th> <th> " . $row['email'] ."</th></tr>" ;
            
        }
        echo "</table>" ;
    }else{
        echo mysqli_connect_error($conn);
    }
}
    ?>