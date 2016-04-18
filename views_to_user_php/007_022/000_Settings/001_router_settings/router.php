<?php
   
   echo "<br> start working router.php - Begin   ";

   $router = new AltoRouter();
   $router->map('GET','/','PageController@getShowHomePage','home');
   $router->map('GET','/register','PageController@getShowRegisterPage','register');
   $router->map('POST','/register','PageController@postShowRegisterPage','register_post');

   $router->map('GET','/login','PageController@getShowLogInPage','login');

  
   echo "<br> start working router.php - End   "; 
  
?>