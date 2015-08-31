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
			<div id="loginmenue">
				<div id="neuanmelden">
					<a href="neuanmelden.php">neu anmelden</a>
				</div></a>
				
				<div id="einloggen">
				<a href="einloggen.php">einloggen</a>
				</div></a>
			</div>
	</section>
	<section class="section_size" id="schreibbuero_info">
		<article>
			<h1>Schreibbuero ANNA DICK</h1>
			<p>Wenn die Sonne nicht scheint und es kalt und grau draußen ist, dann
				kann es uns schon schwer fallen uns zu freuen. Wir haben wieder viel zu
				viele Rechnungen zu zahlen und viel zu wenig Geld und wir werden
				unzufrieden und lassen uns von solchen dingen runterziehen.</p>
		</article>
	</section>
	<section class="section_size" id="service">
		<article>
			<br><br><br><br><br><br><br><br><h1>Service</h1>
			<p>Wenn die Sonne nicht scheint und es kalt und grau draußen ist, dann
				kann es uns schon schwer fallen uns zu freuen. Wir haben wieder viel zu
				viele Rechnungen zu zahlen und viel zu wenig Geld und wir werden
				unzufrieden und lassen uns von solchen dingen runterziehen.</p>
		</article>
	</section>
	<section class="section_size" id="preise">
		<article>
			<br><br><br><br><br><br><br><br><h1>Preise</h1>
			<p>Wenn die Sonne nicht scheint und es kalt und grau draußen ist, dann
				kann es uns schon schwer fallen uns zu freuen. Wir haben wieder viel zu
				viele Rechnungen zu zahlen und viel zu wenig Geld und wir werden
				unzufrieden und lassen uns von solchen dingen runterziehen.</p>
		</article>
	</section>
	<section class="section_size" id="ueberuns">
		<article>
			<br><br><br><br><br><br><br><br><h1>Über uns</h1>
			<p>Wenn die Sonne nicht scheint und es kalt und grau draußen ist, dann
				kann es uns schon schwer fallen uns zu freuen. Wir haben wieder viel zu
				viele Rechnungen zu zahlen und viel zu wenig Geld und wir werden
				unzufrieden und lassen uns von solchen dingen runterziehen.</p>
		</article>
	</section>
	<section class="section_size" id="kontakt">
		<article>
			<br><br><br><br><br><br><br><br><h1>Kontakt</h1>
			<p>Wenn die Sonne nicht scheint und es kalt und grau draußen ist, dann
				kann es uns schon schwer fallen uns zu freuen. Wir haben wieder viel zu
				viele Rechnungen zu zahlen und viel zu wenig Geld und wir werden
				unzufrieden und lassen uns von solchen dingen runterziehen.</p>
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

