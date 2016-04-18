<?php 
 
    echo "This worked DIRECTORY" ;
 
    $OK = true;

    $first_name_name_php="";
    $last_name_name_php= "";
    $email_name_name_php="";
    $verify_email_name_php="";
    $password_name_php ="";
    $verify_password_name_php="";

    $first_name_name_php=$_REQUEST['first_name_name'];
    $last_name_name_php=$_REQUEST['last_name_name'];
    $email_name_name_php=$_REQUEST['email_name_name'];
    $verify_email_name_php=$_REQUEST['verify_email_name'];
    $password_name_php=$_REQUEST['password_name'];
    $verify_password_name_php=$_REQUEST['verify_password_name'];
    //$whatever = $_REQUEST['whatever'];
 

    echo "<br>User Name send is ::".$first_name_name_php;

    if( ($first_name_name_php=="") 
       ||($last_name_name_php=="")
       ||($email_name_name_php=="")
       ||($verify_email_name_php=="")
       ||($password_name_php=="")
       ||($verify_password_name_php=="")

      )
    {
        $OK=false;

    }

    if($email_name_name_php !=$verify_email_name_php)
    {
        $OK=false;
    }

    if($password_name_php !=$verify_password_name_php)
    {
        $OK=false;
    }


    if(strlen($first_name_name_php)<3)
    {
        $OK=false;
    }

    if( $OK==false)
    {
        $msg ="You have made some errors in the form . Please re enter and Try again";
        $_SESSION['ERROR_MESSAGE']=$msg;
        
        header("Location:/register");
        exit();

    }


    echo "<br>Last Name send is ::".$last_name_name_php;
    echo "<br>Email   send is ::".$email_name_name_php;
    echo "<br>Email Verify  send is ::". $verify_email_name_php;
    echo "<br>password   send is ::".$password_name_php;
    echo "<br> Verify Password send is ::".$verify_password_name_php;
       
    echo "<br>#######################################<br>";

    foreach($_REQUEST as $name => $value)
    {
        echo $name."=".$value."<br>";
    }

?>