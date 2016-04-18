<?php

   use Respect\Validation\Validator as Validator;
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
           echo "<br>posted -Start<br>";
           $errors = [];
           
           
           //It is a class so it will be called as object. 
         //   include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/Files/doRegister.php");  
           
           //validate data
 
           /* test 1 
           $result = Validator::numeric()->validate($_REQUEST['first_name_name']); // true
           var_dump($result);
           exit;*/
          
           /* test 2
          
           if( Validator::numeric()->validate($_REQUEST['first_name_name'])==false)
           {
               $errors[]="First name must be a numeric";
               
           }
 
           if( Validator::numeric()->validate($_REQUEST['last_name_name'])==false)
           {
               $errors[]="Last name must be a numeric";

           }
           
           print_r($errors);*/
           
           
           /* test 2 */
  
           
           if(Validator::stringType()->length(3, null)->validate($_REQUEST['first_name_name'])==false)
           {
               $errors[]="<br>First name must be  with minimum 3 length<br>";
           }
           if(Validator::stringType()->length(3, null)->validate($_REQUEST['last_name_name'])==false)
           {
               $errors[]="<br>Last name must be with minimum 3 length<br>";
           }
           
           if(Validator::email()->validate($_REQUEST['email_name_name'])==false)
           {
               $errors[]="<br>You must enter proper email Address<br>";
           }

           if(Validator::email()->validate($_REQUEST['email_name_name'])==false)
           {
               $errors[]="<br>You must enter proper email Address<br>";
           }

           if(Validator::stringType()->length(3, null)->validate($_REQUEST['password_name'])==false)
           {
               $errors[]="<br>Password must be with minimum 3 length<br>";
           }

           if(Validator:: equals($_REQUEST['email_name_name'])->validate($_REQUEST['verify_email_name'])==false)
           {
               $errors[]="<br> Please enter same email address for confirmation<br>";
           }

           if(Validator:: equals($_REQUEST['password_name'])->validate($_REQUEST['verify_password_name'])==false)
           {
               $errors[]="<br> Please enter same password   for confirmation<br>";
           }


           //if validation fails g back to register page and display error messages
           
           print_r($errors);

           //save this data in to database
           $user = new User;
           $user->first_name=$_REQUEST['first_name_name'];
           $user->last_name =$_REQUEST['last_name_name'];
           $user->email =$_REQUEST['email_name_name'];
           $user->password =$_REQUEST['password_name'];
           $user->save();
           
           echo "<br>posted -End<br>";   
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