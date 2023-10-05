<!DOCTYPE HTML>
<html>  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<body>
<form action="major_add.php" method="post">
    Ten chuyen nganh: <input type="text" name="name_major"> <br>
    ID: <input type="text" name="major_id"> <br>    
    <input type="submit">
</form>

</body>
</html>
