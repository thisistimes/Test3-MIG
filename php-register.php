<?php
include("connect.php");
$user = $_POST["user"];
$pass = $_POST["pass"];

$sql = "INSERT INTO login (email, password)
VALUES ('".$user."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>