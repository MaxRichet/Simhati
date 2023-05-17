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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icone-site.png">
    <title>Contact - Simathi</title>
    <script src="js/jquery-3.6.0.min.js"></script>
	<script>
	$(function(){
		$('#open, #close').click(function(){
            $('nav, #blur').fadeToggle(200);
			$('nav, #').toggleClass('hidden');
		});
	});
	</script>
</head>
<body>
    <p id="sidebar"></p>
    <header>
        <button class="burger" id="open"><i class="fas fa-bars"></i></button>
        <div id="headerContainer">
            <a href="index.php" ><img src="images/logo-contact.png" alt="logo de Simhati blanc" id="logoAccueil"></a>
        <div>
        <a href="#" class="basket"><i class="fas fa-shopping-basket"></i></a>
        <button class="basket" id="margin"><i class="far fa-moon"></i></button>
        </div>
        </div>
        <p class="hidden" id="blur"></p>
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
                <li><a href="contact.html">CONTACTEZ-MOI</a></li>
			</ul>
		</nav>
    </header>
    <div id="social">
        <ul>
            <li class="media"><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
            <li class="media"><a href="#"> <i class="fab fa-instagram"></i> </a></li>
            <li class="media"><a href="#"> <i class="fab fa-tiktok"></i> </a></li>
            <li class="media"><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
        </ul>
    </div>
    <div id="containerArbre">
        <p>Il est temps <span>d'échanger !</span></p>
        <img src="images/arbre.png" alt="arbre bleu rappel avec le logo">
    </div>
    <div id="containerForm">
        <h1>Contactez-moi</h1>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="text" placeholder="Nom" id="nom" name="lastname">
            <input type="text" placeholder="Prénom" name="firstname">
            <input type="text" placeholder="Adresse e-mail" name="email">
            <textarea name="message" id="message" cols="20" rows="1" placeholder="Message"></textarea>
            <button type="submit" name="addmessage">Envoyer  <i class="fas fa-arrow-right"></i></button>
        </form>
    </div>
    <div id="containerPodcast">
        <h1>Vous aimerez aussi</h1>
        <p id="p"></p>
        <div id="img">
            <img src="images/podcast-1.png" alt="image d'un podcast de Julia Bordes">
            <img src="images/podcast-2.png" alt="image d'un podcast de Julia Bordes">
        </div>
        <button>Voir tous les podcasts  <i class="fas fa-arrow-right"></i></button>
    </div>
    <p id="bgNews"></p>
    <div id="containerNews">
        <h1>Pour ne rien louper inscrivez-vous à <span>la Newsletter :</span></h1>
        <form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input type="text" placeholder="Adresse e-mail" id="mail" name="mailnewsletter">
            <div>
                <input type="checkbox" id="newsletter">
                <label for="newsletter">J'accepte les conditions générales et la politique <span id="span">confidentialité</span></label>
            </div>
            <button type="submit" name="addnewsletter">Envoyer  <i class="fas fa-arrow-right"></i></button>
        </form>
    </div>
    <footer>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">Qui suis-je ?</a></li>
            <li><a href="#">Podcast</a></li>
        </ul>
        <a href="index.php"><img src="images/logo.png" alt="logo Simhati blanc footer"></a>
        <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Simhat'offres</a></li>
            <li><a href="contact.php">Contacter-moi</a></li>
        </ul>
        <div>
            <p><a href="#">Politique de confidentialité</a> | <a href="#">Mentions Légales</a> | <a href="#">CGV</a></p>
            <p>Tous droits réservés - 2022</p>
        </div>
    </footer>
</body>
</html>