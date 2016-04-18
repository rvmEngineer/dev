<?php
    echo "<br>Database  Model User   User.php - Begin<br>";
    use \Illuminate\Database\Eloquent\Model as Eloquent; 
    echo "<br>Database  Model User    User.php - End<br>";
  

    class User extends Eloquent
    {
        public $timestamps=false;
    }
    
?>