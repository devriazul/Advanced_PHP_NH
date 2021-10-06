<pre>

<?php

$pro = $_FILES['profile'];

var_dump($pro);

// $riaz = array('mahmud'=>"28",'Mahfuj'=>"29");

echo $pro['name'];
echo '</br>';
echo $pro['type'];
echo '</br>';
echo $pro['size'];

?>

</pre>