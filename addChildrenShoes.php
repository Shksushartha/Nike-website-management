<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
       
        header("location: dash.php");
        exit;
    }
?>
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

        
        $sname = $_POST["shoesName"];
        $sprice = $_POST["shoesPrice"];
        $sdir = $_POST["shoesDirectory"];

        $query = "INSERT INTO `childrenshoes` (`sname`, `sprice`, `sdir`) VALUES ('$sname', '$sprice','$sdir');";
         $result = mysqli_query($conn,$query);

         if($result){
            $alert = true;
        }
        elseif(!$result){
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
    <title>Nike | dashboard | Add | Female</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="add.css">
</head>
<body>
    <?php require 'components/nav.php' ?>
    <?php require 'components/secondnav/nav2.php' ?>
    <?php require 'components/sidebar/sidebar.php' ?>
     <?php
    if($alert){
        echo '<div class="alert alert-success" role="alert">
  Success!!! New shoes added.
</div>';
    }
    if($showerror){
        echo '<div class="alert alert-danger" role="alert">
  Failed!!! Please enter correct details.
</div>';
    }
    
?>
    <h3 style="text-align: center;">
        Add new childrens shoes
    </h1>
    <div class="content">
        <form action="/authentication/addChildrenShoes.php" method = "post">
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Shoes name</label>
    <input type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" name = "shoesName">
    <div id="emailHelp" class="form-text">Please enter the display shoes name.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" id="exampleInputPrice" name = "shoesPrice">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Description</label>
    <input type="textarea" class="form-control" id="exampleInputPrice">
  </div> -->
  <div class="mb-3">
    <label for="exampleInputPrice" class="form-label">Image name</label>
    <input type="text" class="form-control" id="exampleInputPrice" name = "shoesDirectory">
    <div id="emailHelp" class="form-text">Please save the image inside the default folder and enter the exact image name with correct extension.</div>
  </div>
  
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
    </div>
    
</body>
</html>