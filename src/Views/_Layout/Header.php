<?php
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/styling/main.css">
        <link rel="stylesheet" href="/public/styling/containers.css">
        <link rel="stylesheet" href="/public/styling/main-navigation.css">
        <link rel="stylesheet" href="/public/styling/home/home.css">
        <link rel="stylesheet" href="/public/styling/home/home-cards.css">
        <link rel="stylesheet" href="/public/styling/projects/projects.css">
        <link rel="stylesheet" href="/public/styling/general/buttons.css">
        <title>Bollsjen</title>
    </head>
    <body>
        <nav class="main-navigation">
            <div class="navigation-container">
                <a class="navigation-home-dims" href="/">
                    <img src="/public/img/mig/DSC00168.jpg">
                    <h3>Magnus Boll</h3>
                </a>
                <div class="navigation-items">
                    <a href="/projects">Projekter</a>
                    <a href="/projects">Om mig</a>
                    <a href="/projects">Kontakt</a>
                </div>                
            </div>
        </nav>