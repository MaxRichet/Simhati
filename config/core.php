<?php

if(isset($_POST['addmessage'])){
	$_POST = array_map('trim', $_POST);

	if(empty($_POST['lastname']) || empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['message'])){
		flash_in('error', 'Merci de remplir tous les champs');

		header('Location: contact.php');
		exit();
	}

	$insert = $sql->prepare('INSERT INTO contactform (lastname, firstname, email, message) VALUES (:ln, :fn, :m, :mess)');
	$insert->execute([
		':ln' => $_POST['lastname'],
		':fn' => $_POST['firstname'],
		':m' => $_POST['email'],
		':mess' => $_POST['message']
	]);

	flash_in('success', 'Votre message a bien été envoyé !');

	header('Location: contact.php');
	exit();
}

if(isset($_POST['addnewsletter'])){
	$_POST = array_map('trim', $_POST);

	if(empty($_POST['mailnewsletter'])){
		//message erreur title vide
		flash_in('error', 'Vous devez renseigné une adresse e-mail valide');

		header('Location: contact.php');
		exit();
	}

	$insert = $sql->prepare('INSERT INTO newsletter (mail) VALUES (:mail)');
	$insert->execute([
		':mail' => $_POST['mailnewsletter']
	]);

	//message success enregistré
	flash_in('success', 'Merci de votre inscription');

	//redirige vers l'accueil
	header('Location: contact.php');
	exit();

}