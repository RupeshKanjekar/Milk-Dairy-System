<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout Page</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f3f3f3;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.logout-btn {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.logout-btn:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>

<div class="container">
    <h2>Welcome to Dairy Milk Website</h2>
    <button id="logoutBtn" class="logout-btn">Logout</button>
</div>

<script>
document.getElementById("logoutBtn").addEventListener("click", function() {
    // You can perform any logout related operations here such as destroying session, redirecting to login page, etc.
    // For demonstration, let's just redirect to the login page
    window.location.href = "index.php";
});
</script>

</body>
</html>