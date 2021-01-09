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
        <div class="navbar">
            <div class="logo-side">
                <img src="Asset/pict/bmkg.png" alt="logo-bmkg" class="logo-bmkg">
            </div>
            <a href="index.php">Home</a>
            <a href="about.html">About</a>
        </div>
        
        <div class="content">
            <button class="dropdown-btn">Data Klimatologi</button>
            <div class="dropdown-container">
                <a href="">DMI</a>
                <a href="">IOD</a>
                <a href="">ONI</a>
                <a href="">RCP4.5</a>
                <a href="">RCP8.5</a>
            </div>
            <button class="dropdown-btn">Quality Control</button>
            <div class="dropdown-container">
                <a href="">Range Check</a>
                <a href="">Step Check</a>
            </div>
        </div>

        <div class="footer">
            <h7>Dibuat untuk memenuhi tugas mata kuliah database MKG</h7>
        </div>
    </body>
</html>