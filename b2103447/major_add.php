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
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $majorId = $_POST["major_id"];
    $majorName = $_POST["name_major"];

    if(empty($majorName) || empty($majorId)) {
        echo ("Name va Id khong duoc de trong!");
    }
    else {
        $sql = "INSERT INTO major (id,name_major) VALUES ('$majorId','$majorName')";

        if($conn ->query($sql) === TRUE){
            echo "Them du lieu thanh cong";
        }
        else {
            echo "Loi!" . $sql . "<br>" . $conn->error;
        }
    }
}   
$conn->close();
