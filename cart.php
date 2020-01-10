<!DOCTYPE html>
<?php
session_start();
$cookienaam = "keuze";
 

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>
    <body>
        	<h1>Skateboard <small>(#1)</small></h1>
        	<h1>Basketbal <small>(#2)</small></h1>
        	<h1>Skeelers <small>(#3)</small></h1>

        	

        <?php

if (!isset($_POST["choice"])) {
	echo"

	<form method=\"POST\">
        		
        	<input type=\"text\" name=\"choice\">
        	<input type=\"submit\" value=\"submit\">


        	</form>

	";
}
        	if (isset($_POST["choice"])) {
        		setcookie("keuze", $_POST["choice"]);
        		if (isset($_COOKIE["keuze"])) {
        			
        			echo "Gekozen item: " . $_COOKIE["keuze"];
        		}
        	}
        	
        ?>
    </body>
</html>