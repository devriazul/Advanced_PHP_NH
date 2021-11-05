<?php

session_start();
session_destroy();

header("location:login.php?data_send");

?>