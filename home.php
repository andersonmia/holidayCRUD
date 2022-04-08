<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   <div class="container">
       <h1>Welcome to PHP CRUD operations</h1>
       <p>Let's Create, Read, Update and Delete</p>

       <form action="insert.php" class="form-inline m-2" method="post">
        <label for="name">Name:</label>
        <input type="text" class="form-control m-2" id="name" name="name" required>        
        <label for="email">Email:</label>
        <input type="email" class="form-control m-2" id="email" name="email" required>
        <label for="tel">Telephone:</label>
        <input type="number" class="form-control m-2" id="tel" name="tel" required>
        <label for="gender">Gender:</label>
        <input type="radio" class="form-control m-2" id="male" name="gender" value="male" >Male
        <input type="radio" class="form-control m-2" id="female" name="gender" value="female" >Female<hr>        
        <button type="submit" class="btn btn-primary">Add</button>
       </form>

       <table class="table">
        <tbody>
        <?php include('./display.php')?>
        </tbody>
    </table>
   </div>
</body>
</html>