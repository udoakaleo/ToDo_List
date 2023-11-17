<?php
  if (isset($_POST['submit'])){ 
    $task = $_POST['task'];
    if(empty($task)){
        $errors = "task bar is empty!!!";
      }else{
    mysqli_query($db, "INSERT INTO tasks (task) VALUES ('$task')");
    header('location : index.php');
 }
  }

   $tasks = mysqli_query($db, "SELECT * FROM  tasks"); 



   // delete task 
   if (isset($_GET['del_task'])) {
     $id = $_GET['del_task'];
     mysqli_query($db, "DELETE FROM tasks WHERE id=$id");
     header("Location : index.php");

   }
   ?>