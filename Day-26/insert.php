<?php
    if(isset($_POST ['submit']))
        {
            $username = $_POST ['username'];
            $email = $_POST ['email'];
            $password = $_POST ['password'];
            $gender = $_POST ['Gender'];
            $country = $_POST ['Country'];
            
            $rec_file =$_FILES['upload_image'];
            $image_name = $rec_file['name'];
            $image_tmp_name = $rec_file['tmp_name'];

            $name_changer = uniqid()."_profile_photo".".jpg";

                if (!empty($image_name)) {
                    $loc = "images/";

                    if(move_uploaded_file($image_tmp_name,$loc.$name_changer)){
                        header("location:profile.php");
                    }else{
                        echo "Add user failed!";
                    }


                }else{
                    echo "No file selected";
                }
                // if($username && $email && $password){

            $conection = mysqli_connect('localhost','root','','advanced_php');
                if(!$conection){
                    die("Not Conected". mysqli_error($conection));
                }
            
            $query= "INSERT INTO user_info (username, email, password, profile_pic, Country, Gender)";
            $query.="VALUES ('$username','$email','$password','$name_changer','$country','$gender')";

            $result = mysqli_query($conection, $query);

                if(!$result){
                    die("Not Inserted.". mysqli_error());
                    }
                }else{
                    echo "Please insert all required data!";
                }
        //}
?>

