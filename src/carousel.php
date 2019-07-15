<?php 

$json_file = file_get_contents("https://jsonplaceholder.typicode.com/photos");   
$array = json_decode($json_file, true);
$imgens = array_slice($array, 0, 20);

?>

