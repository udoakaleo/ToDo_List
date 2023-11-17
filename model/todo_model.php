<?php
  if (isset($_POST['submit'])){ 
    $task = $_POST['todo'];
    mysqli_query($db, "INSERT INTO tasks (todo) VALUES ($task)");
    header('location : index.php');
 }

?>