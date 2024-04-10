<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data3_recette-it.php');

// Lancement du moteur Twig :

echo $twig->render('categorie3_recette-it.twig', [
	'titre' => 'Page catégorie 3 : Recettes',
	'recette1' => $recette1,
	'recette2' => $recette2,
	'recette3' => $recette3,
	'recette4' => $recette4,
	'recette5' => $recette5,
	'categorie' => $categorieC,
	'lang'=>'fr',
]);
