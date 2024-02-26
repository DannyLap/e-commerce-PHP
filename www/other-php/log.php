<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "climbingzonedb";
$conn = "";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}