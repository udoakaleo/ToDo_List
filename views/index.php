<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../pubic/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <title>ToDo_List</title>
</head>
<body>
<div class = 'container bg-light'>

<div class = 'row bg-muted border: 1'>
      <div class = 'col text-center m-4'>
           <h3 class = ''>ToDo_List Application Using PHP and MYSQL database</h3>
      </div>
       
   </div>
<form method = 'post' action = index.php class = 'form-control'>
   
    <div class = 'row'>
         <div class = 'col-9'>
           <input type = 'text' name = 'todo' class = 'form-control bg-light'/>
          </div>
          <div class = 'col-3'>
           <input type = 'submit' name = 'addTask' class = 'form-control bg-success text-white' value = 'AddTask'/>
          </div>
    </div>  
</form>
</div>
</body>
</html>