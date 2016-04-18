<!--  It says document type for browser as html 5 file -->
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-16">
        <!--  For IE only -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
  
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/styles.css" type="text/css"  onload="sheetLoaded()" onerror="sheetError()">     
 
    
        @yield('css_additional')
        <title>  @yield('browser_titile')    </title>
        
       
    </head>

    <body>
       
        <script>
            function sheetLoaded()
            {
                alert("Loaded");
            }

            function sheetError()
            {
                alert("An error occurred loading the stylesheet!");
            }
        </script>
   
        @yield('top_java_script')
        
      
        @include( '001_pages/003_blade_template_html/top_nav')
    
        @yield('outside_container') 

        <div class="container">

            <div class="row">
                <br><br>
                @include('001_pages/003_blade_template_html/error_message')
            </div>
            
            
          
            @yield('content')
          
        </div>
        
        
        
        <!--  Start of empty row section -->  
        <div class="row  footer-background">
            <div class="col-md-3  ">
               <div class="padding-left-8px" >
                   <h4> Contact Us</h4>
                    address<br>
                    address 2<br>
                    address 3<br>
                </div>  
            </div>
            <div class="col-md-6  ">
                
            </div>

            <div class="col-md-3  ">
                <img src="images/map/map-small.png" class="pull-right">
            </div>

        </div>
        <!--  Empty  of empty row section --> 

   
        
        @yield('bottom_java_script')
    </body>

</html>
