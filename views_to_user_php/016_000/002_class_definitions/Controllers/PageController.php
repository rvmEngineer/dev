<?php namespace Name_Space\Controllers;


 


   class PageController extends BaseController
   {
  
       public  function getShowHomePage()
       {
           //It is a class so it will be called as object. 
          // include(__DIR__."/../../001_pages/000_Site_Pages/home.php");  
          // echo $this->twig->render('001_pages/000_Site_Pages/home.html');
           $_SESSION['test']="<strong> I hope this will work <strong>";
          // echo $this->blade->render("001_pages/000_Site_Pages/home",['test'=>'Hello again']);
           echo $this->blade->render("001_pages/000_Site_Pages/home");
       } 
       
      
   }
       
?>