<?php
        if($GLOBALS['test_echo_print']==true)
          echo "<br> start working router.php - Begin   ";

        $router = new AltoRouter();
        $router->map('GET','/','Name_Space\Page_Controllers\PageController@getShowHomePage','home');
        $router->map('GET','/register','Name_Space\Page_Controllers\PageController@getShowRegisterPage','register');
        $router->map('POST','/register','Name_Space\Page_Controllers\PageController@postShowRegisterPage','register_post');

        $router->map('GET','/login','Name_Space\Page_Controllers\PageController@getShowLogInPage','login');
        $router->map('GET','/testdb','Name_Space\Page_Controllers\PageController@getTestDB','testdb');

       if($GLOBALS['test_echo_print']==true)
           echo "<br> start working router.php - End   "; 
  
?>