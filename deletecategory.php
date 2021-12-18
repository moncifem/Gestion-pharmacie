<!DOCTYPE html>
<html>
<head>
<title>Supprimer Categorie</title>
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
$categorie="";
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
  if(isset($_POST["categorie"]) && $_POST["categorie"]!="--selectionnerunecategorie--"){
    $categorie = test_input($_POST["categorie"]);
    $sql = "delete from categories where nom='$categorie';";
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
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
  <a href="deleteproduct.php">Supprimer un produit</a>
  <a href="addcategory.php">Ajouter une categorie</a>
  <a href="modifycategory.php">Modifier une categorie</a>
  <a href="deletecategory.php" class="active">Supprimer une categorie</a>
</ul>
</div>

<div class="wrap">

  <form method="post" action="deletecategory.php">
    <label for="categorie">Categorie</label>
    <select id="categorie" name="categorie">
      <option disabled selected value style="text-align: center;"> -- selectionner une categorie -- </option>
      <?php
        $conn = OpenCon();
       $sql = "SELECT id,nom FROM categories";
       $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
        <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
        <?php
  }
} else {
  echo "0 results";
}
$conn->close();
    ?>
      
    </select>
    <input type="submit" value="Submit" class="submit">
  </form>
</div>
</body>