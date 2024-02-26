<?php
session_start();

$host = "localhost";
$dbname = "climbingzonedb";
$user = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données: " . $e->getMessage());
}    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $user_password = $_POST["user_password"];


    $stmt = $pdo->prepare("SELECT user_password FROM user WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $storedPassword = $stmt->fetchColumn();

    // Enregistre le token dans la base de données
    $stmt = $pdo->prepare("UPDATE user SET user_token = :token WHERE username = :username");
    $stmt->bindParam(':token', $token);
    $stmt->bindParam(':username', $username);
    $stmt->execute();


    if ($storedPassword !== false && password_verify($password, $storedPassword)) {
        $_SESSION['user_connected'] = true;
        $_SESSION['username'] = $username;
        echo "Connexion réussie!";
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }

    header("Location: /www/connected.php");
    exit;

}
