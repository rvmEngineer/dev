<?php namespace Name_Space\Controllers;


        use Name_Space\Validation\Validator;

        class BaseController
        {
                protected $loader;
                protected $twig;

                public function __construct()
                {
                    // Dont look at psr4 autoloader    
                    $this->loader = new \Twig_Loader_Filesystem(__DIR__."/../../");  
                    $this->twig =new \Twig_Environment($this->loader,[
                        'cache' =>false,
                        'debug' => true      

                    ]);

                }



        }

?>