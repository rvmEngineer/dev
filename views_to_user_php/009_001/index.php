<?php
     

include(__DIR__."/../views_to_user_php/009_001/000_Settings/000_Initial_settings/start.php");   
// static class
 Dotenv::load(__DIR__."/../");
include(__DIR__."/../views_to_user_php/009_001/000_Settings/003_database_env_settings/db.php");   
include(__DIR__."/../views_to_user_php/009_001/000_Settings/001_router_settings/router.php");  
 
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
       include(__DIR__."/../views_to_user_php/009_001/001_pages/001_Error_Pages/error.php");  
   }
 
?>