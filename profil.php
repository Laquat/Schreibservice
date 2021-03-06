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

<link href="css/design.css" type="text/css" rel="stylesheet" title"Haupttemplate">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link  href="fotorama/fotorama.css" rel="stylesheet">
<script src="fotorama/fotorama.js"></script>

    
</head>
<body>
<div id="wrapper">
<header class="shadow">
	<div id="kopf">
		<a href="index.php"><img class="vertikalalign" src="images/logo.jpg" alt="Logo"></a>
	</div>

	<div id="oberbox">
	</div>
	<nav id="hauptmenue">
		<ul class="vertikalalign">
			<li><a href="index.php#schreibbuero_info">Schreibbüro</a></li>
			<li><a href="index.php#service">Service</a></li>
			<li><a href="index.php#preise">Preise</a></li>
			<li><a href="index.php#ueberuns">Über uns</a></li>
			<li><a href="index.php#kontakt">Kontakt</a></li>
		</ul>
	</nav>
</header>
<main>
	<section class="section_size" id="schreibbuero">
		
			<div class="fotorama" 
			data-width="100%" 
			data-height="50%" 
			data-fit="cover" 
			data-ratio="800/600"
			data-allowfullscreen="true"
			data-loop="true"
			data-autoplay="true"
			data-keyboard="true">
				<?php
                    $ordner = "images/gallerie";
                    $allebilder = scandir($ordner);  
                    foreach ($allebilder as $bild) {
                        $bildinfo = pathinfo($ordner."/".$bild); 
                        if ($bild != "." && $bild != "..") { 
                ?>
                <img src="<?php echo $bildinfo['dirname']."/".$bildinfo['basename'];?>" />
                <?php
                        };
                     };
                ?>
			</div>
		
		
		<div class="zwischenbox" id ="zwischenbox"></div>

	</section>
    	<section class="section_size" id="schreibbuero_info">
		<article>
			<h1>Eingelogt</h1>
			
            
            <?php 
                $email = $_SESSION["email"];

                $verbindung = mysql_connect("localhost", "root" , "") 
                or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
                mysql_select_db("schreibservice", $verbindung) or die ("Datenbank konnte nicht ausgewählt werden"); 

                $abfrage = "SELECT User_Type FROM `user` WHERE Email = '$email'"; 
                $ergebnis = mysql_query($abfrage); 
                $row = mysql_fetch_object($ergebnis); 

                if($row->User_Type == 1){ 
                    
                    echo'<p>Audio Upload steht noch nicht zur verfügung!</p>';
                    
                }
                
                if($row->User_Type == 3){ 

                    echo'
                    <p>Gallerie Bilder</p>
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                    <p>Select image to upload:</p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Bild Hochloaden" name="submit">
                    </form>
                    ';
                    
                }


            ?>
            
            
		</article>
	</section>
</main>
<footer>
	<div id="fussklein"></div>
	<div id="fussgross"></div>
	<nav id="fusszeilenmenue">
		<ul class="vertikalalign">
			<li><a href="infos.php#datenschutz">Datenschutz</a></li>
			<li><a href="infos.php#impressum">Impressum </a></li>
			<li><a href="infos.php#agb">AGB</a></li>
		</ul>
	</nav>
</footer>
</div>

</body>
</html>
