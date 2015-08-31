<?php 
session_start(); 
?> 

<!DOCTYPE html>
<html>
<head>

<title>Schreibservice Dick</title>

<html lang="de">
<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html"; charset="UTF-8">
<meta name="robots" content="index, follow">
<meta name="author" content="WPFMW Projektgruppe">
<meta name="creator" content="WPFMW Projektgruppe">
<meta name="publisher" content="WPFMW Projektgruppe">
<meta name="description" content="Hier kommt die Beschreibung rein">

<link href="css/design_neuanmelden.css" type="text/css" rel="stylesheet" title"Haupttemplate">

</head>
<body>
<div id="wrapper">
<header>
	<div id="kopf">
		<a href="index.php"><img class="vertikalalign" src="images/logo.jpg" alt="Logo"></a>
	</div>
	<div id="oberbox">
	</div>
</header>
<main>
<br><h1>Login</h1><br><br>
<div>
    

<?php 
$verbindung = mysql_connect("localhost", "root" , "") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("schreibservice", $verbindung) or die ("Datenbank konnte nicht ausgewählt werden"); 

$email = $_POST["email"]; 
$passwort = md5($_POST["passwort"]); 

$abfrage = "SELECT Email, Password FROM user WHERE Email LIKE '$email' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 

if($row->Password == md5($passwort)) 
    { 
    $_SESSION["email"] = $email; 
    echo "Login erfolgreich. <br> <a href=\"profil.php\">Geschützer Bereich</a>"; 
    } 
else 
    { 
    echo "Benutzername und/oder Passwort waren falsch. <a href=\"einloggen.php\">Login</a>"; 
    } 

?>
    
    
 </div>   
    
</main>
<footer>
</footer>
