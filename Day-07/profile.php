<pre>

<?php

$pro = $_FILES['profile'];

$name = $pro ['name'];
$type = $pro ['type'];
$tmpName = $pro ['tmp_name'];
$size = $pro ['size'];

// echo floor($size/1024) ." Kb";

if(!empty($name)){

    $location = "uploads/";
    if(move_uploaded_file($tmpName, $location.$name)){
        echo "File successfully Uploaded";
        echo "</br>";
        $path = $location.$name;
        echo "<img src='$path' width='200'>";
    }else{
        echo "File not Upload";
    }
}else{
    echo "File not found";
}


?>

</pre>