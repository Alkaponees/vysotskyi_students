<?php
include_once 'info.php';
 
    
$user_name=$_POST["user_name"];
$phone=$_POST["phone"];
$institute=$_POST["institute"];
$gender=$_POST["gender"];
$course=$_POST["course"];
 
     $sql = "INSERT INTO users (name,phone,institute,course,gender) VALUES ('$user_name','$phone','$institute','$course','$gender')";
 
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
     print '<a class="btn" href="../../index.html">Back to main menu</a>';
 
?>