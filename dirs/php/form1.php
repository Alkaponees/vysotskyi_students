<?php

$hostname="localhost"; 
$username="vysotskyi"; 
$password="Vys0tsky!";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "students";
$conn= new mysqli($hostname,$username,$password,$dbname);
 if(!$conn){
    die ("Connection failed: "). mysqli_connect_error();
 }else{
  echo "Connected successfully";

$user_name=$_POST["user_name"];
$phone=$_POST["phone"];
$institute=$_POST["institute"];
$gender=$_POST["gender"];
$course=$_POST["course"];


$quer = "INSERT INTO $usertable (name,phone,institute,course,gender) VALUES
 ('$user_name','$phone','$institute','$course','$gender');";
if ($conn->query($quer) === TRUE) {
    echo "New record created successfully";
$sql="SELECT * FROM $usertable ;";
$result2 = $conn->query($sql);

// Generate an HTML table using PHP
if ($result2->num_rows > 0) {
  echo "<table>";
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["institute"]."</td><td>".$row["course"]."</td><td>".$row["gender"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



 }
print '<a class="btn" href="../../index.html">Back to main menu</a>';
mysqli_close($conn);

?>

