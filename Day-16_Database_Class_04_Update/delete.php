<?php

$conection = mysqli_connect('localhost','root','','advanced_php');
if(!$conection){
    die("Not Conected". mysqli_error($conection));
}

$received = $_REQUEST['id'];


$query = "DELETE FROM user_info WHERE id = $received";
$run_delete_query = mysqli_query($conection, $query);

if($run_delete_query){
    header("location: profile.php?deleted");
}

?>