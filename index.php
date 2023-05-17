<?php 

include('config/settings.php');

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icone-site.png">
    <title>Accueil - Simathi</title>
    <script src="js/jquery-3.6.0.min.js"></script>
	<script>
	$(function(){
		$('#open, #close').click(function(){
            $('nav, #p').fadeToggle(200);
			$('nav, #p').toggleClass('hidden');
		});
	});
	</script>
</head>
<body>
    <header>
        <button class="burger" id="open"><i class="fas fa-bars"></i></button>

        <a href="index.php" ><img src="images/logo.png" alt="logo de Simhati blanc" id="logoAccueil"></a>

        <a href="#" class="basket"><i class="fas fa-shopping-basket"></i></a>
        <button class="basket" id="margin"><i class="far fa-moon"></i></button>
        <p class="hidden" id="p"></p>
        <nav class="hidden">
			<button aria-hidden="true" class="burger" id="close"><i class="fas fa-times"></i></button>
			<ul>
				<li><a href="index.php"><img src="images/logo.png" alt="logo de Simhati blanc" id="logoMenu"></a></li>
				<li class="marginMenu"><a href="#" class="menu">QUI SUIS-JE ?</a></li>
                <p class="rectangle"></p>
				<li class="marginMenu"><a href="#">PODCAST</a></li>
                <p class="rectangle"></p>
				<li class="marginMenu"><a href="#">BLOG</a></li>
                <p class="rectangle"></p>
                <li class="marginMenu"><a href="#">SIMHAT'OFFRES</a></li>
                <p class="rectangle"></p>
                <li><a href="contact.php">CONTACTEZ-MOI</a></li>
			</ul>
            <div id="copyright">
			    <p>Tous droits réservés - 2022</p>
			    <p><a class="button" href="#">Politique de confidentialité</a> | <a class="button" href="#">Mentions légales</a> | <a class="button" href="#">CGV</a> | <a class="button" href="#">Plan du site</a></p>
            </div>
		</nav>

    </header>
    <ul id="social">
        <li class="media"><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
        <li class="media"><a href="#"> <i class="fab fa-instagram"></i> </a></li>
        <li class="media"><a href="#"> <i class="fab fa-tiktok"></i> </a></li>
        <li class="media"><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
    </ul>
    <div id="citation">
        <p>Il y a des voyages qui se font</p><p> avec un seul bagage, le coeur </p><span>Audrey Hepburn</span>
        <i class="fas fa-quote-left"></i>
    </div>
    <a href="#" id="button">Qui suis-je ?</a>
</body>
</html>