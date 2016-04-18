<?php
  echo "<br>Database file Start db.php - Begin<br>";
  use \Illuminate\Database\Capsule\Manager as Capsule;
  $capsule = new Capsule;
  $capsule->addConnection([
      'driver' => 'DB_DRIVER',
      'host'   =>'DB_HOST',      
      'database' =>'DB_DATABASE' ,
      'username' =>'DB_USER',
      'password' =>'DB_PASS',
      'charset' => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    =>''      
  ]);
  
// Make this Capsule instance available globally via static methods... (optional)
  $capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
  $capsule->bootEloquent();

  //charset what character set we are storing in
  //collation datbase charcter set format
  echo "<br>Database file Start db.php - End<br>";
?>