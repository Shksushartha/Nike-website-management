<?php
    
   
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "users";

        $conn = mysqli_connect($server,$username,$password,$dbname);
        

        if(!$conn){
            echo "CONNECTION FAILED";
        }
        
        $alert = false;
        $user = $_POST["username"];
        $pass = $_POST["password"];
        $cpass = $_POST["cpassword"];
        $exist = false;

        if($pass == $cpass && $exist == false && $pass !=""){
            $query = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$user', '$pass', current_timestamp());";

            $result = mysqli_query($conn,$query);

            if($result){
                $alert = true;

            }
        }
        else{
            $showerror = true;
        }
}  
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="signup.css">
    <title>Nike | dashboard | Sign up</title>
  </head>
  <body>
    <?php require 'components/nav.php' ?>
 <?php require 'components/secondnav/nav2.php' ?>
     <?php
    if($alert){
        echo '<div class="alert alert-success" role="alert">
  Success!! Your account is now created.
</div>';
$FiveDigitRandomNumber = rand(10000,99999);
echo $FiveDigitRandomNumber;
    }
    if($showerror){
        echo '<div class="alert alert-danger" role="alert">
  <strong>Sign up failed!!</strong> Please try again.
</div>';
    }
    
?>
    <div id="main">
        <div class="forms" style="margin-top:40px; border: black solid 1px; padding: 40px; border-radius:20px">
         <form class="signup" action="/authentication/signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username"
                id="exampleInputEmail1" aria-describedby="emailHelp" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" id="password">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword" id="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password</div>
            </div>
            
            <button type="submit" class="btn btn-secondary">Submit</button>
         </form>
        </div>
       
    </div></a>
  </body>
</html>
