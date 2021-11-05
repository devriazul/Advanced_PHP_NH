<?php

$conection = mysqli_connect('localhost','root','','advanced_php');
if(!$conection){
    die("Not Conected". mysqli_error($conection));
}

if(isset($_REQUEST['submit'])){
    $user = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $hidden_id = $_REQUEST ['updating_hidden_id'];

  

$update_query = "UPDATE user_info SET username = '$user',email = '$email', password = '$password' WHERE id = $hidden_id"; 

$final_update_query = mysqli_query($conection,$update_query);

if($final_update_query){
    header("location:profile.php?updated");
}

}


?>