<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milk Dairy Registration</title>
    <style>
        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
        }
        
        /* Apply box-sizing border-box globally */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
        
        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        
        /* Container styles */
        .container {
            max-width: 400px;
            margin: 100px auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Heading styles */
        h2 {
            margin-bottom: 20px;
            color: #333333;
        }
        
        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
        }
        
        /* Input styles */
        input[type="email"],
        input[type="password"],
        input[type="submit"],
        button,
        select {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 16px;
        }
        
        input[type="email"],
        input[type="password"],
        select {
            width: calc(100% - 24px); /* Subtract padding and border width */
        }
        
        input[type="submit"],
        button {
            background-color: #4caf50;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        input[type="submit"]:hover,
        button:hover {
            background-color: #45a049;
        }
        
        /* Dropdown styles */
        select {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            font-size: 16px;
            appearance: none; /* Remove default arrow */
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="%23333"><path d="M7 7l3-3 3 3m0 6l-3 3-3-3" /></svg>'); /* Custom arrow */
            background-repeat: no-repeat;
            background-position: right 12px center; /* Position the arrow */
            background-color: #ffffff;
            cursor: pointer;
        }
        
        /* Dropdown hover and focus styles */
        select:hover,
        select:focus {
            border-color: #6c757d;
        }
        
        /* Dropdown options styles */
        select option {
            padding: 12px;
            font-size: 16px;
            background-color: #ffffff;
            color: #333333;
        }
        
        /* Dropdown arrow color on hover */
        select:hover::-ms-expand {
            color: #6c757d;
        }
        
        /* Remove default arrow in Edge and IE */
        select::-ms-expand {
            display: none;
        }
        
        /* Responsive styles */
        @media (max-width: 480px) {
            .container {
                width: 90%;
                margin: 50px auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Milk Dairy Registration</h1>
    </header>
    <form action="service.php" method="post">
        <div class="registration-form">
            <select id="userType" name="userType">
                <option value="buyer">Milk Buyer</option>
            </select>
            <input type="email" name="email" id="email" placeholder="Email ID" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            
            <button onclick="redirectSignup()" type="button">Sign Up</button>
            <input type="submit" value="Login">
        </div>
    </form>

    <script>
        function redirectSignup() {
            window.location.href = "buyer_registration.php";
        }
    </script>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Connect to your database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // Assuming your password is blank
    $dbname = "milcow";

    // Create connection
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to check if user exists
    $sql = "SELECT * FROM buyer_info WHERE email = ? AND password = ?";
    
    // Prepare statement
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("ss", $email, $password);
    
    // Execute statement
    $stmt->execute();
    
    // Get result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, redirect to service.php
        header("Location: service.php");
        exit();
    } else {
        // No user found with provided credentials
        echo "Invalid email or password. Please try again.";
    }

    // Close statement
    $stmt->close();
    
    // Close connection
    $conn->close();
}
?>

</body>
</html>

