
<?php
$host = 'localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'todo_list';


$db = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
// testing to see if connection fails
// if($db){
//     echo "connected ";
// }else{
//   echo "could not connect";
// }
?>