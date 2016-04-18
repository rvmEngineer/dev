

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
        <title>Moon Light Graphics Factory </title>
        
        
        
        <style>
        .empty-well
        {
            background : transparent;
        }
        
        .bigger-icon
        {
            font-size :48px;
        }
            
        .footer-background
        {
            background-color :black;
            color:white;
        }
        </style>
        
        
        
    </head>

    <body>

        <script type="text/javascript" src= "CSS/Bootstrap/js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src= "CSS/Bootstrap/js/bootstrap.min.js"></script>
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"> Mesaespresinno Spices Trading LLP  </a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/register">Register</a></li>
                        <li><a href="/login">Login</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>


        <?php
                if($GLOBALS['test_echo_print']==true)
                {
                    echo "<br> start working home.php - Begin###########################################   ";
                    // $test =  $_REQUEST['jj'];
                    //$whatever = $_REQUEST['whatever'];
                    echo "<br> start working home.php  - End ###########################################    ";   
                }
        ?>

        <!--  Start of Container section -->
        <div class="container">
            <!--  Start of empty row section -->  
            <div class="row">
                <br><br>
            </div>
            <!--  Empty  of empty row section --> 
            
            
            <!--  Start of 2 row section -->
            <div class="row">

                <!--  Start of Column section for slider -->
                <div class="col-sm-12">

                    <!--  Start of carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                            
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/slider/001.jpg" alt="image 1" >
                                <div class="carousel-caption">
                                    River - image 1
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="images/slider/002.jpg" alt="image 2">
                                <div class="carousel-caption">
                                    Coffe - image 2
                                </div>
                            </div>
                            
                            <div class="item">
                                <img src="images/slider/003.jpg" alt="image 3">
                                <div class="carousel-caption">
                                    Coffe - image 3
                                </div>
                            </div>
                             <div class="item">
                                <img src="images/slider/004.jpg" alt="image 4">
                                <div class="carousel-caption">
                                    Coffe - Image 4
                                </div>
                            </div>
                            <div class="item">
                                <img src="images/slider/005.jpg" alt="image 5">
                                <div class="carousel-caption">
                                    Coffe - Image 5
                                </div>
                            </div>
  
                            <div class="item">
                                <img src="images/slider/006.jpg" alt="image 6">
                                <div class="carousel-caption">
                                    Coffe - Image 6
                                </div>
                            </div>

   
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                             <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span> 
                        </a>
                        
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <!--  End of carousel section for slider -->

                </div>
                <!--  End of Column section for slider -->
                
                

            </div>
            <!--  End of 2 row section -->

            <!--  Start of below row section -->  
            <div class="row">
                <div class="col-md-4 well text-center">
                    <h3>About</h3>
                    <span class="glyphicon glyphicon-globe bigger-icon" aria-hidden="true"></span>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
                
                <div class="col-md-4 well empty-well text-center">
                    <h3>Company Registration</h3>
                    <span class="glyphicon glyphicon-eye-open bigger-icon" aria-hidden="true"></span>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>
                
                <div class="col-md-4 well text-center">
                  <h3> Contact</h3>
                    <span class="glyphicon glyphicon-earphone bigger-icon" aria-hidden="true"></span>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                </div>


            </div>
            <!--  Empty  of below row section --> 
       
            <!--  Start of empty row section -->  
            <div class="row">
                <div class="col-md-12 footer-background  text-center">
                     footer
                 </div>
            </div>
            <!--  Empty  of empty row section --> 

        </div> 
        <!-- End of Container section -->

    </body>

</html>


