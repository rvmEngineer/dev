@extends('001_pages/003_blade_template_html/base')

@section('browser_titile')
   GGF:: Registration Page
@stop


@section('top_java_script')
    <script type="text/javascript" src= "/assets/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src= "/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src= "/assets/js/jquery.validate.min.js"></script>
@stop







@section('content')

    <!-- Row Class starts -->           
    <div class="row">

        <!-- First Column   starts -->  
        <div class="col-md-2  ">
            <!--First Column-->  
        </div>
        <!--First Column  ends -->

        <!-- Registration column starts -->  
        <div class="col-md-8">
            <h1>Register </h1>
            
            <!--   {%  include '001_pages/003_Twig_template_html/error_message.html' %} -->

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
                    <label for="verify_email_name" class="col-sm-2 control-label">Verify Email</label>
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
                    <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control required" id="verify_password_id"
                               name = "verify_password_name"  placeholder="Password">
                    </div>
                </div>
                <hr>
                <!--Container Class starts -->    
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>


            </form>


        </div>
        <!-- Registration column ends -->


        <!-- Thrid  Column   starts -->  
        <div class="col-md-2">
            <!--Third Column-->
        </div>
        <!--Thrid Column Class ends -->


    </div>
    <!-- Row Class starts -->        

@stop



@section('bottom_java_script')
 

<script type="text/javascript">
      $(document).ready(function(){
        //  alert("Welcome to JQuery");
        $("#registration_form_id").validate(
            {
              
                rules :
                {
                    verify_email_name : 
                    {
                        required : true,
                        email :true,
                        equalTo:"#email_name_id"

                    },

                    verify_password_name : 
                    {
                        required : true,
                        equalTo:"#password_id"

                    },

                }
            }
        );
    })
</script>

@stop
