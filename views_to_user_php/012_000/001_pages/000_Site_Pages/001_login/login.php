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
                    <a class="navbar-brand" href="/">Geometry Graphics Factory</a>
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

        
        
        
        <div class="container">
           
            <div class="row">
            <br><br>
            </div>
 
            <div class="row">
                <div class="col-md-2  ">

                </div>
                <div class="col-md-8">
                    <h1>Log in  </h1>
                    <hr>
                    <form class="form-horizontal">

                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="username" placeholder="user@example.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-md-2">

                </div>

            </div>

        </div>
    </body>

</html>
