<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../pubic/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../public/font-awesome/css/font-awesome.min.css">
    <title>ToDo_List</title>
</head>
<body>
    <?php
    $errors = "";

     include_once '../config/dbCon.php';
      include_once '../model/todo_model.php';
   
    ?>
<div class = 'container bg-light'>

        <div class = 'row bg-muted border: 1'>
          <div class = 'col text-center m-4'>
              <h3 class = 'border border-info rounded-pill '>ToDo_List Application Using PHP and MYSQL database</h3>
           </div>
       
        </div>
        <form method = "POST" action = "index.php" class = 'form-control'>
                    <?php if(isset($errors)){ ?>
                       <p class = 'text-danger'><?php echo $errors ?></p>
                   <?php }  ?>
              <div class = 'row'>
                  <div class = 'col-9'>
                    <input type = 'text' name = 'task' class = 'form-control bg-light'/>
                     </div>
                   <div class = 'col-3'>
                  <input type = 'submit' name = 'submit' class = 'form-control bg-success text-white rounded-pill' value = 'AddTask'/>
                  </div>
             </div>  
           </form>

           <table class="table">
     <thead>
          <tr>
             <th scope="col">#</th>
             <th scope="col">Task</th>
             <th scope="col">Action</th>
           
          </tr>
      </thead>
      <tbody>
              <?php
                while ($row = mysqli_fetch_array($tasks)) { ?>

           <tr>
             <th scope="row"><?php echo $row['id'];  ?></th>
             <td><?php echo $row['task'];  ?></td>
             <td>
                <i class = "fa fa-times"> </i>
                <a href="index.php?del_task=<?php echo $row ['id'];?>">X</a>
             </td>
          
         </tr>

                
               <?php }  ?>
        
         <tr>
             <th scope="row"></th>
             <td></td>
             <td></td>
         
          </tr>
         <tr>
             <th scope="row"></th>
             <td colspan=""></td>
             <td colspan=""></td>
            
         </tr>
     </tbody>
  </table>
</div>
</body>
</html>