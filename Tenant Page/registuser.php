<?php 
require "func.php";



if( isset($_POST["register"])){
    if( registuser($_POST) > 0 ){
        echo "<script>
                alert('Register success');        
            </script>";
    } else {
        echo mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User Registration Page</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <ul>
    <h1>Registration Page</h1>
    </ul>


    <form action="" method="post">

    <ul>
        
            <!--Q1-->
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-label" id="username" aria-describedby="emailHelp">
            <br><br>
            <!--Q2-->
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-label" id="password" aria-describedby="emailHelp">
            <br><br>
            <!--Q3-->
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" name="password2" class="form-label" id="password2" aria-describedby="emailHelp">
            <br><br>
            
         
                <button type="submit" name="register" class="btn btn-primary">Register</button><br><br>
                <a href="loguser.php">Already have an account</a>
    
             
    </ul>

    </form>
</body>
</html>