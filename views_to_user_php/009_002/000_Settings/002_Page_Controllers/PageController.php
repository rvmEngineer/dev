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
            echo "posted -Start";
           //It is a class so it will be called as object. 
         //   include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/Files/doRegister.php");  
           
           //validate data

           //if validation fails g back to register page and display error messages

           //save this data in to database
           $user = new User;
           $user->first_name=$_REQUEST['first_name_name'];
           $user->last_name =$_REQUEST['last_name_name'];
           $user->email =$_REQUEST['email_name_name'];
           $user->password =$_REQUEST['password_name'];
           $user->save();
           
           echo "posted -End";   
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