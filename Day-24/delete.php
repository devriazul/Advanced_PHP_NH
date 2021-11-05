<?php

$conection = mysqli_connect('localhost','root','','advanced_php');
if(!$conection){
    die("Not Conected". mysqli_error($conection));
}

$received = $_REQUEST['id'];
$received_file_name = $_REQUEST['profile_pic'];


$query = "DELETE FROM user_info WHERE id = $received";
$run_delete_query = mysqli_query($conection, $query);

if($run_delete_query){
    unlink("images/$received_file_name");
    header("location: profile.php?deleted");
}

?>