<?php

    session_start();

    $conection = mysqli_connect('localhost','root','','advanced_php');
    if(!$conection){
        die("Not Conected". mysqli_error($conection));
    }

    if (isset($_REQUEST['submit'])) {
        $usrName = $_REQUEST ['username'];
        $usrPass = $_REQUEST ['password'];

    $query = "SELECT * FROM login_check WHERE username = '$usrName' && password = '$usrPass'";
    // $query = "SELECT * FROM user_info";

    $collectdata = mysqli_query($conection,$query);

    $count = mysqli_num_rows($collectdata);

    if($count > 0){
        $_SESSION['usrName'] = $usrName;
        $_SESSION['current_timestamp'] = time();
        header("location:welcome.php");
    }else{
        echo "Not Login!";
    }
    }
?>