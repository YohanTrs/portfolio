<?php
session_start();
include("constant_bdd.php"); // Assurez-vous que cette inclusion définit bien $conn

// Récupération des variables $_POST
$name = isset($_POST["name"]) && !empty($_POST["name"]) ? htmlspecialchars($_POST["name"]) : NULL;
$company = isset($_POST["company"]) && !empty($_POST["company"]) ? htmlspecialchars($_POST["company"]) : NULL;
$mail = isset($_POST["mail"]) && !empty($_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : NULL;
$object = isset($_POST["object"]) && !empty($_POST["object"]) ? htmlspecialchars($_POST["object"]) : NULL;
$message = isset($_POST["message"]) && !empty($_POST["message"]) ? htmlspecialchars($_POST["message"]) : NULL;

// Vérification si toutes les données sont présentes
if (($name == NULL) || ($company == NULL) || ($mail == NULL) || ($object == NULL) || ($message == NULL)) {
    echo "Toutes les données sont requises.";
    exit(); // Arrêt du script si une donnée est manquante ou vide
}

try {
    // Préparation et exécution de la requête d'insertion
    $req = $conn->prepare("INSERT INTO contact_form (name, company, mail, object, message) VALUES (:name, :company, :mail, :object, :message)");
    $req->execute([
        'name' => $name,
        'company' => $company,
        'mail' => $mail,
        'object' => $object,
        'message' => $message
    ]);
    
    $_SESSION['message']= 'Message envoyé';
    header("Location: contact.php");
    exit(); // Arrêt du script après redirection
} catch (PDOException $e) { 
    // Gestion de l'erreur
    echo "Erreur : " . $e->getMessage();
    echo "<a href='index.php'>Revenir sur la page d'accueil</a>";
    exit();
}
?>
