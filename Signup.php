
<?php
include 'Connection.php';
if(isset($_POST['submit']))
{
  $Name=$_POST['Name'];
  $Password=$_POST['Password'];

$sql="insert into details(Name,Password) values('$Name','$Password')";
if(mysqli_query($conn,$sql))
{

    echo"<script>alert('new record entered')</script>";
    //header("location : secondpage.html");
      header("Location:secondpage.html");
    

}
else
{
    echo"error".msqli_error($conn);
}
mysqli_close($conn);
}
?>