<?php namespace Name_Space\Controllers;


        use Name_Space\Validation\Validator;

        use duncan3dc\Laravel\BladeInstance;
 
        class BaseController
        {
             
                protected $loader;
                protected $twig;
            
                protected $blade;

                public function __construct()
                {
                    // Dont look at psr4 autoloader    
                    $this->loader = new \Twig_Loader_Filesystem(__DIR__."/../../");  
                    $this->twig =new \Twig_Environment($this->loader,[
                        'cache' =>false,
                        'debug' => true      

                    ]);
                    
                    
                    $this->blade = new BladeInstance(__DIR__."/../../", __DIR__."/../../003_cache_blade");

                } 

       
           

           

        }

?>