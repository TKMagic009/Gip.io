<?php include ('include/header.php') ?>

<!DOCTYPE html>

<html>
<body >
   <h1 style='margin-left: 15px'>Tabel Boek</h1>
   
   <br>
    <table class='table' >
        <thead >
        <?php if (isset($_SESSION["username"])) {
   echo"
            <tr>
               
                <th>ISBN</th>
                <th>Titel</th>
                <th>Auteur</th>
                <th>Pagina</th>
                <th>Genre</th>
                <th>Status</th>
                <th>qrimage</th>
                
                
                
            </tr>";
                }else{
                        echo "Je moet ingelogd zijn om deze database te kunnen zien.";
                     }?>
        </thead>
        <tbody>
            <?php
            require_once 'config/connection.php';
            $sql ="SELECT * FROM tbl_boek";
            $resultaat = $conn->query($sql);
            //als connectie faalt
        if(!$resultaat){
            echo("Invalid query: " . $conn->error);
        }
        // leest de data van alle rijen
        while($row = $resultaat->fetch_assoc()){
            // toont alleen de knop lenen als je ingelogd bent
                    if (isset($_SESSION["username"])) {
                        echo '<tr>
                        <td>'. $row["ISBN"] .'</td>
                        <td>'. $row["Titel"] .'</td>
                        <td>'. $row["Auteur"] .'</td>
                        <td>'. $row["Pagina"] .'</td>
                        <td>'. $row["Genre"] .'</td> 
                        <td>'. $row["Status"] .'</td> 
                        <td><img src="images/'.$row['qrimage'].'"></td>
                
                        <td><button class="btn btn-primary btn-sm">Lenen</button></td></tr>';
                     }else{
                        echo "";
                     }
               
        }
        
           
            ?>
        
        </tbody>
        
    </table>
   
   
   <!-- rest of your code here -->
   
</body>
</html>