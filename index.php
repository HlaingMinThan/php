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
            if($viewName=="aungaung"){
                require './views/aungaung';
            }elseif($viewName=="kyawkyaw"){
                require './views/kyawkyaw.php';
            }else{
                require './views/home.php';    
            }
 
            
        }else{
            require './views/home.php';

        }
      
    ?>
  
</body>
</html> 