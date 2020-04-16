<?php 
session_start();

    //if(isset($_SESSION["user"] && $_SESSION["user"]["rol"] == "Administrator" // je kan geen double "$_session" hebben op de lijn, je krijgt een foutmelding
    if(isset($_SESSION["user"])) {
        echo "<h1>Welkom ".$_SESSION["user"]["naam"]. "op het admingedeelte van de website</h1>";
        echo "<p><a href='login.php'>login</a></p>";    
    } else {
        header('location: login.php');
    }