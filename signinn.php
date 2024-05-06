<?php
include 'Connection.php';  // Assuming Connection.php establishes a database connection

if (isset($_POST['submit'])) {
  $Name = mysqli_real_escape_string($conn, $_POST['Name']);  // Escape user input
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $sql = "SELECT * FROM details WHERE Name='$Name' AND Password='$password'";  // Improved query
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    // Sign-in successful (redirect or display success message)
    echo "<script>alert('Sign-in successful!') </script>";
   header("Location:test.html");
  // Replace with your desired action
  } else {
    // Sign-in failed (display error message)
    echo "Invalid username or password.";
  }




  // ... (Query the database to check if username and password match a user)
  // ... (If successful, redirect or display success message)
  // ... (Otherwise, handle failed sign-in and display an error message)
}
?>
