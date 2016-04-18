<?php
        session_start();

        require(__DIR__ . "/../../vendor/autoload.php");

        echo "<br>start.php working 1<br>";
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();  
        $router = new AltoRouter();
        echo "<br>start.php working 2<br>";


?>