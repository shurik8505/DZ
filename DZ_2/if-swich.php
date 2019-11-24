<?php

$action = 'JUMP';

if ($action == 'JUMP') {

   echo "Мне нравится пригать.";

} elseif ($action == 'SWEEM') {

   echo "Я люблю плавать.";

} elseif ($action == 'FLY') {

   echo "Хотел бы научиться летать.";

}   

  swich ($action) {

    case 'JUMP':
     echo "Мне нравится прыгать.";
      break;

    case 'SWEEM':
     echo "Я люблю плавать.";
      break;

    case 'FLY':
     echo "Хотел бы научится летать.";
      break; 

  }

  ?>