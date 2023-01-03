<?php
require_once 'config/config2.php';
require_once 'config/connection.php';
require_once 'phpqrcode/qrlib.php';
$path = 'images/';
$qrcode = $path.time().".png";
$qrimage = time().".png";


    $ISBN = $_POST['ISBN'];
    $Titel = $_POST['Titel'];
    $Auteur = $_POST['Auteur'];
    $Pagina = $_POST['Pagina'];
    $Genre = $_POST['Genre'];
    $Status = "Vrij";
    $Info= 'ISBN= ' .$ISBN.', Titel= '.$Titel;
   
    require_once 'include/index.inc.php';
  if (emptyInputSignup($ISBN, $Titel, $Auteur, $Pagina, $Genre, $Status) !== false) {
    header("location: index.php?error=emptyinput");
    exit();
}
  if($conn->connect_error){
      echo("connectie mislukt: " . $conn->connect_error);
  }else{
    $stmt = $conn->prepare("INSERT INTO tbl_boek SET ISBN='$ISBN', Titel='$Titel', Auteur='$Auteur', Pagina='$Pagina', Genre='$Genre', qrimage='$qrimage', Status='$Status'");
    $stmt->execute();
    echo"Registratie is succesvol";
  }

QRcode :: png($Info, $qrcode, 'H', 4, 4);


//echo "<img src='".$qrcode."'>";
?>
<br>
<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Next</a>