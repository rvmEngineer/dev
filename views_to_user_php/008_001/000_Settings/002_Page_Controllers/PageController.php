<?php

   class PageController
   {
       public  function getShowHomePage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/home.php");  
       }
       
       public  function getShowRegisterPage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/register0_adv.php");  
       }
       
       public  function postShowRegisterPage()
       {
            echo "posted";
           //It is a class so it will be called as object. 
            include(__DIR__."/../../001_pages/000_Site_Pages/000_registration/Files/doRegister.php");  
       }


       public  function getShowLoginPage()
       {
           //It is a class so it will be called as object. 
           include(__DIR__."/../../001_pages/000_Site_Pages/001_login/login.php");  
       }

       public  function getTestDB()
       {
           //It is a class so it will be called as object. 
           //include(__DIR__."/../../001_pages/000_Site_Pages/001_login/login.php");  
           echo "<br> Database test working Start <br>";
           try
           {
               $conn = new PDO("pgsql:host=localhost dbname=test","postgres" ,"secret");
           }
           catch(PDOException $pe)
           {
               die("connection Error :".$pe->getMessage());
           }
           echo "<br> Database test working End <br>";
           
           $first_name ="";
/*           
           $sql =
            "
            select  * from users 
            
            ";
           
           $stmt = $conn->prepare($sql);
           $stmt->execute();
           $rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
           var_dump($rows);
           exit();
 */
           
           $sql =
               "
            select  * from users where id =1

            ";

           $stmt = $conn->prepare($sql);
           $stmt->execute();
           $rows= $stmt->fetchAll(PDO::FETCH_ASSOC);
           
           foreach($rows as $row ) 
           {
               $first_name = $row['first_name'];
           }
           
           echo "First name ".$first_name;
           
           exit();

       }

   }
       
?>