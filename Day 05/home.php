<?php

echo $user = $_REQUEST['username'];
echo $pass = $_REQUEST['password'];

if ($user=="fastitbd"){
    header("location: https://www.fastitbd.com");
}elseif('$user=="riaz'){
    header("location: https://riaz.fastitbd.com");
}