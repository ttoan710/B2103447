<!DOCTYPE HTML>
<html>  
<body>
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

$query = "SELECT * FROM major";
$result = $conn->query($sql);
?>

<form action="luu.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    Birthday: <input type="date" name="birth"><br>
    Major-ID: 
        <select name="major_id">
            <?php
            while($major = $result->fetch_assoc()) {
                echo '<option value="' . $major['id'] . '">' . $major['id'] .'</option>';
            }
            ?>
        </select>
    <input type="submit">
</form>

</body>
</html>
