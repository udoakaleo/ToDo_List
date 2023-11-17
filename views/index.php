<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../pubic/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <title>ToDo_List</title>
</head>
<body>
    <?php

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
         <tr>
             <th scope="row"></th>
             <td></td>
             <td></td>
          
         </tr>
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