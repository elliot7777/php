<?php


   $USERNAME = 'root';
   $PASSWORD = 'roottoor';
   $database = new PDO('mysql:host=localhost;dbname=facebook;',$USERNAME,$PASSWORD);   
   $yahya = $database -> prepare('select * from fbk');
   $yahya ->execute();
   $yahya = $yahya-> fetch(PDO::FETCH_ASSOC);
   var_dump($yahya);
   echo '<h1>'. $yahya['password'] . '</h1>';
?>