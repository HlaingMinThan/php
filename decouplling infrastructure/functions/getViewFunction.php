<!-- get view page and pass data function -->

<?php 
     function view(String $viewName,Array $data=null){
        ob_start();
        if($data!=null){
            extract($data);
        }
        require '../views/'.$viewName.'.php';
        ob_end_flush();
    }

?>
