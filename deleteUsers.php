<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true){
       
        header("location: /authentication/dash.php");
        exit;
    }

     $server = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "users";
                        $row;
                        $conn = mysqli_connect($server,$username,$password,$dbname);
                        
                        if(!$conn){
                            echo "CONNECTION FAILED";
                        }

    if(isset($_GET['delete']))
    {
        // header("location: /authentication/viewUsers.php");
        // echo 'asdasd';
    //   $sn = $_GET['snn'];
      echo $_GET['snn'];
    //   $qu = "DELETE FROM users WHERE `sno` = $sn";
    //   $delete = mysqli_query($conn,$qu);
    //     header("location: /authentication/viewUsers.php");

        
    }
?>
