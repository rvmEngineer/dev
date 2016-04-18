<?php

   class PageController
   {
       public  function getShowHomePage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/home.php");  
       }
       
       public  function getShowRegisterPage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/register0_adv.php");  
       }
       
       public  function postShowRegisterPage()
       {
            echo "posted";
           //It is a class so it will be called as object. 
            include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/Files/doRegister.php");  
       }


       public  function getShowLoginPage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/001_login/login.php");  
       }

       public  function getTestDB()
       {
            $user = User::find(3);
            echo "<br>################################<br>" ;
            echo "User name is ". $user->first_name;
       }

   }
       
?>