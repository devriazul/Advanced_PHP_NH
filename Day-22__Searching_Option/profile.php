<div class="container mt-5">
    <div class="row">
        <div class="col-md-9"><h4>All User List:</h4></div>
            <div class="col-md-3">
                <form  action="" method="post">
                    <input class="search" type="text" name="search_keyword" id="" placeholder="Search Keyword...">
                    <input class="btn btn-sm btn-primary" type="submit" name="search" value="Search">
                </form>
            </div>
        </div>
</div>                  

<?php
    $conection = mysqli_connect('localhost','root','','advanced_php');
    if(!$conection){
        die("Not Conected". mysqli_error($conection));
    }
    
    if (isset($_REQUEST['search'])) {
        $search_key = $_REQUEST['search_keyword'];

    $query = "SELECT * FROM user_info WHERE username LIKE '%$search_key%'";
    // $query = "SELECT * FROM user_info";

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
                        if(isset($_REQUEST['updated'])){
                            echo "Updated Data Successfully!";
                        }  
                        
                        if (isset($_REQUEST['delete_all_data'])) {
                            $check_data = $_REQUEST['check_data'];
                            $all_mark = implode(",", $check_data);

                            $query = "DELETE FROM user_info WHERE id in ($all_mark)";
                            $run_delete_query = mysqli_query($conection, $query);

                            if($run_delete_query){
                                unlink("images/$received_file_name");
                                header("location: profile.php?deleted");
                            }
                        }
                    ?>

                    <form action="profile.php" method="POST">
                        <table class="table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th>Serial No:</th>
                                        <th>DB ID</th>
                                        <th>User Photo</th>
                                        <th>Full Name</th>
                                        <th>Email Address</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                        <th><input onclick="return confirm('Are you sure remove all selected user?')" class="btn btn-sm btn-outline-danger" type="submit" name="delete_all_data" value="Delete All"></th>
                                    </tr>
                                </thead >
                                <?php

                                $serial_number = 0;
                                    while ($row = mysqli_fetch_assoc($collectdata)) {
                                    
                                    $serial_number++;
                                    $id = $row['id'];
                                    $username = $row['username'];
                                    $email = $row['email'];
                                    $password = $row['password'];
                                    $profile_pic = $row['profile_pic'];
                                        
                                
                                ?>
                                <tbody class="pt-3">
                                    <tr>
                                    <td><?php echo $serial_number; ?></td>
                                    <td><?php echo $id; ?></td>
                                    <td><img width="50px" src="images/<?php echo $profile_pic; ?>" alt=""></td>
                                    <!-- <td><img src="images/profile1.jpg" width="50px" alt=""></td> -->
                                    <td><?php echo $username; ?></td>
                                    <td><?php echo $email; ?></td>
                                    <td><?php echo $password; ?></td>
                                    <td>
                                        <a onclick="return confirm('Are you sure edit user?')" class="btn btn-sm btn-warning" href="edit.php?edit_id=<?php echo $id ?>">Edit</a>
                                        <a onclick="return confirm('Are you sure remove user?')" class="btn btn-sm btn-danger pl-2" href="delete.php?id=<?php echo $id ?>&profile_pic=<?php echo $profile_pic; ?>">Delete</a>
                                    </td>
                                    <td class="text-center"><input type="checkbox" name="check_data[]" value="<?php echo $id; ?>"></td>
                                </tbody>
                                <?php
                                }
                                }else{
                                    echo "<h4>You have no data on your database!</h4>";
                                } 
                                
                            }
                        ?>
                        </table>
                    </form>
                </div>
                <a class="btn btn-sm btn-success float-left" href="index.php">Back</a>
            </div>
        </div>
    </div>
</body>

</html>