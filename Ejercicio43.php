<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>