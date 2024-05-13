<?php
// Database connection parameters
$servername = "localhost";
$username = "ricomtrc_caps4";
$password = "caps4#MdN@2779.6";
$dbname = "ricomtrc_caps4";

// Create connection
$conn = new mysqli($localhost $ricomtrc_caps4, $caps4#MdN@2779.6, $ricomtrc_caps4);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['mf-text'];
$identificationNumber = $_POST['mf-Identification Number'];
$Name = $_POST['mf-Name'];
$email = $_POST['mf-Email'];
$message = $_POST['mf-textarea'];

// SQL query to insert data into the database
$sql = "User (id, Identification Number, Name, Email, Message) VALUES ('$id','$Identification Number', '$Name', '$Email', '$Message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
