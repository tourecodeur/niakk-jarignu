<?php
// Connexion à la base de données avec PDO
$dsn ='mysql:host=localhost;dbname=niakk_jarignu';
$username = 'root';
$password = '';


try {
    $connexion = new PDO($dsn, $username,$password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

// Récupération des données du formulaire
$commande =htmlspecialchars($_POST["commande"]) ;
$nom =htmlspecialchars($_POST["nom"]);
$prenom =htmlspecialchars($_POST["prenom"]);
$aliment =htmlspecialchars($_POST["aliment"]);
$telephone =htmlspecialchars($_POST["telephone"]);
$adresse =htmlspecialchars($_POST["adresse"]);
$quantite =htmlspecialchars($_POST["quantite"]);

// Requête d'insertion dans la base de données
$sql = "INSERT INTO Achat(commande, nom, prenom, aliment, adresse, telephone,quantite) VALUES (:commande,:nom,:prenom,:aliment,:adresse,:telephone, :quantite)";

try {
    // Préparation de la requête
    $stmt = $connexion->prepare($sql);

    // Liaison des paramètres
    $stmt->bindParam(':commande', $commande);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':aliment', $aliment);
    $stmt->bindParam(':adresse', $adresse);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':quantite', $quantite);

    // Exécution de la requête
    $stmt->execute();
    echo '<script>alert("Votre commande a été soumis avec succès !"); window.location.href = "index.php";</script>';

   

    echo "Données enregistrées avec succès.";
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}

// Fermeture de la connexion
$connexion = null;
?>