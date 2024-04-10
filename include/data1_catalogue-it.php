<?php
// Données pour la catégorie 1 : Catalogie
// On retrouve 5 articles dans la catégorie 1

// Tableau de commentaires pour le gâteau 1 => 
$gateau1 = [
     'id' => 1, // identifiant unique
     'url_image' => 'images/img_catalogue/img1_catalogue.jpg',  // URL de l'image
     'alt_image' => 'Santo onorato', // texte alternatif pour l'image
     'nom' => 'Santo onorato', //nom du gâteau
     'createur' => 'Chiboust', //nom du créateur
     'biographie' => 'Secondo i pasticceri Pierre Lacam e Antoine Charabot, Saint-Honoré è stato creato dal pasticcere parigino Chiboust nel 18402, ispirandosi a un dolce bordolese chiamato "flan svizzero"
      (era una specie di quiche con soufflé al formaggio). Ha chiamato la sua torta in onore della rue Saint-Honoré, dove si trovava la sua attività, rendendo così omaggio a Saint Honoré, ottavo vescovo di Amiens e santo patrono dei fornai..',// description du gâteau
     'description' => 'L\'invenzione di Saint-Honoré è spesso attribuita allo stesso Chiboust. La leggenda narra che Chiboust abbia creato questa torta in onore di Saint Honoré, unendo diverse specialità di pasticceria. 
      Avrebbe incluso una base di pasta sfoglia, una corona di choux guarnita con crème chiboust (una crema pasticciera leggera arricchita con gelatina e albumi montati a neve), e infine avrebbe decorato la torta con dei bignè caramellati.',// description du gâteau
     'pays' => 'Francia', // pays d'origine du gâteau
     'commentaire' => 'Saint-Honoré: dolce emblematico della pasticceria francese.',// commentaire sur le gâteau
     'video' => 'https://www.youtube.com/watch?v=mjeAMU3PgEc',// lien vers une vidéo liée au gâteau
     'note'=>[ // tableau associatif de notes et temps de préparation
        'tempspreparation' => '2 h 30 min',// temps de préparation du gâteau
        'difficulte' => 'Difficile', // difficulté du gâteau
        'niveau'=> 'Esperto',// niveau de compétence requis pour réaliser le gâteau
     ],
     'commentaires' => [// tableau de commentaires pour ce gâteau
        [
            'utilisateur' => 'Maria Luisa',// nom de l'utilisateur qui a laissé le commentaire
            'avis' => 'Delizioso ! La crema Chiboust è incredibilmente leggera e gustosa.',// avis de l'utilisateur
            'note' => 5,//note de l'utilisateur 
        ],
        [
            'utilisateur' => 'Jean-Claude',
            'avis' => 'Buona consistenza ma un po\' troppo dolce per i miei gusti.',
            'note' => 4,
        ]
    ],
];

// Tableau de commentaires pour le gâteau 2
$gateau2 = [
     'id' => 2,
     'url_image' => 'images/img_catalogue/img2_catalogue.jpg',
     'alt_image' => 'Torta d\'angelo',
     'nom' => 'Torta d\'angelo',
     'createur' => 'Sylvia M. Fountaine',
     'biographie' => 'L\'Angel Cake ha le sue origini negli Stati Uniti all\'inizio del XIX secolo. È spesso attribuito alle comunità Amish
      rinomati per le loro ricette di torte leggere e delicate. Il nome "Angel Cake" evoca leggerezza e consistenza ariosa
      torta, simile a quella delle nuvole.',
     'description' => 'Ciò che distingue la Angel Cake dalle altre torte è l\'uso degli albumi sbattuti
      dargli una consistenza ariosa. Fu integrato anche il lievito in polvere, un\'innovazione dell\'epoca
      nella ricetta, che ha permesso di ottenere una consistenza più leggera rispetto a quella delle torte tradizionali. La cottura viene spesso eseguita in una teglia, che consente alla torta di cuocere in modo uniforme.',
     'pays' => 'Stati Uniti',
     'commentaire' => 'Torta L\'Angelo: soffice e leggera come una nuvola.',
     'video' => 'https://www.youtube.com/watch?v=CapBvnLQ5Tc',
     'note'=>[
        'tempspreparation' => '1 h 10 min',
        'difficulte' => 'Media',
        'niveau'=> 'Da principiante a esperto',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Bernardo',
            'avis' => 'Una torta superleggera !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Stefano',
            'avis' => 'Molto buono, soprattutto con la marmellata.',
            'note' => 4,
        ]
    ],
];

// Tableau de commentaires pour le gâteau 3
$gateau3 = [
     'id' => 3,
     'url_image' => 'images/img_catalogue/img3_catalogue.jpg',
     'alt_image' => 'Foresta Nera',
     'nom' => 'Foresta Nera',
     'createur' => 'Inconnu(e)',
     'biographie' => 'La Foresta Nera è uno dei dolci più famosi e tradizionali della Germania. Il suo nome evoca la regione montuosa
      fitta Foresta Nera, dove si ritiene sia stato creato. I primi riferimenti scritti a questo dolce risalgono all\'inizio del XVIII secolo.
      La Foresta Nera è inseparabile dalla regione in cui è stata creata. Ingredienti come ciliegie, kirsch e cioccolato erano prodotti locali abbondanti nella Foresta Nera e hanno contribuito alla creazione di questa torta iconica.',
     'description' => 'La ricetta classica della Foresta Nera prevede diversi strati di pan di spagna al cioccolato, intervallati da panna montata e amarene.
      L\'amarena viene spesso preparata con il kirsch, un acquavite di ciliegie tipico della regione. La torta viene poi ricoperta con panna montata, scaglie di cioccolato e talvolta ciliegie intere per la decorazione.',
     'pays' => 'Germania',
     'commentaire' => 'La Foresta Nera: la sua combinazione unica di sapori ha conquistato gli amanti dei dolci di tutto il mondo.',
     'video' => 'https://www.youtube.com/watch?v=xqJJFh2C6-E',
      'note'=>[
        'tempspreparation' => '1 h 15 min',
        'difficulte' => 'Moyen',
        'niveau'=> 'Débutant',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Camilla',
            'avis' => 'Una ricetta assolutamente testata !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Patrizia',
            'avis' => 'Grazie mille per questo articolo! Spero che ce ne saranno altri :)',
            'note' => 5,
        ]
    ],
];

// Tableau de commentaires pour le gâteau 4
$gateau4 = [
     'id' => 4,
     'url_image' => 'images/img_catalogue/img4_catalogue.jpg',
     'alt_image' => 'Tiramisù',
     'nom' => 'Tiramisù',
     'createur' => 'sconosciuto',
     'biographie' => 'Le origini precise del tiramisù sono spesso dibattute, ma la maggior parte dei resoconti concorda sul fatto che questo dolce
      è emerso nella regione italiana del Veneto, più precisamente a Treviso o Venezia. Il termine "tiramisù" significa letteralmente "tirami su" o "riprendimi su", suggerendo l\'effetto energizzante del dolce.',
     'description' => 'La ricetta classica del tiramisù consiste generalmente in strati di biscotti imbevuti nel caffè forte, alternati ad un composto di mascarpone, zucchero e uova,
      spolverato di cacao in polvere. Alcune aggiunte, come il marsala (vino dolce italiano), sono state incorporate nella ricetta nel tempo.',
     'pays' => 'Italia',
     'commentaire' => 'Tiramisù: il dolce emblematico della cucina italiana.',
     'video' => 'https://www.youtube.com/watch?v=n1AIdNFscBU',
     'note'=>[
        'tempspreparation' => '30 min',
        'difficulte' => 'Facile',
        'niveau'=> 'Principiante',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Jacqueline',
            'avis' => 'La ricetta è facile !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Lucia',
            'avis' => 'Grazie, lo adoro ;)',
            'note' => 4,5,
        ]
    ],
];

// Tableau de commentaires pour le gâteau 5
$gateau5 = [
     'id' => 5,
     'url_image' => 'images/img_catalogue/img5_catalogue.jpg',
     'alt_image' => 'Torta Setteveli',
     'nom' => 'Torta Setteveli',
     'createur' => ' Giovanni Fiasconaro',
     'biographie' => 'La Torta Setteveli è originaria della Sicilia, isola situata nel sud Italia.
      Il suo nome, "Setteveli", significa letteralmente "sette veli" in italiano, evocando la sovrapposizione di sette strati sottili che compongono questo dolce.
      Questa torta è stata creata dalla pasticceria siciliana Pino Scaringi. Divenne famoso negli anni \'60 quando Scaringi
      ha vinto il prestigioso concorso di pasticceria organizzato dal famoso marchio italiano di cioccolato Caffarel. La vittoria ha portato la Torta Setteveli alla ribalta.',
     'description' => 'La torta Setteveli è composta da sette strati distinti, ognuno dei quali fornisce una consistenza e un sapore specifici.
      Questi strati includono tipicamente un biscotto croccante al cioccolato, ganache al cioccolato, pralina alla nocciola, mousse al cioccolato, pezzetti di nocciola tostata, glassa lucida al cioccolato e talvolta un sottile strato di foglia d\'oro per il tocco finale..',
     'pays' => 'Italia',
     'commentaire' => 'Torta Setteveli: una torta complessa a sette strati.',
     'video' => 'https://www.youtube.com/watch?v=myr1ZoZqVvg',
     'note'=>[
        'tempspreparation' => '2 h',
        'difficulte' => 'Difficile',
        'niveau'=> 'Esperto',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Matilde',
            'avis' => 'Una vera delizia.',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Luca',
            'avis' => 'Wow, mi piacerebbe fare questa ricetta a casa... Che dimensioni ha lo stampo?',
            'note' => 4,
        ]
    ],
];

//Inititialisation de la boucle : 
$categorieA = [$gateau1, $gateau2, $gateau3, $gateau4, $gateau5];

?>

