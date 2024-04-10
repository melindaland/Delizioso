<?php
// Données pour la catégorie 1 : Catalogie
// On retrouve 5 articles dans la catégorie 1

// Tableau de commentaires pour le gâteau 1 => 
$gateau1 = [
     'id' => 1,
     'url_image' => 'images/img_catalogue/img1_catalogue.jpg',
     'alt_image' => 'Saint-Honoré',
     'nom' => 'Saint-Honoré',
     'createur' => 'Chiboust',
     'biographie' => 'Selon les pâtissiers Pierre Lacam et Antoine Charabot, le Saint-Honoré a été créé par le pâtissier parisien Chiboust en 18402, en s\'inspirant d\'un dessert bordelais appelé « flan suisse » 
     (c\'était une sorte de quiche soufflée au fromage). Il a donné à son gâteau le nom de la rue Saint-Honoré, où son commerce était installé, rendant du même coup hommage à Saint Honoré, huitième évêque d\'Amiens et patron des boulangers.',
     'description' => 'L\'invention du Saint-Honoré est souvent attribuée à Chiboust lui-même. La légende raconte que Chiboust a créé ce gâteau en l\'honneur de Saint Honoré, en combinant différentes spécialités de pâtisserie. 
     Il aurait intégré une base de pâte feuilletée, une couronne de choux garnis de crème chiboust (une crème pâtissière légère enrichie de gélatine et de blancs d\'œufs montés en neige), et enfin, il aurait décoré le gâteau avec des petits choux caramélisés.',
     'pays' => 'France',
     'commentaire' => 'Le Saint-Honoré : dessert emblématique de la pâtisserie française.',
     'video' => 'https://www.youtube.com/watch?v=mjeAMU3PgEc',
     'note'=>[
        'tempspreparation' => '2 h 30 min',
        'difficulte' => 'Difficile',
        'niveau'=> 'Expert',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Marie-Louise',
            'avis' => 'Délicieux ! La crème chiboust est incroyablement légère et savoureuse.',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Jean-Claude',
            'avis' => 'Bonne texture mais un peu trop sucré à mon goût.',
            'note' => 4,
        ]
    ],
];

$gateau2 = [
     'id' => 2,
     'url_image' => 'images/img_catalogue/img2_catalogue.jpg',
     'alt_image' => 'Angel Cake',
     'nom' => 'Angel Cake',
     'createur' => 'Sylvia M. Fountaine',
     'biographie' => 'L\'Angel Cake trouve ses origines aux États-Unis au début du XIXe siècle. Il est souvent attribué aux communautés amish 
     qui étaient réputées pour leurs recettes de gâteaux légers et délicats. Le nom "Angel Cake" évoque la légèreté et la texture aérienne 
     du gâteau, semblable à celle des nuages.',
     'description' => 'Ce qui distingue l\'Angel Cake des autres gâteaux est l\'utilisation de blancs d\'œufs battus en neige pour 
     lui donner une texture aérée. La levure chimique, une innovation de l\'époque, a également été intégrée 
     dans la recette, ce qui a permis d\'obtenir une texture plus légère que celle des gâteaux traditionnels. La cuisson se fait souvent dans un moule à cheminée, ce qui permet au gâteau de cuire uniformément.',
     'pays' => 'Etats-Unis',
     'commentaire' => 'L\'Angel Cake : doux et léger comme un nuage.',
     'video' => 'https://www.youtube.com/watch?v=CapBvnLQ5Tc',
     'note'=>[
        'tempspreparation' => '1 h 10 min',
        'difficulte' => 'Moyen',
        'niveau'=> 'Débutant à Expert',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Bernard',
            'avis' => 'Un gâteau super léger !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Stéphane',
            'avis' => 'Très bon, surtout avec de la confiture.',
            'note' => 4,
        ]
    ],
];

$gateau3 = [
     'id' => 3,
     'url_image' => 'images/img_catalogue/img3_catalogue.jpg',
     'alt_image' => 'Forêt Noire',
     'nom' => 'Forêt Noire',
     'createur' => 'Inconnu(e)',
     'biographie' => 'La Forêt Noire est l\'une des pâtisseries les plus célèbres et traditionnelles d\'Allemagne. Son nom évoque la région montagneuse 
     dense de la Forêt-Noire, où elle aurait été créée. Les premières références écrites à ce gâteau remontent au début du XVIIIe siècle.
     La Forêt Noire est indissociable de la région où elle a été créée. Les ingrédients tels que les cerises, le kirsch et le chocolat étaient des produits locaux abondants dans la Forêt-Noire, contribuant à la création de ce gâteau emblématique.',
     'description' => 'La recette classique de la Forêt Noire comprend plusieurs couches de génoise au chocolat, intercalées avec de la crème fouettée et des cerises noires. 
     La cerise noire est souvent préparée avec du kirsch, une eau-de-vie de cerise typique de la région. Le gâteau est ensuite recouvert de crème fouettée, de copeaux de chocolat, et parfois de cerises entières pour la décoration.',
     'pays' => 'Allemagne',
     'commentaire' => 'La Forêt Noire : sa combinaison unique de saveurs a conquis les amateurs de desserts du monde entier.',
     'video' => 'https://www.youtube.com/watch?v=xqJJFh2C6-E',
     'note'=>[
        'tempspreparation' => '1 h 15 min',
        'difficulte' => 'Moyen',
        'niveau'=> 'Débutant',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Camille',
            'avis' => 'Une recette a testé absolument !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Patricia',
            'avis' => 'Merci beaucoup pour cet article ! J\'espère qu\'il y en aura d\'autres :)',
            'note' => 5,
        ]
    ],
];

$gateau4 = [
     'id' => 4,
     'url_image' => 'images/img_catalogue/img4_catalogue.jpg',
     'alt_image' => 'Tiramisu',
     'nom' => 'Tiramisu',
     'createur' => 'Inconnu(e)',
     'biographie' => 'Les origines précises du tiramisu sont souvent discutées, mais la plupart des récits s\'accordent à dire que ce dessert
     a émergé dans la région de la Vénétie en Italie, plus spécifiquement à Trévise ou à Venise. Le terme "tiramisu" signifie littéralement "tire-moi vers le haut" ou "remonte-moi", suggérant l\'effet énergisant du dessert.',
     'description' => 'La recette classique du tiramisu est généralement composée de couches de biscuits imbibés de café fort, alternées avec un mélange de mascarpone, de sucre et d\'œufs, 
     saupoudrées de cacao en poudre. Certains ajouts, comme le marsala (vin doux italien), ont été intégrés à la recette au fil du temps.',
     'pays' => 'Italie',
     'commentaire' => 'Le Tiramisu : le dessert emblématique de la cuisine italienne.',
     'video' => 'https://www.youtube.com/watch?v=n1AIdNFscBU',
     'note'=>[
        'tempspreparation' => '30 min',
        'difficulte' => 'Facile',
        'niveau'=> 'Débutant',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Jacqueline',
            'avis' => 'La recette est facile !',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Lucie',
            'avis' => 'Merci, j\'adore ;)',
            'note' => 4,5,
        ]
    ],
];

$gateau5 = [
     'id' => 5,
     'url_image' => 'images/img_catalogue/img5_catalogue.jpg',
     'alt_image' => 'Gâteau Setteveli',
     'nom' => 'Gâteau Setteveli',
     'createur' => ' Giovanni Fiasconaro',
     'biographie' => 'Le Gâteau Setteveli est originaire de Sicile, une île située au sud de l\'Italie. 
     Son nom, "Setteveli", signifie littéralement "sept voiles" en italien, évoquant la superposition de sept fines couches qui composent ce dessert.
     Ce gâteau a été créé par la pâtisserie sicilienne Pino Scaringi. Il est devenu célèbre dans les années 1960 lorsque Scaringi a 
     remporté le prestigieux concours de pâtisserie organisé par la célèbre marque italienne de chocolat Caffarel. La victoire a propulsé le Gâteau Setteveli sous les feux de la rampe.',
     'description' => 'Le Gâteau Setteveli est composé de sept couches distinctes, chacune apportant une texture et une saveur spécifiques. 
     Ces couches comprennent généralement un biscuit croustillant au chocolat, une ganache au chocolat, un praliné aux noisettes, une mousse au chocolat, des éclats de noisettes torréfiées, un glaçage au chocolat brillant, et parfois une fine feuille d\'or pour la touche finale.',
     'pays' => 'Italie',
     'commentaire' => 'Le Gâteau Setteveli : un gâteau complexe à sept couches.',
     'video' => 'https://www.youtube.com/watch?v=myr1ZoZqVvg',
     'note'=>[
        'tempspreparation' => '2 h',
        'difficulte' => 'Difficile',
        'niveau'=> 'Expert',
     ],
     'commentaires' => [
        [
            'utilisateur' => 'Mathilde',
            'avis' => 'Un vrai régal.',
            'note' => 5,
        ],
        [
            'utilisateur' => 'Luc',
            'avis' => 'Waouh, j\'aimerais faire cette recette à la maison... Quelle est la dimension du moule ? ',
            'note' => 4,
        ]
    ],
];

//Inititialisation de la boucle : 
$categorieA = [$gateau1, $gateau2, $gateau3, $gateau4, $gateau5];

?>

