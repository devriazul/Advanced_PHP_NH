<?php

$conection = mysqli_connect('localhost','root','','advanced_php');
if(!$conection){
    die("Not Conected". mysqli_error($conection));
}

if(isset($_REQUEST['edit_id'])){
    $received_id = $_REQUEST['edit_id'];

    $get_info = "SELECT * FROM user_info WHERE id = $received_id";

    $select_info = mysqli_query($conection,$get_info);

    while ($row = mysqli_fetch_assoc($select_info)) {
        // echo $row['username'];


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
                <form class="form-control" action="update.php" method="post">
                    <label for="username">User Name:</label><br>
                    <input type="text" name="username" id="" placeholder="username" value="<?php echo $row['username']; ?>"><br><br>
                    <label for="email">Email Address:</label><br>
                    <input type="email" name="email" id="" placeholder="email" value="<?php echo $row['email']; ?>"><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="" placeholder="password" value="<?php echo $row['password']; ?>"><br><br>
                    <input class="btn btn-sm btn-success" type="submit" name="submit" value="Update">
                    <a class="btn btn-sm btn-success" href="profile.php">Back</a>
                </form>
                
            </div>
        </div>
    </div>
</body>

</html>

<?php

    }

}

?>
