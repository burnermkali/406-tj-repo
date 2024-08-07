<?php
// Create a connection to the database
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the content of the page
$content = '
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>406 Solutions</title>
        <style>
            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #000;
            }
            .logo {
                text-align: center;
            }
            .logo img {
                max-width: 100%;
                height: auto;
            }
            .container {
                background-color: #FFFFFF;
                padding: 20px;
                border: 1px solid #ddd;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
            .heading {
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .description {
                font-size: 16px;
                color: #666;
                margin-bottom: 20px;
            }
            .button {
                background-color: #4CAF50;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            .button:hover {
                background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <img src="MicrosoftTeams-image (19).png" alt="406 Solutions Logo">
        </div>
        <div class="container">
            <h1 class="heading">Welcome to 406 Solutions</h1>
            <p class="description">We provide innovative solutions for personal credit needs.</p>
            <form action="submit.php" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <input type="submit" value="Get Started" class="button">
            </form>
        </div>
    </body>
    </html>
';

// Print the content
echo $content;
?>
