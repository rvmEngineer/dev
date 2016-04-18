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
            
            $errors = [];
               
           
           $validation_data =[
               'first_name_name'   =>'min:3:First name',
               'last_name_name'    =>'min:3:Last name',
               'email_name_name'   =>'email:Email|equalTo:verify_email_name:Email:Verify Email',
               'verify_email_name' =>'email:Verify Email',
               'password_name'     =>'min:3:Password|equalTo:verify_password_name:Password:Verify Password',
  
           ]; 

           
      
           $validator = new Validator;
           $errors=$validator->IsValid($validation_data);
          // print_r($errors);
         //  exit();
           
          //If there is error print that to register page agin
          
           if(sizeof($errors)>0)
           {
               $_SESSION['ERROR_MESSAGE_TO_REGISTER_PAGE']=$errors;
               header("Location:/register");
               exit();
           }
           else
           {
               echo "<br> No error. Updated data to database <br>";
           }
           
           // This inherits extends Eloquent
           //save this data in to database
           $user = new User;
           $user->first_name=$_REQUEST['first_name_name'];
           $user->last_name =$_REQUEST['last_name_name'];
           $user->email =$_REQUEST['email_name_name'];
           
           //$user->password =$_REQUEST['password_name'];
           
           $user->password = password_hash($_REQUEST['password_name'],PASSWORD_DEFAULT);
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