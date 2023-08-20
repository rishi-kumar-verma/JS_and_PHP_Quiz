<?Php
////// Your Database Details here /////////
$servername = "localhost";
$dbname = "quiz";  // Your database name
$username = "root";                  //  Login user id 
$password = "";                  //   Login password

/// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>