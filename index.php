<?php 
session_start();
include("connection.php");
include("function.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1,700&display=swap&family=Roboto:ital,wght@0,300;0,400;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/scss/style.css">
    <title>Khimatu</title>
</head>
<body>
    <div class="xbs">
        <div class="navbar">
            <ul>
                <li><a href="/index.html">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li> <a href="logout.php">Log out</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>KIMATU-SNEAKERS</h1>
            <h4>A journey begins with the perfect pair</h4>
            <p><i>The shoe fits, buy another one just like it!!</i></p>
                <a href="/Orderform.html" target="_blank">
                <button type="button"> <span></span>ORDER-HERE</button></a>
            </div>
        </div>
</body>
</html>