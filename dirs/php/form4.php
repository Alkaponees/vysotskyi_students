<?php
$hostname="localhost"; 
$username="vysotskyi"; 
$password="Vys0tsky!";
/*Ім'я бази даних*/
$dbname="vysotskyi_students";
/*Ім'я таблиці в базі даних*/
/* Створити з'єднання */ 
$usertable = "students";

$user_name=$_POST["user_name"];
$institute=$_POST["institute"];

$conn= new mysqli($hostname,$username,$password,$dbname);
 if(!$conn){
    die ("Connection failed: "). mysqli_connect_error();
 }else{
  echo "Connected successfully";
  $quer1="SELECT * FROM $usertable WHERE name='$user_name' AND institute = 'institute';";
  
  // Execute the query and check for errors
  $result = $conn->query($quer1);
  if ($result->num_rows > 0) {
      echo "<table>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_name"]."</td><td>".$row["phone"]."</td><td>".$row["institute"]."</td><td>".$row["course"]."</td><td>".$row["gender"]."</td></tr>";
      }
      echo "</table>";
      $quer2="DELETE FROM $usertable WHERE name='$user_name' AND institute ='$institute';";
      if ($conn->query($quer2) === TRUE) {
          echo " Record deleted successfully";
          
          print '<form method=post action="form1.php">'; 
          print'<br><b>Enter student name:</b>'; 
          print'<br><input id ="user_name" name="user_name" value="" size=30>';
          print'<br><b>Enter student phone number:</b>'; 
          print'<br><input id ="phone" name="phone" value="" size=30>';
          print'<br><br><b>Enter student institute</b>';
          print'<br><input id ="institute" name="institute" value="" size=50>'; 
          print'<br><br><b>Enter student course</b> ';
          print'<br><input id ="course" name="course" value="" size=50>' ;
          print'<br><br><b>Enter student current gender</b> ';
          print'<br><input id ="gender" name="gender" value="" size=20>' ;
          print'<br><br><input type="submit" value="Register">' ;
          print'</form>';
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          print '<a class="btn" href="../../index.html">Back to main menu</a>';
        }
     

    } else {
      echo "0 results";
    }
  
  
  // Close the MySQL database connection
  }
print '<a class="btn" href="../../index.html">Back to main menu</a>';  
mysqli_close($conn);
?>