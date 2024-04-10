<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

// Lancement du moteur Twig :

echo $twig->render('apropos.twig');
