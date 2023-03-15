<?php


$username = 'root';
$password = '';
$database = 'bansaotruc';
try {
  $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
 
} catch(Exception $e) {
  echo $e->getMessage();    
//   echo 'không kết nối được CSDL';
}



?>  