<?php

$name = $_POST['name'];

$mobile_number = $_POST['mobile_number'];
$addres = $_POST['addres']; // corrected variable name
$password = $_POST['password'];
$email = $_POST['email'];

// Validate email
if (empty($email)) {
    echo "<script>alert('Error: Email field cannot be empty');</script>";
    // Handle the error accordingly (redirect back to the form, display an error message, etc.)
} else {
    // Proceed with the database insertion
}

$conn = new mysqli('localhost', 'root', '', 'milcow');
if ($conn->connect_error) {
    echo $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO seller_info (name, email, mobile_number, addres, password) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("ssiss", $name, $email, $mobile_number, $addres, $password);

    $execval = $stmt->execute();

    $stmt->close();
    $conn->close();

    if ($execval) {
        header("location: login.php");
    } else {
        echo "<script>alert('Error: Data not added successfully');</script>";
    }
}
?>