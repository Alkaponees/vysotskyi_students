<?php
$hostname="localhost"; 
$username="vysotskyi"; 
$password="vysotskyi";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "students";
$conn= new mysqli($hostname,$username,$password,$dbname);
 if(!$conn){
    die ("Connection failed: "). mysqli_connect_error();
 }
echo "Connected successfully";


$insitute=$_POST["university"];
$gender=$_POST["gender"];


$sql = "SELECT * FROM $usertable WHERE institute='$insitute' AND gender='$gender';";

// Execute the query and check for errors
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>".$row["user_name"]."</td><td>".$row["phone"]."</td><td>".$row["institute"]."</td><td>".$row["course"]."</td><td>".$row["gender"]."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
// Close the MySQL database connection
mysqli_close($conn);
print '<a href="../../index.html">Back to main menu</a>';
?>