<pre>



<?php

$pro = $_FILES['profile'];

// echo var_dump($pro);

// $arrayName = array('riaz' => "25", );
// echo $arrayName['riaz'];
$name = $pro["name"];
// echo "<br>";
// echo $type = $pro["type"];
// echo "<br>";
$tmp_name = $pro["tmp_name"];
// echo "<br>";
// $size = $pro["size"];
// echo floor($size/1024).'kb';

if (!empty($name)) {
    $loc = "upload/";
    move_uploaded_file($tmp_name,$loc.$name);
    echo "File uploaded successful.<br>";
    $path =$loc.$name;
    echo "<img src='$path' alt='' width='200px'>";

}else {
    echo "File not found";
}

// move_uploaded_file($tmp_name,);

?>

</pre>