<?php 
$server = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Den"; 
 
$conn = mysqli_connect($server, $username, $password, $dbname); 
 
if(!$conn){ 
    die("Connection Fialed". mysqli_connect_error()); 
} 
?>
<!-- обычное подключение к  бд с именем Den-->