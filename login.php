<?php
/*
Leerling: Tom Kluskens
Oefening: Login system
Datum: 07/11/2022
*/

 require ('config/config.php');
require ('config/connection.php');
 include ('include/header.php'); ?>
 
<section class="signup-form">
    <h2 style="text-align: center; font-size: 60px">Log in</h2>
    <form style='text-align: center; font-size: 20px;' action="include/login.inc.php" method="post" >
        <input style="margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px" type="text" name="name" placeholder="Username/Email">
        <br>
        <input style="margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px" type="password" name="pwd" placeholder="Password">
        <br>
        <button style="margin-top: 10px;font-size: 25px;" type="submit" name="submit" class="btn btn-primary">Log in</button>
    </form>
    <?php
    //checkt of error staat in de url
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Vul alles in.</p>";
        }
        else if($_GET["error"]== "VerkeerdeLogin"){
            echo "<p style='text-align:center;color:red;margin-top: 10px;'>VerkeerdeLogin.</p>";
        }
    }
?>
</section>

