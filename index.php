<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DataBase Klimatologi</title>
        <link rel="stylesheet" href="Asset/style.css">
    </head>
    <body>
        <div class="sidenav">
            <div class="logo-side">
                <img src="Asset/pict/bmkg.png" alt="logo-bmkg" class="logo-bmkg">
                <h2>Database Klimatologi</h2>
            </div>
            <br>
            <a href="index.html">Home</a>
            <button class="dropdown-btn">Data Klimatologi</button>
            <div class="dropdown-container">
                <a href="">DMI</a>
                <a href="">IOD</a>
                <a href="">ONI</a>
                <a href="">RCP4.5</a>
                <a href="">RCP8.5</a>
            </div>
        </div>
    </body>
</html>