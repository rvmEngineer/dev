 

<!--  It says document type for browser as html 5 file -->
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
    <!--  For IE only -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->




   <link rel="stylesheet" href="CSS/Bootstrap/css/bootstrap.min.css">
  <title>Register </title>
</head>

<body>

    <script type="text/javascript" src= "CSS/Bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src= "CSS/Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src= "CSS/Bootstrap/js/jquery.validate.min.js"></script>

       <!--Container Class starts -->
     <div class="container">


         <!-- Row Class starts -->           
         <div class="row">
             
            <!-- Column Class starts -->  
            <div class="col-md-2  ">
             First Column
            </div>
            <!--Column Class ends -->
 
             <!-- Column Class starts -->  
             <div class="col-md-8">
            <h1>Register </h1>
             <?php
                    if(isset($_SESSION['ERROR_MESSAGE']))
                    {
                        echo $_SESSION['ERROR_MESSAGE'];
                        unset($_SESSION['ERROR_MESSAGE']);
                    }
             ?>
            <hr>
            <form class="form-horizontal required" name ="registration_form_name" id = "registration_form_id"
                    method="post"  novalidate >
                  
                <!-- action = "/../views_to_user_php/007_020/Files/doRegister.php"  removed action = "/register" -->
   
             <div class="form-group">
                  <label for="first_name" class="col-sm-2 control-label">First Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="first_name_id" name = "first_name_name" 
                           placeholder="first name">
                  </div>
              </div>
              
              <div class="form-group">
                  <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control required" id="last_name_id" name = "last_name_name" 
                           placeholder="last name">
                  </div>
              </div>
                
                
              <div class="form-group">
                <label for="email_name" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control required" id="email_name_id" name = "email_name_name" 
                         placeholder="user@example.com">
                </div>
             </div>
                
              <div class="form-group">
                <label for="verify_email_name" class="col-sm-2 control-label">verify Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control required email" id="verify_email_name_id" 
                         name = "verify_email_name" placeholder="user@example.com">
                </div>
              </div>
                
                
              <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control required" id="password_id" name = "password_name"
                             placeholder="Password">
                    </div>
                </div>
                
              <div class="form-group">
                  <label for="verify_password" class="col-sm-2 control-label">verify Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control required" id="verify_password_id"
                       name = "verify_password_name"  placeholder="Password">
                    </div>
              </div>
 
              <!--Container Class starts -->    
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </div>
                

        </form>


            </div>
             <!--Column Class ends -->
             

             <!-- Column Class starts -->  
            <div class="col-md-2">
             Third Column
            </div>
             <!--Column Class ends -->


          </div>
         <!-- Row Class starts -->           

     </div>
    <!--Container Class ends -->
    
    
</body>

</html>
