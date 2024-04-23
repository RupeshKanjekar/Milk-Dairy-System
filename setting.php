<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        li {
            margin: 10px;
        }

        li a {
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            display: inline-block;
            padding: 10px;
            transition: all 0.3s ease;
        }

        li a:hover {
            color: #00f0ff;
            transform: scale(1.1);
            background-color: #333;
        }

        /* Animation for h1 */
        h1 {
            text-align: center;
            animation: colorChange1 5s infinite alternate;
        }

        /* Animation for h2 */
        h2 {
            text-align: center;
            animation: colorChange2 5s infinite alternate;
        }

        /* Animation for h3 */
        h3 {
            text-align: center;
            animation: colorChange3 5s infinite alternate;
        }

        /* Animation for h4 */
        h4 {
            text-align: center;
            animation: colorChange4 5s infinite alternate;
        }

        /* Animation for h5 */
        h5 {
            text-align: center;
            animation: colorChange5 5s infinite alternate;
        }

        /* Animation for h1 */
        @keyframes colorChange1 {
            0% {
                color: #fff;
            }
            50% {
                color: #00f0ff;
            }
            100% {
                color: #fff;
            }
        }

        /* Animation for h2 */
        @keyframes colorChange2 {
            0% {
                color: #fff;
            }
            50% {
                color: #ff00ff;
            }
            100% {
                color: #fff;
            }
        }

        /* Animation for h3 */
        @keyframes colorChange3 {
            0% {
                color: #fff;
            }
            50% {
                color: #ffff00;
            }
            100% {
                color: #fff;
            }
        }

        /* Animation for h4 */
        @keyframes colorChange4 {
            0% {
                color: #fff;
            }
            50% {
                color: #ff9900;
            }
            100% {
                color: #fff;
            }
        }

        /* Animation for h5 */
        @keyframes colorChange5 {
            0% {
                color: #fff;
            }
            50% {
                color: #00ff00;
            }
            100% {
                color: #fff;
            }
        }
    </style>
</head>
<body>
    <h1>Settings</h1>
    <ul>
        <li><h1><a href="contact_us.php">Contact Us</a></h1></li>
        <li><h2><a href="invite_friends.php">Invite Friends</a></h2></li>
        <li><h3><a href="invite_friends.php">Invite Friends</a></h3></li>
        <li><h4><a href="logout.php">LogOut</a></h4></li>
   
    </ul>
</body>
</html>
