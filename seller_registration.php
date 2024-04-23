<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form data (you can add more validation as needed)
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    

   
    // Connect to your database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "milcow";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO seller(name, email, mobile, address, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $mobile, $address, $password);

    // Execute the statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
    <style>/* Form container */
.registration-form {
    width: 300px; /* Adjust width as needed */
    margin: 0 auto; /* Center the form horizontally */
}

/* Form elements */
.registration-form input[type="text"],
.registration-form input[type="email"],
.registration-form input[type="password"] {
    width: 100%; /* Make inputs full width */
    padding: 10px; /* Add padding */
    margin-bottom: 10px; /* Add margin between inputs */
    border: 1px solid #ccc; /* Add border */
    border-radius: 5px; /* Add border radius */
    box-sizing: border-box; /* Include padding and border in element's total width and height */
}

/* Submit button */
.registration-form button[type="submit"] {
    width: 100%; /* Make button full width */
    padding: 10px; /* Add padding */
    background-color: #4CAF50; /* Green background color */
    color: white; /* White text color */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border radius */
    cursor: pointer; /* Add cursor pointer */
}

/* Button hover effect */
.registration-form button[type="submit"]:hover {
    background-color: #45a049; /* Darker green background color on hover */
}
        </style>
</head>
<body>
    <header>
        <h1>Seller Registration</h1>
    </header>
    <div class="registration-form">
    <form method="post" action="sellerconnect.php">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email"> <!-- Ensure the name attribute is "email" -->
    <input type="text" name="mobile_number" placeholder="Mobile Number">
    <input type="text" name="addres" placeholder="Address"> <!-- Ensure the name attribute is "address" -->
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Submit</button>
</form>
    </div>
</body>
</html>