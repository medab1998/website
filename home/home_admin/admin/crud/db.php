<?php
$dbServername = "localhost";
$dbName = "iotbd";
$username = 'root';
$password = "";
$options = [];
try {
    // Chaîne de connexion PDO DSN
    $dsn = "mysql:host=$dbServername;dbname=$dbName";
    
    // Connexion à la base de données
    $connection = new PDO($dsn, $username, $password, $options);
    
    // Définition des options de gestion des erreurs
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Autres opérations sur la base de données ici...
} catch(PDOException $e) {
    // Gestion de l'exception (par exemple, afficher un message d'erreur)
    echo "Erreur de connexion : " . $e->getMessage();
}
?>