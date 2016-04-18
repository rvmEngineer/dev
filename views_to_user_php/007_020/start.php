<?php
        session_start();

require(__DIR__ . "/../../vendor/autoload.php");

        echo "Index activated";

        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();  

        $router = new AltoRouter();
?>