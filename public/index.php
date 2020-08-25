<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
       require '../decouplling infrastructure/functions/getViewFunction.php';
        if(isset($_GET['name'])){
            $viewName=$_GET['name'];
            if(file_exists('../views/'.$viewName.'.php')){
                $data=[
                    'name'=>$viewName
                ];
                view($viewName,$data);
            }else{
                home_view();
            }
            
        }else{
           home_view();

        }
       
        function home_view(){
            $data=[
                'title'=>'Home',
                'welcome'=>'Welcome From My Php and git deep learning process'
            ];
            view("home",$data);
        }
    ?>
  
</body>
</html> 