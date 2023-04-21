<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users";

        $conn = mysqli_connect($server,$username,$password,$dbname);
        

        if(!$conn){
            echo "FAILEDDDD";
        }
        
        $alert = false;
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $exist = false;


            $query = "SELECT * from users where username = '$user' AND password = '$pass'";

            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
            if($num > 0){
                $login = true;
                session_start();
                $_SESSION['loggedIn'] = true;
                $_SESSION['username'] = $user;
                header("location: main.php");

            }
            else{
            $showerror = true;
        }
        
        
}  
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nike | dashboard | login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="dash.css">
</head>
<body>
  <?php require 'components/nav.php' ?>
  <?php require 'components/secondnav/nav2.php' ;
   echo '<div class="alert alert-dark" role="alert">
  <strong>Don\'t have an account? </strong> <a href="signup.php" bg-black>Sign up</a> first.  
</div>';?>
  
  <?php
    if($showerror){
        echo '<div class="alert alert-danger" role="alert">
  <strong>Invalid credentials.</strong> Please try again.
</div>';
    }
    if($login){
        echo '<div class="alert alert-success" role="alert" bg-secondary-subtle>
  <strong>You are logged in.</strong> 
</div>';
    }
    
?>
  <div class="inputs">
      <form class="signupForm" action="/authentication/dash.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"
                id="exampleInputEmail1" aria-describedby="emailHelp" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password">
            </div>
      
            
            <button type="submit" class="btn btn-secondary">Login</button>
            
            <!-- <button type="submit" class="btn btn-secondary">Submit</button> -->
         </form>
        
  </div>
  
</body>
</html>