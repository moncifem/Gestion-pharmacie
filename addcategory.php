<!DOCTYPE html>
<html>
<head>
<title>Ajouter categories</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="menuvertical.css">
</head>
<body>
  <?php
include 'dbconnect.php';
$conn = OpenCon();
//CloseCon($conn);
$categorie="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$categorie = test_input($_POST["categorie"]);
$sql = "INSERT INTO categories(nom) VALUES ('$categorie');";
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
CloseCon($conn);
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
  <a href="deleteproduct.php">Supprimer un produit</a>
  <a href="addcategory.php" class="active">Ajouter une categorie</a>
  <a href="modifycategory.php">Modifier une categorie</a>
  <a href="deletecategory.php">Supprimer une categorie</a>
</ul>
</div>
<div class="wrap">

  <form method="post" action="addcategory.php">

    <label for="categorie">Nom categorie</label>
    
    <input class="texte" type="text" id="categorie" name="categorie" placeholder="Nom de la categorie"  autocomplete="off">
    
    <input type="submit" value="Submit" class="submit">
  </form>
</div>
</body>