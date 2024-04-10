<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data2_histoire-fr.php');

// Lancement du moteur Twig :

echo $twig->render('categorie2_histoire-fr.twig', [
	'titre' => 'Page catégorie 2 : Histoire',
	'origine' => $origine,
	'meilleure_patisserie' => $meilleure_patisserie,
	'ancienne_patisserie' => $ancienne_patisserie,
	'meilleure_patissier' => $meilleure_patissier,
	'concours' => $concours,
	'categorie' => $categorieB,
	'lang'=>'it',
]);
