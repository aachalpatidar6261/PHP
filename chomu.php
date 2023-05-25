<?php
//Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "jquery";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Insert data into the table
$name = "John Doe";
$age = 18;
$grade = "A";

$sql = "INSERT INTO students (name, age, grade) VALUES ('$name', '$age', '$grade')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>