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

?>

</pre>