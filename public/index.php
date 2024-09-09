<?php
require '../config/database.php';

$database = new Database;

$connexion = $database->getConnection();

// Récupérer l'URI après le domaine
$request = $_SERVER['REQUEST_URI'];

// Retirer les paramètres GET s'il y en a
$request = strtok($request, '?');

// Définir les routes
switch ($request) {
    case '/':
        require 'index.php';
        break;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotana Hotel</title>
    <link href="css/output.css" rel="stylesheet">
</head>

<body>
    <?php include_once('./parties/en-tete.php'); ?>

    <main class="">
        <?php include_once('./parties/premiereSection.php'); ?>
    </main>
    <script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
</body>

</html>