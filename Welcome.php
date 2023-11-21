<?php
session_start();
$_SESSION;
include("Link.php");
include("functions.php");
$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKIRIA BOOKS</title>
    <link rel="stylesheet"href="NKIRIA BOOKS.css">
</head>
<body>
    <h1 style="font-size:40px;">NKIRIA BOOKS </h1>
    <div class="header">
        <nav>
    <ul class="no-bullets">
        <li><a style="font-size: x-large;" href="#">Services</a></li>     

        <li><a  style="font-size: x-large;"  href="#">About Us</a></li>

        <li><a  style="font-size: x-large;"  href="#">Contact Us</a></li>

        <li><a  style="font-size: x-large;"  href="#">Refer a Friend</a></li>
    </ul>
    </nav>
    </div>
    <p style="color:black; font-size: 90px;">EXPLORE A WORLD THAT EMBRACES READING</p>
    <a a class="join-button" href="#">Join Our Community</a>
</body>
</html>
