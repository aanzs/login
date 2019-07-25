<?php

// ini untuk nambah data ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_level";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (nama, alamat, jenis_kelamin, username, password, level)
VALUES ('".$_POST['nama']."', '".$_POST['alamat']."', '".$_POST['jenis_kelamin']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['level']."')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("location:index.php");
?>