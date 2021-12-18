<!DOCTYPE html>
<html>
<head>
<title>Supprimer produit</title>
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
    include 'dbconnect.php';
    $conn = OpenCon();
    $id="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST["id"])){
        $id = test_input($_POST["id"]);
        $sql = "delete from produits where id=$id";
        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } 
        else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        CloseCon($conn);
      }
    }
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
  <a href="modifyproduct.php">Modifier un produit</a>
  <a href="deleteproduct.php" class="active">Supprimer un produit</a>
  <a href="addcategory.php">Ajouter une categorie</a>
  <a href="modifycategory.php">Modifier une categorie</a>
  <a href="deletecategory.php">Supprimer une categorie</a>
</ul>
</div>
<div class="wrap">

  <form method="post" action="deleteproduct.php">
    <label for="categorie">Id du produit</label>
    <input class="texte" type="text" id="id" name="id" placeholder="id produit">
    <input type="submit" value="Submit" class="submit">
  </form>
</div>
</body>