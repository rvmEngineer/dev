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
        <link rel="stylesheet" href="CSS/Bootstrap/css/user_defined_common_style.css">
        <title>  @yield('browser_titile')    </title>
        
         @yield('EXTRA_CSS')
        
    </head>
               
    <body>
           @yield('top_java_script')
           
           @include( '001_pages/003_blade_template_html/top_nav')
           
           @yield('outside_container') 
     
           
           <div class="container">
                 
               
               <div class="row">
                   <br><br>
                    <!-- fdsdksfjlkdjg -->
               </div>
                 
               <div class="row">
                   <br><br>
                    <h1>Hello wrow</h1>
               </div>

                  
            </div>

            
                                 
             
              
    </body>

</html>
