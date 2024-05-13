<?php
$servername = "localhost";
$username = "ricomtrc_caps4";
$password = "caps4#MdN@2779.6";
$database = "ricomtrc_caps4";

// Create connection
$conn = new mysqli('localhost','ricomtrc_caps4','caps4#MdN@2779.6','ricomtrc_caps4');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>