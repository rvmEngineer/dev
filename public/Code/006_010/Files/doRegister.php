<?php 

    echo "This worked ";
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


    echo "<br>User Name send is ::".$first_name_name_php;
    
    if(strlen($first_name_name_php)<3)
    {
        header("Location:/Code/006_010/register0_adv.html");
         exit();
    }
    echo "<br>Last Name send is ::".$last_name_name_php;
    echo "<br>Email   send is ::".$email_name_name_php;
    echo "<br>Email Verify  send is ::". $verify_email_name_php;
    echo "<br>password   send is ::".$password_name_php;
    echo "<br> Verify Password send is ::".$verify_password_name_php

?>