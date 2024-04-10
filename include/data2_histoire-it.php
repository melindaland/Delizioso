<?php
// Données pour la catégorie 2
// les même données répétées 5 fois pour chaque article

$origine = [
	'id' => 1,// Identifiant unique de la catégorie
	'soustitre' => 'Una storia che risale a secoli fa', // Sous-titre de la catégorie
	'image1' => 'images/img_histoire/img14_histoire.jpg',// URL de l'image 1 de la catégorie
	'image2' => 'images/img_histoire/img15_histoire.jpg',// URL de l'image 2 de la catégorie
	'image3' => 'images/img_histoire/img10_histoire.jpg',// URL de l'image 3 de la catégorie
	'alt-image1' => "Dolci alla finestra",
	'alt-image2' => "Cupcakes",
	'alt-image3' => "Dolci prelibatezze",
	'texte' => 'La storia delle torte è un sapiente mix di viaggio, scoperta degli ingredienti e appropriazione.
Nel Medioevo, l\'arrivo dello zucchero portato dalla Siria dai crociati rivoluzionò la pasticceria. Aggiunti a farina, uova e burro, le possibilità diventano infinite. Fu in questo periodo che scoprimmo, nell\'XI secolo, il famoso Muffin. Alcuni storici suggeriscono che la parola derivi dal francese antico mouflet che significa morbido e tenero.
I primi muffin sono apparsi in Galles. Si dice che furono i servi degli aristocratici a iniziare a prepararli con gli avanzi dei dolci. Oggi, ai mirtilli, al cioccolato, al limone o con glassa, la piccola gallese è diventata uno spuntino irrinunciabile.',// Texte explicatif 
'boutiques' => [// Tableau des boutiques qui proposent cette catégorie
    [
      'nom' => 'Pasticceria da forno',// Nom de la boutique
      'ville' => 'Parigi',// Ville où se situe la boutique
      'adresse' => '14 Rue de la Paix, 75002 Parigi, Francia',// Adresse de la boutique
      'note' => '4.8 / 5',// Note des utilisateurs sur  la boutique
    ],
    [
      'nom' => 'I Piccoli Quattro',
      'ville' => 'Lione',
      'adresse' => '19 Rue Paul Chenavard, 69001 Lione, Francia',
      'note' => '4.5 / 5',
    ],
    [
      'nom' => 'Caffetteria Pasticceria',
      'ville' => 'Nizza',
      'adresse' => '6 Rue de la Poissonnerie, 06300 Nizza, Francia',
      'note' => '4.3 / 5',
    ],
  ],
];

$meilleure_patisserie = [
	'id' => 2,
	'soustitre' => 'Il dolce cult',
	'image1' => 'images/img_histoire/img21_histoire.jpg',
	'image2' => 'images/img_histoire/img1_histoire.jpg',
	'image3' => 'images/img_histoire/img11_histoire.jpg',
	'alt-image1' => "Mousse al cioccolato fondente",
	'alt-image2' => "Mousse al cioccolato bianco",
	'alt-image3' => "3 mousse al cioccolato",
	'texte' => 'La mousse al cioccolato è creata dallo svizzero Charles Fazi, cuoco di Luigi XVI1. Nel 1755, lo chef Menon la descrisse con il nome di "mousse al cioccolato", termine che si applicava anche alla schiuma della bevanda al cioccolato.
Nel 1820, André Viard diede una ricetta in Cuisinier royal, contribuendo così a rendere popolare questo dolce.',
'boutiques' => [
    [
      'nom' => 'Da Janou',
      'ville' => 'Parigi',
      'adresse' => '2 rue Roger Verlomme, 75 003 Parigi, Francia',
      'note' => '4 / 5',
    ],
    [
      'nom' => 'Barretta di mousse al cioccolato',
      'ville' => 'Parigi',
      'adresse' => '69 rue du Bac, 75 007 Parigi, Francia',
      'note' => '4.7 / 5',
    ],
    [
      'nom' => 'Il Trousseau Quadrato',
      'ville' => 'Parigi',
      'adresse' => '1 rue Antoine Vollon, 75 012 Parigi, Francia',
      'note' => '4.4 / 5',
    ],
  ],
];

$ancienne_patisserie = [
	'id' => 3,
	'soustitre' => 'La torta che ha dato inizio alla Storia della Pasticceria',
	'image1' => 'images/img_histoire/img3_histoire.jpg',
	'image2' => 'images/img_histoire/img5_histoire.jpg',
	'image3' => 'images/img_histoire/img8_histoire.jpg',
	'alt-image1' => "Tortino",
	'alt-image2' => "Mini crostate",
	'alt-image3' => "Torta più antica",
	'texte' => 'La ricetta della Linzer Torte è considerata una delle più antiche ricette di torte. La prima ricetta della Linzer Torte risale a un manoscritto del 1653 conservato nell\'abbazia di Admont in Stiria. In questo ricettario del XVII secolo si trovano già quattro diverse ricette per la Linzer Torte.',
	'boutiques' => [
    [
      'nom' => 'Delizie di pasticceria',
      'ville' => 'Strasburgo',
      'adresse' => '187 Rte de Schirmeck, 67200 Strasburgo, Francia',
      'note' => '4.1 / 5',
    ],
    [
      'nom' => 'Pasticceria Litzler-Vogel',
      'ville' => 'Strasburgo',
      'adresse' => '9 Rue d\'Austerlitz, 67000 Strasburgo, Francia',
      'note' => '4.8 / 5',
    ],
    [
      'nom' => 'Madre Gelo',
      'ville' => 'Lingolsheim',
      'adresse' => '15A Rue du Molkenbronn, 67380 Lingolsheim, Francia',
      'note' => '4.7 / 5',
    ],
  ],
];

$meilleure_patissier = [
	'id' => 4,
	'soustitre' => 'Il campione del mondo',
	'image1' => 'images/img_histoire/img2_histoire.jpg',
	'image2' => 'images/img_histoire/img20_histoire.jpg',
	'image3' => 'images/img_histoire/img19_histoire.jpg',
	'alt-image1' => "Nina Métayer prepara i macaron",
	'alt-image2' => "Ritratto di Nina Métayer",
	'alt-image3' => "Nina Métayer nel suo outfit da pasticciera",
	'texte' => 'Distinta per due anni consecutivi come Pasticcere dell\'Anno prima dei 30 anni, oggi consulente e imprenditrice, Nina Métayer ha seguito un doppio corso di panificazione, poi di pasticceria. Ispirazione, formazione, grandi case, distinzioni, espressione, passione, da La Rochelle alla scena internazionale, dalla pasticceria ai dessert ai piatti stellati, il viaggio di una giovane donna impegnata.',
	'boutiques' => [
    [
      'nom' => 'Delicatezza di Parigi',
      'ville' => 'Parigi',
      'adresse' => 'Vedi il suo sito web',
      'note' => '4.9 / 5',
    ],
    [
      'nom' => 'Printemps Home',
      'ville' => 'Parigi',
      'adresse' => 'Piano 8, 59 Rue de Caumartin, Parigi 9, Francia',
      'note' => '5 / 5',
    ],
    [
      'nom' => 'Printemps du Goût',
      'ville' => 'Parigi',
      'adresse' => 'Boulevard Haussmann, 9° arrondissement, Francia',
      'note' => '4.7 / 5',
    ],
  ],
];

$concours = [
	'id' => 5,
	'soustitre' => 'Torte nei programmi TV ',
	'image1' => 'images/img_histoire/img17_histoire.jpg',
	'image2' => 'images/img_histoire/img16_histoire.jpg',
	'image3' => 'images/img_histoire/img6_histoire.jpg',
	'alt-image1' => "Sugar Rush",
	'alt-image2' => "È un pezzo di torta",
	'alt-image3' => "Il miglior pasticciere",
	'texte' => 'I programmi televisivi di torte sono programmi popolari che mettono uno contro l\'altro pasticceri dilettanti o professionisti. Questi spettacoli offrono un mix di creatività, competizione e passione per la panificazione, con i concorrenti che competono per impressionare i giudici e vincere titoli. Al di là della competizione, questi spettacoli celebrano l\'innovazione in pasticceria e incoraggiano la condivisione di tecniche e ricette tra i partecipanti. Offrono un\'esperienza culinaria ed emotiva accattivante per gli spettatori.',
	'boutiques' => [
    [
      'nom' => 'Il miglior pasticcere',
      'ville' => 'Yvelines',
      'adresse' => 'Castello di Neuville in Gambais, Francia',
      'note' => '4.9 / 5',
    ],
    [
      'nom' => 'Corsa allo zucchero',
      'ville' => 'Los Angeles',
      'adresse' => 'Sconosciuto',
      'note' => '4.8 / 5',
    ],
    [
      'nom' => 'È un pezzo di torta',
      'ville' => 'Telford',
      'adresse' => 'La mostra internazionale della British Sugarcraft Guild e la Sugarcraft School, Telford, Inghilterra',
      'note' => '4.9 / 5',
    ],
  ],
];

//Inititialisation de la boucle : 
$categorieB = [$origine, $meilleure_patisserie, $ancienne_patisserie, $meilleure_patissier, $concours];

?>



