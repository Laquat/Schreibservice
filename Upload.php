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
        $target_dir = "images/gallerie";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "<p>Datei ist ein  - " . $check["mime"] . ".</p>";
                $uploadOk = 1;
            } else {
                echo "<p>Datei ist kein Bild.</p>";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "<p>Datei existiert bereits.</p>";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "<p>Das Bild ist zu groß.</p>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "<p>Das Bild muss vom typ JPG, JPEG, PNG & GIF sein.</p>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<p>Die Datei konnte nicht hochgeladen werden.</p>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "<p>Die Datei ". basename( $_FILES["fileToUpload"]["name"]). " ist hochgeladen.</p>";
            } else {
                echo "<p>Da ist etwas schief gelaufen versuche es bitte erneut.</p>";
            }
        }
        echo "<p><br> <a href=\"profil.php\">Geschützer Bereich</a></p>";
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