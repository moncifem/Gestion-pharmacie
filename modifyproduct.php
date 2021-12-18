<!DOCTYPE html>
<html>
<head>
<title>Modifier produit</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="menuvertical.css">
<style type="text/css">
  .vertical-menu ul{
  margin-top: 50%;
  width: 220px;
}
.vertical-menu ul a {
  text-align: center;
}
</style>
</head>
<body>
  <?php
    include 'headerUpdateProduct.php';

  ?>
<div id="fixed">
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a class="active" href="stock.php">Stock</a></li>
  <li><a href="inventaire.php">Inventaire</a></li>
  <li style="float:right"><a href="alerte.php">Alerte</a></li>
</ul>
</div>
<div class="vertical-menu">
  <ul class="mv">
  <a href="stock.php">Ajouter un produit</a>
  <a href="modifyproduct.php" class="active">Modifier un produit</a>
  <a href="deleteproduct.php">Supprimer un produit</a>
  <a href="addcategory.php">Ajouter une categorie</a>
  <a href="modifycategory.php">Modifier une categorie</a>
  <a href="deletecategory.php">Supprimer une categorie</a>
</ul>
</div>
<div class="wrap">
<form method="post" action="product.php">
    <label for="categorie">Id du produit</label>
    <input class="texte" type="text" id="id" name="id" placeholder="ID du produit" required>
    <input type="submit" value="Submit" class="submit">
  </form>
</div>
</body>