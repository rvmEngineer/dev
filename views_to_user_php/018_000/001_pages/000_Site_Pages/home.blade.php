{{--Staring Inside Blade --}}
<br>


@extends('001_pages/003_blade_template_html/base')

@section('browser_titile')
Geometry Graphics Factory 
@stop

@section('CSS')
<style>
    .carousel
    {
        width:100%; 
        margin-top: 10px;
    }
</style>
@stop


@section('top_java_script')

    <script type="text/javascript" src= "CSS/Bootstrap/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src= "CSS/Bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src= "CSS/Bootstrap/js/jquery.validate.min.js"></script>

@stop



@section('outside_container')

    <!--  Start of   slider -->
    <div id ="my-slider" class="carousel slide" data-ride ="carousel"> 

        <!-- Indicator for sliders means the circle for selecting the slides-->
        <ol class="carousel-indicators">
            <li data-target="#my-slider" data-slide-to="0" class ="active"></li>
            <li data-target="#my-slider" data-slide-to="1"></li>
            <li data-target="#my-slider" data-slide-to="2"></li>                                                                <li data-target="#my-slider" data-slide-to="3"></li>          
        </ol>
        <!-- End of Indicator for sliders means the circle for selecting the slides-->


        <!--  Start of Wrapper for List of images-->  
        <div class="carousel-inner" role ="listbox">

            <!-- Adding elements for  slides-->  
            <div class ="item active">
                <img src="images/slider/1.jpg" alt="image 1">
                <div class = "carousel-caption">
                    <h1> Coffe Images 1</h1>
                </div>
            </div>  
            <!-- end of Adding elements for  slides-->  



            <!-- Adding elements for  slides-->  
            <div class ="item">
                <img src="images/slider/2.jpg" alt="image 2">
                <div class = "carousel-caption">
                    <h1> Coffe Images 2</h1>
                </div>
            </div>  
            <!-- end of Adding elements for  slides-->  


            <!-- Adding elements for  slides-->  
            <div class ="item  ">
                <img src="images/slider/3.jpg" alt="image 3">
                <div class = "carousel-caption">
                    <h1> Coffe Images 3</h1>
                </div>
            </div>  
            <!-- end of Adding elements for  slides-->  


            <!-- Adding elements for  slides-->  
            <div class ="item  ">
                <img src="images/slider/4.jpg" alt="image 4">
                <div class = "carousel-caption">
                    <h1> Coffe Images 4</h1>
                </div>
            </div>  
            <!-- end of Adding elements for  slides-->  

        </div>
        <!-- End of Wrapper for List of images  -->   



        <!-- Warapper for prev and next controls #means Carousel itself-->  
        <a class="left carousel-control" href="#my-slider" role ="button" data-slide ="prev">
            <span class="glyphicon glyphicon-chevron-left"   </span>
            <span class ="sr-only"> Previous</span>
        </a>                     
        <!--  End of Warapper for prev and next controls-->  

        <!-- Warapper for prev and next controls #means Carousel itself-->  
        <a class="right carousel-control" href="#my-slider" role ="button" data-slide ="next">
            <span class="glyphicon glyphicon-chevron-right"   </span>
            <span class ="sr-only"> Next</span>
        </a>                     
        <!--  End of Warapper for prev and next controls-->  

    </div>
    <!--  End of carousel  slider -->

 
@stop




@section('content')
 

    <!--  Start of 2 row section -->
    <div class="row">

        <!--  Start of Column section for slider -->
        <div class="col-sm-12">



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

 
@stop
















<br>
{{--Ending Inside Blade--}}

