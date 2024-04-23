<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data (you can add more validation as needed)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $dairy_name = $_POST['dairy_name'];
    $password = $_POST['password'];

    // Connect to your database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // Changed variable name to avoid conflict with form field
    $dbname = "milcow";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO buyer_info (name, email, mobile, address, dairy_name, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $mobile, $address, $dairy_name, $password);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Form submission method not recognized.";
}
?>
