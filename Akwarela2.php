<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<meta name="author" content="Bartłomiej Kloc"/>
		<title>Danuta Bzdyra Art</title>
		<meta charset="UTF-8"></meta>
		<meta name="description" content=""></meta>
		<meta name="keywords" content="Danuta, Bzdyra, Art, Obrazy, Zdjęcia, Akwarela"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"></meta>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<div id="container">
	
		<div id="toplogo">
			<a href="index.php">
				<img src="img/toplogo.jpg" heihgt="100%" width="100%"/>
			</a>
		</div>
		<div id="refer">
			“Every artist was first an amateur” - Ralph Waldo Emerson. 
		</div>
		<div id="menu">
			<a href="creations.php"><div class="menu-option">Moje obrazy</div></a>
			<a href="vernissage.php"><div class="menu-option">Wystawy prac</div></a>
			<a href="aboutme.php"><div class="menu-option">O mnie</div></a>
			<div style="clear:both;"></div>
		</div>
		<div id="content">
		<div id="topcontent" style="margin-left:35px">
			<h1> Oto moje pierwsze prace:</h1>
		</div>
			<?php
			$current_dir = "Akwarela2(2017)";
			chdir($current_dir);
			$array = scandir(".", 1);
			foreach($array as $value){
				if($value != ".." && $value != "."){
					echo '<div class="obraz" style="float:left;">';
					echo '<img src="'.$current_dir.'/'.$value.'" height="100" width="160" class="center" onclick="show(this)"/>';
					echo "</div>";
				}
			}
			echo '<div style:"clear:both;"></div>';
			?>
			
			<script type="text/javascript">
				function show(img){
					window.open(img.src);
				}
			</script>
			
		</div>
		
		<div id="footer">
			Ta strona ma na celu przybliżyć czytelnokowi osobę Danuty Bzdyry, oraz jej pasje.<br/>
			Obpublikowano w 2020 <br/>
			&copy; Wszelkie prawa zastrzeżone.
		</div>
		
	</div>
	</body>
</html>