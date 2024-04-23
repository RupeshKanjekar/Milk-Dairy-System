<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'milcow');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the table exists
$tableExists = $conn->query("SHOW TABLES LIKE 'contact_us'")->num_rows > 0;
if (!$tableExists) {
    die("Table 'contact_us' does not exist in the 'milcow' database.");
}

$stmt = $conn->prepare("INSERT INTO contact_us (name, email, message) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("sss", $name, $email, $message);

$execval = $stmt->execute();
if (!$execval) {
    die("Error executing query: " . $stmt->error);
}

echo "Data added successfully";

$stmt->close();
$conn->close();
?>
