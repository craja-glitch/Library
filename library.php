
<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "librarydb";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}
?>
