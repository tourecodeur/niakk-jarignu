<?php
$dsn = 'mysql:host=localhost;dbname=niakk_jarignu';
$username = 'root';
$password = '';

try {
    $connexion = new PDO($dsn, $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connexion échouée : ' . $e->getMessage());
}

// Vérification des champs obligatoires
if (
    isset($_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['message']) &&
    !empty(trim($_POST['nom'])) &&
    !empty(trim($_POST['prenom'])) &&
    !empty(trim($_POST['telephone'])) &&
    !empty(trim($_POST['message']))
) {
    // Récupération des données
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $telephone = htmlspecialchars(trim($_POST["telephone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Requête SQL
    $sql = "INSERT INTO contact(nom, prenom, telephone, message) VALUES (:nom, :prenom, :telephone, :message)";

    try {
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':message', $message);
        $stmt->execute();

        echo '<script>alert("Message envoyé avec succès !"); window.location.href = "index.php";</script>';
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }

    $connexion = null;
} else {
    echo '<script>alert("Tous les champs sont obligatoires."); window.history.back();</script>';
}
?>
