<?php
 
        session_start();

        require(__DIR__ . "/../vendor/autoload.php");

        echo "Index activated";

        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();  


        $router = new AltoRouter();

        //Just the address of the domain. We dont check anything
        $router->map('GET','/',function()
                     {
                         include(__DIR__."/../views_to_user_php/007_020/home.php");                                
                         
                     });

        $router->map('GET','/register',function()
             {
                 include(__DIR__."/../views_to_user_php/007_020/register0_adv.php");                                

             });

        $router->map('POST','/register',function()
                     {
                         include(__DIR__."/../views_to_user_php/007_020/Files/doRegister.php");                                

                     });

        $router->map('GET','/login',function()
             {
                 include(__DIR__."/../views_to_user_php/007_020/login.php");                                

             });

        $router->map('GET','/login',function()
                     {
                         include(__DIR__."/../views_to_user_php/007_020/login.html");                                

                     });

        // return an array of size 3
        $match = $router->match();
     //   echo "target".$match['target']; 
         // target can be function too. It depends on what you specify there
        if($match && is_callable($match['target']))
        {
            echo "Insde Callable"; 
            call_user_func_array($match['target'],$match['params']);
        }
        else
        {
            //    echo "inside error";
             include(__DIR__."/../views_to_user_php/007_020/error.php");
            
        } 


?>