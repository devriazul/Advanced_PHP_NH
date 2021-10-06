<?php
 $user = $_REQUEST['username'];
 $pass = $_REQUEST['password'];

 
if ($user=="fast"){
    header("location: profile.php?test=$user");
}
 

// if ($user=="fastitbd"){
//     header("location: https://www.fastitbd.com");
// }elseif($user=="riaz"){
//     header("location: https://riaz.fastitbd.com");
// }else{
//     echo "not matching.";
// }