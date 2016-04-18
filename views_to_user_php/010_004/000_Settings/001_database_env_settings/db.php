<?php
  echo "<br>Database file Start db.php - Begin<br>";
  use \Illuminate\Database\Capsule\Manager as Capsule;
  $capsule = new Capsule;
  $capsule->addConnection([
      'driver'    => getenv( 'DB_DRIVER'),
      'host'      => getenv( 'DB_HOST'),      
      'database'  => getenv( 'DB_DATABASE'),
      'username'  => getenv( 'DB_USER'),
      'password'  => getenv( 'DB_PASS'),
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    =>''      
  ]);
  
  $capsule->setAsGlobal();
  $capsule->bootEloquent();

  //charset what character set we are storing in
  //collation datbase charcter set format
  echo "<br>Database file Start db.php - End<br>";
?>