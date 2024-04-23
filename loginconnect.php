<?php
// Database connection
$host = "localhost"; // Change this to your database host
$user = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "milcow"; // Change this to your database name

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input (make sure to sanitize user inputs to prevent SQL injection)
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$userType = $conn->real_escape_string($_POST['userType']);

// Define table based on user type (avoiding SQL injection using prepared statements)
$table = ($userType == 'seller') ? 'seller_info' : 'buyer_info';

// Prepare SQL query using prepared statements
$sql = "SELECT * FROM $table WHERE email=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Redirect to home page if login is successful
    header("Location: home.php");
    exit();
} else {
    echo "Invalid email or password";
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>
