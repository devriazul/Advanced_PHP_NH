<?php
    if(isset($_POST ['submit']))
        {
            $username = $_POST ['username'];
            $email = $_POST ['email'];
            $password = $_POST ['password'];
            
            $rec_file =$_FILES['upload_image'];
            $image_name = $rec_file['name'];
            $image_tmp_name = $rec_file['tmp_name'];
        
                // if($username && $email && $password){

            $conection = mysqli_connect('localhost','root','','advanced_php');
                if(!$conection){
                    die("Not Conected". mysqli_error($conection));
                }
            
            $query= "INSERT INTO user_info (username, email, password)";
            $query.="VALUES ('$username','$email','$password')";

            $result = mysqli_query($conection, $query);

                if(!$result){
                    die("Not Inserted.". mysqli_error());
                    }
                }else{
                    echo "Please insert all required data!";
                }
        //}
?>

