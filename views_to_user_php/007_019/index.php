<?php
 
        session_start();

        require(__DIR__ . "/../vendor/autoload.php");

        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();  

       //  echo "Start to Index.php at root folder <br> <br>  ";
         // It became an array now
        $url = explode( '/',$_SERVER['REQUEST_URI']);

        //echo $url; 
       //  var_dump($url);
         if($url[1]=="")
         {
             //Home page
             include(__DIR__. "/../views_to_user_php/007_019/home.php");
             exit();
         }
         elseif($url[1]=="register")
         {
             include(__DIR__. "/../views_to_user_php/007_019/register0_adv.php");
             exit();
         }
         elseif($url[1]=="login")
         {
             //display login
             include(__DIR__. "/../views_to_user_php/007_019/login.html");
             exit();

         }

?>