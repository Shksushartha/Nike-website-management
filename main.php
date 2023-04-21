
<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
       
        header("location: dash.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike | dashboard | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/9036ce25ed.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/authentication/main.css">
</head>
<body>
    <?php require 'components/nav.php' ?>
    <?php require 'components/secondnav/nav2.php' ?>
    <?php require 'components/sidebar/sidebar.php' ?>
    <div class="division">
        <div class="container">
            <div class="category">Mens</div>
                <div class="scroll">
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

                        $query = mysqli_query($conn,"select * from Shoes");

                        while($row = mysqli_fetch_array($query))
                        {
                    ?>

                    <div class="elements">
                            <!-- <i class="fa-solid fa-plus" id="plus"></i> -->
                            <img src="/authentication/images/<?php echo $row['Directory']; ?>" alt="<?php echo $row['Name']; ?>" class="divphoto">
                            <div class="shoesname"><?php echo $row['Name']; ?></div>
                            <div class="shoesinfo">$<?php echo $row['Price']; ?></div>
                    </div>
                <?php }?>
            </div>
         </div>


         <div class="container">
      <div class="category">Womens</div>
        <div class="scroll">
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

                        $query = mysqli_query($conn,"select * from womenshoes");

                        while($row = mysqli_fetch_array($query))
                        {
                    ?>

                    <div class="elements">
                            <!-- <i class="fa-solid fa-plus" id="plus"></i> -->
                            <img src="/authentication/images/<?php echo $row['sdir']; ?>" alt="<?php echo $row['sname']; ?>" class="divphoto">
                            <div class="shoesname"><?php echo $row['sname']; ?></div>
                            <div class="shoesinfo">$<?php echo $row['sprice']; ?></div>
                    </div>
                <?php }?>
       
    </div>
    </div>


    <div class="container">
      <div class="category">Childrens</div>
        <div class="scroll">
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

                        $query = mysqli_query($conn,"select * from childrenshoes");

                        while($row = mysqli_fetch_array($query))
                        {
                    ?>

                    <div class="elements">
                            <!-- <i class="fa-solid fa-plus" id="plus"></i> -->
                            <img src="/authentication/images/<?php echo $row['sdir']; ?>" alt="<?php echo $row['sname']; ?>" class="divphoto">
                            <div class="shoesname"><?php echo $row['sname']; ?></div>
                            <div class="shoesinfo">$<?php echo $row['sprice']; ?></div>
                    </div>
                <?php }?>
       
    </div>
    </div>
    </div>
</body>
</html>
    
