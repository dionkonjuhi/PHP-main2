<?php
//   $sports1= "Football";
//   $sports2= "Basketball";
//   $sports3= "Handball";
//   $sports4= "Voleyball";

//   $sports=array('Football' , 'Basketball' , 'Handball' , 'Voleyball');

  $sports= ['Football' , 'Basketball' , 'Handball' , 'Voleyball'];
//   echo $sports[0];
//   echo end($sports);
//   echo count($sports);

//   for($i =0; $i<4; $i++){
//     echo $sports[$i]. "\n";
//   }

  $len = count($sports);
  
  for($i =0; $i< $len; $i++){
    echo $sports[$i]. "\n";
  }

?>