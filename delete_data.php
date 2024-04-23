<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";  // Replace with your actual password
$dbname = "milcow";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to delete account
function deleteAccount($conn, $accountId) {
    $sql = "DELETE FROM seller_info WHERE id = $accountId";

    if ($conn->query($sql) === TRUE) {
        echo "Account deleted successfully";
    } else {
        echo "Error deleting account: " . $conn->error;
    }
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if an account ID is provided
    if (isset($_POST['name'])) {
        // Get the account ID from the POST data
        $accountId = $_POST['name'];

        // Call the deleteAccount function
        deleteAccount($conn, $name);
    } else {
        echo "Account ID not provided";
    }
}

// Close the database connection
$conn->close();
?>
