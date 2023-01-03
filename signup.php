<?php
/*
Leerling: Tom Kluskens
Oefening: Login system
Datum: 07/11/2022
*/

require ('include/functions.inc.php');
require ('config/config.php');
require ('config/connection.php');

 include ('include/header.php'); ?>
<section class="signup-form">
   
    <h2 style="text-align: center; font-size: 60px">Signup</h2>
    <div class="signup-form-form">
    <form style='text-align: center; font-size: 20px;' action="include/signup.inc.php" method="post">
        <input style="margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px" type="text" name="name" placeholder="Full Name">
        <br>
        <input style='margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px' type="text" name="email" placeholder="E-Mail">
        <br>
        <input style='margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px' type="text" name="uid" placeholder="Username">
        <br>
        <input style='margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px' type="password" name="pwd" placeholder="Password">
        <br>
        <input style='margin-top: 5px;color:black;border: 1px solid grey;border-radius: 5px' type="password" name="pwdrepeat" placeholder="Repeat Password">
        <br>
        <button style="margin-top: 10px;font-size: 25px;" type="submit" name="submit" class="btn btn-primary">Sign Up</button>
    </form>
</div>
<?php
    //checkt of error staat in de url
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Vul alles in.</p>";
        }
        else if($_GET["error"]== "invalidUsername"){
            echo "<p style='text-align:center;color:red;margin-top: 10px;'>Gebruik een andere username.</p>";
        }
        else if($_GET["error"]== "invalidEmail"){
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Gebruik een ander email.</p>";
        }
        else if($_GET["error"]== "PasswordsDontMatch"){
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Het wachtwoord komt niet overeen.</p>";
        }
        else if($_GET["error"]== "stmtfailed"){
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Er is een fout, probeer opnieuw.</p>";
        }
        else if($_GET["error"]== "UsernameAlreadyTaken"){
            echo "<p style='text-align:center;color:red;margin-top: 10px'>Het username is al in gebruik.<p>";
        }
        else if($_GET["error"]== "Geen"){
            echo "<p style='text-align:center;color:green;margin-top: 10px'>U bent geregistreerd.</p>";
        }
    }
?>
</section>




