<?php
    session_start();
if ($_SESSION['usrName']==true) {

    if ((time() - $_SESSION['current_timestamp']) > 10) {
        header("location:logout.php");
    }else{
        echo $_SESSION['usrName'];
        echo "<br><a href='logout.php'>Logout!</a>";
    }

    

}else{
    header("location:login.php");
}
    
?>
