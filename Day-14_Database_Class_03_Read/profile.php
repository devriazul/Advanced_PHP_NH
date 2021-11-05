<?php
    $conection = mysqli_connect('localhost','root','','advanced_php');
    if(!$conection){
        die("Not Conected". mysqli_error($conection));
    }

    $query = "SELECT * FROM user_info";

    $collectdata = mysqli_query($conection,$query);

    $count = mysqli_num_rows($collectdata);

    if($count > 0){

    while ($row = mysqli_fetch_assoc($collectdata)) {
       
        echo "{$row['id']}";
        echo "<br>";

        echo "{$row['username']}";
        echo "<br>";

    }
}else{
    echo "You have no data on your database!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <h6>Id No: :</h6>
                    <h6>Username: </h6>
                    <h6>Email: </h6>
                    <h6>Password: </h6>
                    <h6>Dated: </h6>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>