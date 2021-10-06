<pre>

<?php

$pro = $_FILES['profile'];

echo $name = $pro ['name'];
echo "</br>";
echo $type = $pro ['type'];
echo "</br>";
echo $tmpName = $pro ['tmp_name'];
echo "</br>";
$size = $pro ['size'];

echo floor($size/1024) ." Kb";

if(!empty($name)){

    $location = "uploads/";
    move_uploaded_file($tmpName, $location.$name);
}else{
    echo "File not found";
}


?>

</pre>