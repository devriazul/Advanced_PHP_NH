<?php
    $conection = mysqli_connect('localhost','root','','advanced_php');
    if(!$conection){
        die("Not Conected". mysqli_error($conection));
    }

    $query = "SELECT * FROM user_info";

    $collectdata = mysqli_query($conection,$query);

    $count = mysqli_num_rows($collectdata);

    if($count > 0){

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
            <div class="">
                <div class="card">
                    <?php
                        if(isset($_REQUEST['deleted'])){
                            echo "Deleted Data Successfully!";
                        }
                    
                    ?>

                    <table class="table">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>EMAIL</th>
                                <th>PASSWORD</th>
                                <th>ACTION</th>
                            </tr>
                        </thead >
                        <?php
                            while ($row = mysqli_fetch_assoc($collectdata)) {
                            
                            $id = $row['id'];
                            $username = $row['username'];
                            $email = $row['email'];
                            $password = $row['password'];
                                
                        
                          ?>
                        <tbody class="pt-3">
                            <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $username; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><?php echo $password; ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $id ?>">Edit</a>
                                <a class="btn btn-sm btn-danger pl-2" href="delete.php?id=<?php echo $id ?>">Delete</a>
                            </td>
                        </tbody>
                        <?php
                          }
                        }else{
                            echo "<h4>You have no data on your database!</h4>";
                        } 
                        
                        ?>
                    </table>
                </div>
                <a class="btn btn-sm btn-success float-left" href="index.php">Back</a>
            </div>
        </div>
    </div>
</body>

</html>