<?php
    require("Connect.php");
    require("Product.php");
    require("Blocks.php");
    session_start();
    $connection = new Connect();
    $block = new Blocks();

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

    <?php
        $block->login_form();
        var_dump($_SESSION);

        /*
        session_unset();
        session_destroy();*/
    ?>
    <br>
    <br>



</body>
</html>
