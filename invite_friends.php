<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invite Friends</title>
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #fff;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 20px;
        }
        .share-button {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: #00f0ff;
            color: #000;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .share-button:hover {
            background-color: #0077b6;
        }
        .symbol {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Invite Friends</h1>
        <p>Invite your friends to join us by sharing this link:</p>
        <input type="text" id="inviteLink" value="https://example.com/invite" readonly>
        
        <button class="share-button" onclick="shareCopy()"><span class="symbol">&#x1F4CB;</span> Copy Link</button>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fexample.com%2Finvite" class="share-button" target="_blank"><span class="symbol">&#x1F4F1;</span> Share on Facebook</a>
        <a href="whatsapp://send?text=Join%20us%20at%20https%3A%2F%2Fexample.com%2Finvite" class="share-button"><span class="symbol">&#x1F4F1;</span> Share on Whatsapp</a>

    </div>

    <script>
        function shareBluetooth() {
            // Code to share via Bluetooth
            alert("Sharing via Bluetooth");
        }

        function shareCopy() {
            var copyText = document.getElementById('inviteLink');
            copyText.select();
            document.execCommand("copy");
            alert("Link copied to clipboard");
        }
    </script>
</body>
</html>
