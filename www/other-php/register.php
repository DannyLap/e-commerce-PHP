<?php 
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
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $confirm_password = $_POST["confirm_password"];

    if ($user_password != $confirm_password) {
        echo "The passwords do not match.";
        exit;
    }

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM user WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $usernameCount = $stmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM user WHERE user_email = :user_email");
    $stmt->bindParam(':user_email', $user_email);
    $stmt->execute();
    $emailCount = $stmt->fetchColumn();

    if ($usernameCount > 0) {
        echo "This username allready used.";
    } elseif ($emailCount > 0) {
        echo "This email allready used.";
    } else {

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO user (username, user_email, user_password) VALUES (:username, :user_email, :user_password)";

        $stmt = $pdo->prepare($sql);

        
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':user_password', $user_password);

        if ($stmt->execute()) {
            echo "Registration successful. Please check your email to activate your account.";
            header("Location: /www/logIn.php");
        } else {
            echo "Error during registration. Please try again.";
        }
    }
}