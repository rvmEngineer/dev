<?php namespace Name_Space\Models\Database;
    
    if($GLOBALS['test_echo_print']==true)
      echo "<br>Database  Model User   User.php - Begin<br>";

    use \Illuminate\Database\Eloquent\Model as Eloquent; 

   
  

    class User extends Eloquent
    {
        public $timestamps=false;
    }

    if($GLOBALS['test_echo_print']==true)
       echo "<br>Database  Model User    User.php - End<br>";
    
?>