<!-- //CRUD DB= "advanced_php" -->
<?php
    if(isset($_POST ['submit']))
        {
            $username = $_POST ['username'];
            $email = $_POST ['email'];
            $password = $_POST ['password'];
        
                if($username && $email && $password){

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
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>

            <div class="col-md-6">
                <h4>Create a new User</h4>
                     <form class="form-control text-justify-center" action="insert.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="username" id="" placeholder="username"><br><br>
                        <input type="email" name="email" id="" placeholder="email"><br><br>
                        <input type="password" name="password" id="" placeholder="password"><br><br>
                        <input type="radio" name="Gender" id="" value="male">Male<br>
                        <input type="radio" name="Gender" id="" value="female">Female<br><br> 
                        <select name="Country" id="">
                            <option value="">Select Your Country</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="USA">USA</option>
                        </select><br><br> 
                        <input type="file" name="upload_image" id="" value="Upload"><br><br>
                        <input class="btn btn-sm btn-success" type="submit" name="submit" value="Registration">
                        <a href="login.php" class="btn btn-sm btn-primary" type="submit" name="submit">login</a>
                    </form>
                    <span>Developed by <a class="btn btn-sm" href="https://riaz.fastitbd.com">Md Riazul Islam</a></span>
                
            </div>
        </div>
    </div>
</body>

</html>