<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
       
        if(isset($_GET['name'])){
            $viewName=$_GET['name'];
            if(file_exists('../views/'.$viewName.'.php')){
                view($viewName);
            }else{
                view("home");
            }
            
        }else{
            view("home");

        }
        function view($viewName){
            ob_start();
            require '../views/'.$viewName.'.php';
            ob_end_flush();
        }
    ?>
  
</body>
</html> 