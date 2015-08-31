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
<br><h1>Registrieren</h1><br><br>
<div>

<?php 
    $verbindung = mysql_connect("localhost", "root" , "") 
    or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
    mysql_select_db("schreibservice", $verbindung) or die ("Datenbank konnte nicht ausgewählt werden"); 

    $name = $_POST["name"];
    $email = $_POST["email"]; 
    $passwort1 = md5($_POST["passwort1"]);
    $passwort2 = md5($_POST["passwort2"]); 


    if($passwort1 == $passwort2){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $abfrage = "SELECT Email FROM user WHERE Email LIKE '$email' LIMIT 1";
            $ergebnis = mysql_query($abfrage);
            $row = mysql_fetch_object($ergebnis);

            if($row->Email == $email)
            {
                echo "Die Eingegebene Email Addresse wurde bereits verwendet. <a href=\"neuanmelden.php\">Zurück</a>";   
            }
            else{
                $abfrage = "INSERT INTO `schreibservice`.`user` (`User_ID`, `Name/Firma`, `User_Type`, `Email`, `Password`) VALUES (NULL, '$name', '1', '$email', MD5('$passwort1'))"; 
                $ergebnis = mysql_query($abfrage);

                if($ergebnis == true){
                    echo "Erfolgreich angemeldet. <a href=\"index.php\">Home</a>";
                }
                else{
                    echo "Da ist uns ein Fehler unterlaufen bitte versuchen sie es erneut. <a href=\"neuanmelden.php\">Zurück</a>";  
                }

            }
        }
        else {
            echo "Die eingegebene Email ist keine Gültige. <a href=\"neuanmelden.php\">Zurück</a>";
        }
    }
    else{
        echo "Passwort stimmt nich Überein. <a href=\"neuanmelden.php\">Zurück</a>";
    }

?>

 </div>   
    
</main>
<footer>
</footer>
