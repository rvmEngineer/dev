<?php namespace Name_Space\Page_Controllers;

   use Name_Space\Validation\Validator;
   use Name_Space\Models\Database\User;

   class PageController
   {
       public  function getShowHomePage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/home.php");  
       }
       
       public  function getShowRegisterPage()
       {
           echo "<br>Inside Show Register <br>";
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/register0_adv.php");  
           
        }
       
       public  function postShowRegisterPage()
       {  
           echo "<br>#################posted -Start#################<br>";      
           
        //   include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/Files/doRegister.php");  
           //Validation
          
           $validator = new Validator;
                  
           if($validator->IsValid())
           {
               die("<br>#################Valid #################<br>");
           }
           else
           {
               die("<br>#################Data not Valid#################<br>");
           }
 
           // This inherits extends Eloquent
           //save this data in to database
           $user = new User;
           $user->first_name=$_REQUEST['first_name_name'];
           $user->last_name =$_REQUEST['last_name_name'];
           $user->email =$_REQUEST['email_name_name'];
           $user->password =$_REQUEST['password_name'];
           $user->save();
          
           echo "<br>#################posted -End#################<br>";   
       }


       public  function getShowLoginPage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/001_login/login.php");  
       }

       public  function getTestDB()
       {
            $user = User::find(19);
            echo "<br>################################<br>" ;
            echo "User name is ". $user->first_name;
           
       }

   }
       
?>