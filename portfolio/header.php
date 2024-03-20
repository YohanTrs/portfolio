<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yohan Tors - Développeur Web</title>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="media/css/style.css">
</head>
<body>
    <header>
        <nav class="flex align-center justify-between">
            <img class="logo" src="./media/img/home + header + footer/logo.png" alt="Logo Yohan Tors">
            <ul class="flex menu-header justify-center">
                <li><a href="index.php">Qui suis-je</a></li>
                <li><a href="projects.php">Projets</a></li>
                <li><a href="resume.php">Parcours</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <img onclick="openClose()" class="burger mgh2" src="media/img/home + header + footer/bars-solid.svg" alt="Logo menu burger">
        </nav>
    </header>
    <?php
    session_start();
    ?>