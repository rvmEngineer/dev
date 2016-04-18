<?php
     

    include(__DIR__."/../views_to_user_php/007_022/000_Settings/000_Initial_settings/start.php");   
    include(__DIR__."/../views_to_user_php/007_022/000_Settings/001_router_settings/router.php");  
 
    //It is an array pointer as per note link     
    $match =$router->match(); 
 //   list($controller,$method)=array(0,1);
        //explode("@",$match['target']);

  if($match)
  {
       echo "Match Found";
       
       list($controller,$method)=explode("@",$match['target']);
       
       if(is_callable(array($controller,$method)))
       {
           $object = new $controller();
           call_user_func_array(array($object,$method),array($match['params']));
       }

   }
   else
   {
        echo " No Match Found";
        include(__DIR__."/../views_to_user_php/007_022/000_Settings/000_Initial_settings/error.php");   

   }


/*
    if(is_callable(array($controller,$method)))
    {
        $object = new $controller();
        call_user_func_array(array($object,$method),array($match['params']));
    }
    else
    {
       echo "Can not find $controller->$method "  ;
        exit();
    }
*/

            /*

 /*  
        //Just the address of the domain. We dont check anything

        $router->map('GET','/register',function()
             {
                 include(__DIR__."/../views_to_user_php/007_021/register0_adv.php");                                

             });

        $router->map('POST','/register',function()
                     {
                         include(__DIR__."/../views_to_user_php/007_021/Files/doRegister.php");                                

                     });

        $router->map('GET','/login',function()
             {
                 include(__DIR__."/../views_to_user_php/007_021/login.php");                                

             });

        $router->map('GET','/login',function()
                     {
                         include(__DIR__."/../views_to_user_php/007_021/login.html");                                

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
             include(__DIR__."/../views_to_user_php/007_021/error.php");
            
        } 
*/

?>