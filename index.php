<!DOCTYPE html>
<html lang="en">
<?php include ('include/header.php');
require ('include/index.inc.php'); ?>
<body>

<div class="container">
  <h2>Databank Boeken Atheneum</h2>
  <form action="qrcode.php" method="post">

  <div class="form-group">
      <label for="pwd">ISBN:</label>
      <input type="ISBN" class="form-control" id="pwd" placeholder="Enter ISBN" name="ISBN">
    </div>

    <div class="form-group">
      <label for="titel">Titel:</label>
      <input type="titel" class="form-control" id="titel" placeholder="Enter titel" name="Titel">
    </div>

    <div class="form-group">
      <label for="auteur">Auteur:</label>
      <input type="auteur" class="form-control" id="auteur" placeholder="Enter auteur" name="Auteur">
    </div>

    <div class="form-group">
      <label for="pagina">Pagina:</label>
      <input type="pagina" class="form-control" id="pagina" placeholder="Enter pagina" name="Pagina">
    </div>

    <div class="form-group">
      <label for="genre">Genre:</label>
      <input type="genre" class="form-control" id="genre" placeholder="Enter genre" name="Genre">
    </div>
    
<br>
    <button type="submit" class="btn btn-primary" name="sbt-btn" >Submit</button>
  </form>
</div>
<?php 
 if (isset($_GET["error"])) {
  if ($_GET["error"] == "emptyinput") {
      echo "<p style='text-align:center;color:red;margin-top: 10px'>Vul alles in.</p>";
  }}


?>
</body>
</html>
