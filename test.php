<?php
    require("Connect.php");
    require("Product.php");
    $a = new Connect();
    $a->display_full_table("product");

    $p = new Product();
    $temp = $p->get_all_values_from_vue("product_type");
    $p = $p->get_select_vue_from_list($temp, "type");

?>

<br>
<br>
<br>

<h2>Ajouter un produit</h2>
<form method="post" action="exchange_interface.php?mode=add">
    <label for="name_product">nom du produit</label>
    <input name="name_product" id="name_product" type="text">
    <br>

    <label for="type">type du produit</label>
    <?php
    echo $p;

    ?>

    <br>

    <label for="price">prix du produit</label>
    <input name="price" id="price" type="number" min="1">
    <label for="price">xpf</label>
    <br>
    <button type="submit">ajouter</button>
</form>

<br>
<br>
<br>

<h2>Supprimer un produit</h2>
<form method="post" action="exchange_interface.php?mode=rm">
    <label for="nbRemove">numéro du produit à supprimer</label>
    <input name="nbRemove" id="nbRemove" type="number">
    <button type="submit">supprimer</button>
</form>


<script>



</script>
