<?php
include('./db_credentials.php');
    $query = "SELECT* FROM crud";
    $select = mysqli_query($connection,$query) or die("Error occured: ".mysqli_connect_error());
        while($row = mysqli_fetch_assoc($select)){
            echo "<tr>";
            if($row['id'] == $_GET['id']){
                echo '<form action="edit.php" class="form-inline m-2" method="post">';
                echo '<td><input type="text" class="form-control" id="name" name="name" value="'.$row["name"].'"></td>';
                echo '<td><input type="email" class="form-control" id="email" name="email" value="'.$row["email"].'"></td>';
                echo '<td><input type="number" class="form-control" id="tel" name="tel" value="'.$row["telephone"].'"></td>';                
                $sex = $row["gender"];
                switch ($sex) {
                    case 'male':
                        echo '<td><input type="radio" id="male" name="gender" value="male" checked>Male</td>';
                        echo '<td><input type="radio" id="female" name="gender" value="female">Female</td>';
                        break;
                    
                    case 'female':
                        echo '<td><input type="radio" id="male" name="gender" value="male">Male</td>';
                        echo '<td><input type="radio" id="female" name="gender" value="female" checked>Female</td>';
                        break; 
                    default:
                        echo '<td><input type="radio" id="male" name="gender" value="male">Male</td>';
                        echo '<td><input type="radio" id="female" name="gender" value="female">Female</td>';
                        break; 
                }
                echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';            
                echo'<input type="hidden" class="form-control" id="id" name="id" value="'.$row["id"].'">';                       
                echo'</form>';
                }                          
               
            else{
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo '<td><a class="btn btn-primary" href="home.php?id=' . $row['id'] . '" role="button">Update</a></td>';   
                echo '<td><a class="btn btn-danger" href="remove.php?id=' . $row['id'] . '" role="button">Delete</a></td>';                     
                echo "</tr>";
            }            
        }
?>