<?php

require("Connect.php");
require("Product.php");

/**
 *  Every link to this file should always specify the
 *  mode of exchange using $_GET['mode']
 *
 * ex : ------
 *
 *  < form id="removeSmth" method="GET" action="exchange_interface.php?mode=rm">
 *  < form id="addSmth" method="GET" action="exchange_interface.php?mode=add>
 *
 * -----
 */

switch ($_GET['mode'])
{
    case 'rm':
        $formData = $_POST["nbRemove"];
        var_dump($formData);

        settype($formData, "integer");
        var_dump($formData);

        $temp = new Product();
        $temp->remove_product_by_nb($formData);
        echo"<a href='index.php'>retour</a>";
        break;
    case 'add':
        $formData = $_POST;
        var_dump($formData);

        $name_product = $formData['name_product'];
        $type = $formData['type'];

        $price = $formData['price'];
        var_dump($price);
        settype($price, "integer");
        var_dump($price);

        $temp = new Product();
        $temp->setNameProduct($name_product);
        $temp->setPrice($price);
        $temp->setType($type);
        $temp->add_product();
        echo"<a href='index.php'>retour</a>";

        break;
    default:
        echo"<a href='index.php'>retour</a>";
        break;

}
