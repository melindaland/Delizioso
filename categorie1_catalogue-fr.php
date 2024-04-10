<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data1_catalogue-fr.php');

// Lancement du moteur Twig :

echo $twig->render('categorie1_catalogue-fr.twig', [
	'titre' => 'Page catégorie 1 : Catalogue',
	'gateau' => $gateau1,
	'categorie' => $categorieA,
	'lang'=>'it',
]);

