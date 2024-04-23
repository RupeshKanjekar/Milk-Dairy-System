<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Registration</title>
    <style>
        /* Form container */
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
        <h1>Buyer Registration</h1>
    </header>
    <div class="registration-form">
        <form method="post" action="buyer_connect.php">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email ID" required>
            <input type="text" name="mobile" id="mobile" placeholder="Mobile Number" required>
            <input type="text" name="address" id="address" placeholder="Address" required>
            <input type="text" name="dairy_name" id="dairy_name" placeholder="Dairy Name" required>
            <input type="password" name="password" id="password" placeholder="Set Password" required>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
