<?php
        session_start();

        echo "<br> start working start.php - Begin   ";
 
        require(__DIR__ . "/../../../../vendor/autoload.php");
        $whoops = new \Whoops\Run;
        //$whoops = new  filp\whoops\src\Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();  
        
 //$whatever = $_REQUEST['whatever'];
//$whatever = $_REQUEST['pp'];

            
        echo "<br> start working start.php - End   ";

?>