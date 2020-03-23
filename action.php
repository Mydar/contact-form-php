<?php 

$userfile = uniqid($_POST["firstname"]);
$myfile = fopen("$userfile.php", "x+")

    or die ("File can not be created");
    
fwrite($myfile, json_encode($_POST));


?>