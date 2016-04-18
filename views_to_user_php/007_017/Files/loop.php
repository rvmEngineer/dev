<?php
  $array = [
      
      'first_name' => 'Rocky',
      'last_name' => 'Rambo',
      'age' => 21,
      
      ];

  foreach($array as $name => $value)
  {
      echo $name."=".$value."<br>";
  }

?>