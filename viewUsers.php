<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
       
        header("location: /authentication/dash.php");
        exit;
    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike | Dashboard | Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="viewUsers.css">
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
    
    <!-- <h4 style = "text-align:center;">Users</h4> -->
    <div class="tableWrap">
        <table class="table m-30px text-center">
        <thead>
          <tr>
            <th scope="col">S.No.</th>
            <th scope="col">Username</th>
            <th scope="col">Date Joined</th>
          </tr>
        </thead>
        <tbody>
          <?php
                        $server = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "users";
                        $row;
                        $conn = mysqli_connect($server,$username,$password,$dbname);
                        
                        if(!$conn){
                            echo "CONNECTION FAILED";
                        }

                        $query = mysqli_query($conn,"select * from users");

                        while($row = mysqli_fetch_array($query))
                        {
                    ?>
          <tr>
            <th scope="row"><?php echo $row['sno']; ?></th>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['date']; ?></td>
           
            </tr>
          <?php }?>
        </tbody>
</table>
    </div>
</body>
</html>