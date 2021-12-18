<!DOCTYPE html>
<html>
<head>
<title>Gestion Stock</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="menuvertical.css">
</head>
<body>
  <div id="fixed">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="stock.php">Stock</a></li>
    <li><a href="inventaire.php">Inventaire</a></li>
    <li style="float:right"><a href="alerte.php">Alerte</a></li>
  </ul>
  <?php
    include 'headerModifyProduct.php';

  ?>
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
    <form method="post" action="modifyproduct.php">
      <input type="hidden" name="id_start" value="<?php echo $id; ?>" />
      <label for="ID">ID Produit</label>
      <input class="texte" type="number" id="ID" name="id" value="<?php echo $id; ?>" >
      <label for="nom">Nom Produit</label>
      <input class="texte" type="text" id="nom" name="nom" value="<?php echo $nom; ?>" autocomplete="off" required>
      <label for="date">Date expiration</label>
      <input class="texte" type="date" id="expiration" name="expiration" value="<?php echo $date_expiration; ?>" required>
      <label for="prix">Prix Produit</label>
      <input class="texte" type="number" id="prix" name="prix" value="<?php echo $prix; ?>" autocomplete="off" required step=any>
      <label for="categorie">Categorie</label>
      <select id="categorie" name="categorie" required>
        <option disabled selected value style="text-align: center;"> <?php echo $categorie; ?> </option>
        <?php
          include 'optionsHtmlCategorie.php';
        ?>
      </select>
      <input type="submit" value="Submit" class="submit">
    </form>
  </div>
  <script>
    var close = document.getElementsByClassName("closebtn");
    var i;
    for (i = 0; i < close.length; i++) {
      close[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 700);
      }
    }
  </script>
</body>
</html>