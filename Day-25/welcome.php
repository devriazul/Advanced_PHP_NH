<?php
    session_start();
if ($_SESSION['usrName']==true) {
    echo $_SESSION['usrName'];
 
 ?>


<br>
<a href="logout.php">Logout!</a>


<?php

}else{
    header("location:login.php");
}
    
?>
