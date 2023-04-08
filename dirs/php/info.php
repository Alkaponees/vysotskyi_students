<?php
$hostname="localhost"; 
$username="vysotskyi"; 
$password="Vys0tsky!";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "students";
$conn=mysqli_connect($host,$username,$password,"$dbname");
if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
