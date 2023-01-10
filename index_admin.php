<?php

require("Connect.php");
require("Product.php");
$connection = new Connect();

?>

<!doctype html>
<html dir="ltr" lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Tahiti Coutellerie</title>
</head>
<body>

<a href="index.php"><h1>Tahiti Coutellerie</h1></a>

<hr/>
<br>

<button class="magicButton">
    <a target="_blank" href="test.php">Ajouter un produit</a>
</button>

<br>
<br>

<button class="magicButton">
    <a target="_blank" href="test.php">Supprimer un produit</a>
</button>


</body>
</html>
