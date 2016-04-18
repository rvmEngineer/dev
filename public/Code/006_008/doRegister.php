<?php

session_start();
require(__DIR__ "/../../vendor/autoload.php");
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$first_name="";
$last_name="";
$username="";
$verify_username="";
$password="";
$verify_password="";

$first_name=$_REQUEST['first_name'];
$last_name=$_REQUEST['last_name'];
$username=$_REQUEST['email_name'];
$verify_username=$_REQUEST['verify_email_name'];
$password=$_REQUEST['password'];
$verify_password=$_REQUEST['verify_password'];


  if (($first_name =="")
    ||($last_name =="")
    ||($username =="")
    ||($verify_username =="")
    ||($password =="")
    ||($verify_password =="")
    ||($last_name =="")){
    $true=false;
  }

  if(strlen($first_name) <3)
  {
    $okay=false;
  }
  if(strlen($last_name)<3)
  {
    $okay=false;
  }

  if($username !=$verify_username)
  {
    $okay=false;
  }

  if($password !=$verify_password)
  {
      $okay=false;
  }

  if ($okay==false)
  {
    $msg="you missed some of the form data. please re enter and try again";
    $_SESSION['msg']=$msg;
    echo " INSIDE if";
    echo $_SESSION['msg'];
    header("Location: register1.php");
    exit();
  }

  echo "First name:".$first_name."<br>";
  echo "Last name:".$last_name."<br>";
  echo "Username:".$username."<br>";
  echo "verify Username:".$verify_username."<br>";
  echo "password:".$password."<br>";
  echo "verify password:".$verify_password."<br>";
  echo strlen($last_name);
  echo "<br><br>";

  foreach ($_REQUEST as $name =>$value)
  {
     echo $name ."=" .$value ."<br>";
  }

?>
