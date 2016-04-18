<?php
        if($GLOBALS['test_echo_print']==true)
          echo "<br> start working router.php - Begin   ";

        $router = new AltoRouter();
        $router->map('GET','/','Name_Space\Controllers\PageController@getShowHomePage','home');
        $router->map('GET','/register','Name_Space\Controllers\RegisterController@getShowRegisterPage','register');
        $router->map('POST','/register','Name_Space\Controllers\RegisterController@postShowRegisterPage','register_post');

        $router->map('GET','/login','Name_Space\Controllers\RegisterController@getShowLogInPage','login');
  
       if($GLOBALS['test_echo_print']==true)
           echo "<br> start working router.php - End   "; 
  
?>