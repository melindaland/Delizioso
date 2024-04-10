<?php
// Données pour la catégorie 3
// les même données répétées 5 fois pour chaque article

//première recette
$recette1 = [
    'id' => 1,//identifiant unique 
    'gateau' => 'Le Fraisier 🍓',//nom gateau
    'image' => 'images/img_recette/img1_recette.jpg',//lien vers image 
    'presentation' => 'Le fraisier, un classique de la pâtisserie française, incarne l\'élégance et la délicatesse dans le monde des desserts. 
     Ce gâteau emblématique met en scène des couches de génoise légère, de crème pâtissière onctueuse et de fraises fraîches, 
     créant une symphonie de saveurs et de textures qui séduit les papilles.',//texte 
    'ingredients' => [// tableau présentant les ingrédients 
        'ingrédient1' => 'Oeufs',
        'ingrédient2' => 'Sucre',
        'ingrédient3' => 'Farine',
        'ingrédient4' => 'Beurre',
        'ingrédient5' => 'Lait',
        'ingrédient6' => 'Vanille',
        'ingrédient7' => 'Maizena',
        'ingrédient8' => 'Fraises',
        'ingrédient9' => 'Pâte d\'amandes',
        'ingrédient10' => 'Sucre glace',
    ],
    'materiaux' => [//tableau présentant les ustensiles 
        'matériel1' => 'Moule',
        'matériel2' => 'Fouet',
        'matériel3' => 'Farine',
        'matériel4' => 'Spatule',
        'matériel5' => 'Casserole',
        'matériel6' => 'Batteur électrique',
        'matériel7' => 'Bol',
        'matériel8' => 'Couteau',
        'matériel9' => 'Rouleau',
    ],
    'instructions' => [//tableau présentant les instructions 
        'Etape 1' => 'Rassembler les ingredients, préchauffer le four pour la génoise et laver les fraises.',
        'Etape 2' => 'Préparer la génoise, verser la pâte dans un moule et la faire cuire.',
        'Etape 3' => 'Préparer la crème pâtissière et la laisser refroidir.',
        'Etape 4' => 'Couper la génoise en deux, y disposer la couche de crème pâtissière et ajouter des fraises coupées en deux.',
        'Etape 5' => 'Décorer le gâteau avec du sucre glace, de la pâte d\'amande et laisser le fraisier reposer au réfrigérateur pendant toute une nuit.',
        'Etape 6' => 'Démouler le fraisier avant de servir.',
    ],
    'tutovideo' => 'https://www.youtube.com/embed/IIi2BhLdIpE?si=LVgPH4zkyimRLyIo'
];

$recette2 = [
    'id' => 2,
    'gateau' => 'Le Gâteau aux carottes 🥕',
    'image' => 'images/img_recette/img2_recette.jpg',
    'presentation' => 'Le gâteau aux carottes est une délicieuse pâtisserie qui a gagné en popularité pour sa texture moelleuse, sa saveur 
     sucrée et son ingrédient principal inhabituel : les carottes. Ce dessert allie la douceur naturelle des carottes râpées à la richesse
     d\'une pâte à gâteau traditionnelle, créant une combinaison unique et appétissante.',
    'ingredients' => [
        'ingrédient1' => 'Oeufs',
        'ingrédient2' => 'Sucre',
        'ingrédient3' => 'Farine',
        'ingrédient4' => 'Beurre',
        'ingrédient5' => 'Lait',
        'ingrédient6' => 'Vanille',
        'ingrédient7' => 'Carottes',
        'ingrédient8' => 'Sel',
        'ingrédient9' => 'Cannelle moulue',
    ],
    'materiaux' => [
        'matériel1' => 'Moule',
        'matériel2' => 'Fouet',
        'matériel3' => 'Farine',
        'matériel4' => 'Spatule',
        'matériel5' => 'Casserole',
        'matériel6' => 'Batteur électrique',
        'matériel7' => 'Bol',
        'matériel8' => 'Couteau',
        'matériel9' => 'Râpe',
    ],
    'instructions' => [
        'Etape 1' => 'Rassembler les ingredients, préchauffer le four pour la génoise et râper les carottes.',
        'Etape 2' => 'Mélanger les ingredients et ajouter les carottes.',
        'Etape 3' => 'Verser la pâte dans un moule.',
        'Etape 4' => 'Cuire le gâteau au four, le démouler puis, le laisser refroidir.',
        'Etape 5' => 'Optionnel : Préparer un glaçage avec du fromage à la crème, du sucre glace et du beurre et étaler le glaçage.',
        'Etape 6' => 'Découper et servir le gâteau.',
    ],
    'tutovideo' => 'https://www.youtube.com/embed/D3yK10KrZTI?si=22163eN-H6rKBEGl'
];

$recette3 = [
    'id' => 3,
    'gateau' => 'Le Red Velvet ❣️',
    'image' => 'images/img_recette/img4_recette.jpg',
    'presentation' => 'Le gâteau Red Velvet, avec sa texture veloutée et sa teinte rouge riche, marie subtilement 
    le cacao, la vanille et une note légèrement acidulée, créant ainsi une expérience gustative unique et irrésistible.',
    'ingredients' => [
        'ingrédient1' => 'Oeufs',
        'ingrédient2' => 'Sucre',
        'ingrédient3' => 'Farine',
        'ingrédient4' => 'Beurre',
        'ingrédient5' => 'Lait fermenté',
        'ingrédient6' => 'Vanille',
        'ingrédient7' => 'Poudre de cacao',
        'ingrédient8' => 'Colorant alimentaire rouge',
        'ingrédient9' => 'Bicarbonate de sucre',
        'ingrédient10' => 'Vinaigre blanc',
        'ingrédient11' => 'Fromage à la crème',
    ],
    'materiaux' => [
        'matériel1' => 'Moule',
        'matériel2' => 'Fouet',
        'matériel3' => 'Farine',
        'matériel4' => 'Spatule',
        'matériel5' => 'Casserole',
        'matériel6' => 'Batteur électrique',
        'matériel7' => 'Bol',
        'matériel8' => 'Tamis',
    ],
    'instructions' => [
        'Etape 1' => 'Rassembler les ingredients, préchauffer le four.',
        'Etape 2 ' => 'Tamiser ensemble la farine, le bicarbonate de soude, le cacao, et le sel.',
        'Etape 3' => 'Mélanger le sucre, l\'huile, les oeufs, le colorant, la vanille, le vinaigre blanc, le lait fermenté et les ingredients secs.',
        'Etape 4' => 'Verser la pâte dans un moule.',
        'Etape 5' => 'Cuire le gâteau au four, puis à la sortie du four, le laisser refroidir.',
        'Etape 6' => 'Dans un bol, battre ensemble le fromage à la crème, le beurre et le sucre glace.',
        'Etape 7' => 'Etaler le glaçage sur le gateau refroidi.',
        'Etape 8' => 'Couper et servez le gateau.',
    ],
    'tutovideo' => 'https://www.youtube.com/embed/HvWNxDRSwZU?si=38KsiYAmbLEkpPAT'
];

$recette4 = [
    'id' => 4,
    'gateau' => 'Le Gâteau aux pistaches 💚',
    'image' => 'images/img_recette/img3_recette.jpg',
    'presentation' => 'Le gâteau à la pistache, avec sa saveur subtilement parfumée et sa couleur caractéristique, offre 
    une expérience gustative délicate et raffinée. Confectionné avec des pistaches finement moulues, ce dessert dévoile une 
    texture moelleuse et un goût légèrement terreux. La pistache, joyau vert de la pâtisserie, apporte une touche unique et élégante à ce gâteau.',
    'ingredients' => [
        'ingrédient1' => 'Oeufs',
        'ingrédient2' => 'Sucre',
        'ingrédient3' => 'Farine',
        'ingrédient4' => 'Beurre',
        'ingrédient5' => 'Lait',
        'ingrédient6' => 'Vanille',
        'ingrédient7' => 'Sel',
        'ingrédient8' => 'Pistaches',
        'ingrédient9' => 'Levure chimique',
        'ingrédient10' => 'Crème pistache',
    ],
    'materiaux' => [
        'matériel1' => 'Moule',
        'matériel2' => 'Fouet',
        'matériel3' => 'Farine',
        'matériel4' => 'Spatule',
        'matériel5' => 'Casserole',
        'matériel6' => 'Batteur électrique',
        'matériel7' => 'Bol',
        'matériel8' => 'Couteau',
    ],
    'instructions' => [
        'Etape 1' => 'Rassembler les ingredients, préchauffer le four pour la génoise et moudre les pistaches.',
        ' ' => 'Mélanger la farine, les pistaches moulues, la levure chimique et le sel.',
        'Etape 3' => 'Battre le beurre ramolli avec le sucre jusqu\'à ce que le mélange soit crémeux et ajouter les oeufs.',
        'Etape 4' => 'Ajouter la vanille et progressivement le mélange sec en alternant avec le lait.',
        'Etape 5' => 'Versez la pâte dans un moule et cuire le gâteau au four.',
        'Etape 6' => 'Laisser le gateau refroidir, puis préparer la crème.',
        'Etape 7' => 'Etaler la crème et soupoudrer les pistaches hâchées sur le gateau.',
        'Etape 8' => 'Découper et servir le gâteau au pistache.',
    ],
    'tutovideo' => 'https://www.youtube.com/embed/cmAJok9isUU?si=FUX9a-8y8XFCck3y'
];


$recette5 = [
    'id' => 5,
    'gateau' => 'Le Gâteau aux pommes 🍏',
    'image' => 'images/img_recette/img5_recette.jpg',
    'presentation' => 'Le gâteau aux pommes, symbole réconfortant de la pâtisserie, célèbre la douceur des pommes dans une délicieuse création sucrée. 
    Avec sa texture moelleuse et ses morceaux juteux de pommes intégrés à la pâte, ce dessert évoque des souvenirs chaleureux et offre une expérience 
    gustative équilibrée entre la tendresse de la pâte et la fraîcheur fruitée des pommes.',
    'ingredients' => [
        'ingrédient1' => 'Oeufs',
        'ingrédient2' => 'Sucre',
        'ingrédient3' => 'Farine',
        'ingrédient4' => 'Beurre',
        'ingrédient5' => 'Lait',
        'ingrédient6' => 'Vanille',
        'ingrédient7' => 'Cannelle moulue',
        'ingrédient8' => 'Pommes',
        'ingrédient9' => 'Muscade moulue',
        'ingrédient10' => 'Levure chimique',
    ],
    'materiaux' => [
        'matériel1' => 'Moule',
        'matériel2' => 'Fouet',
        'matériel3' => 'Farine',
        'matériel4' => 'Spatule',
        'matériel5' => 'Casserole',
        'matériel6' => 'Batteur électrique',
        'matériel7' => 'Bol',
        'matériel8' => 'Couteau',
    ],
    'instructions' => [
        'Etape 1' => 'Préchauffer le four et fariner le moule.',
        ' ' => 'Eplucher les pommes, les couper et les arroser de jus de citron.',
        'Etape 3' => 'Dans un bol, mélanger les ingredients secs.',
        'Etape 4' => 'Battre le beurre ramoli avec le sucre pour obtenir un mélange crémeux.',
        'Etape 5' => 'Ajouter les oeufs un à un, puis l\'extrait de vanille.',
        'Etape 6' => 'Incorporer le mélange sec en alternant avec le lait et bien mélanger.',
        'Etape 7' => 'Incorporer délicatement les pommes dans pâte.',
        'Etape 8' => 'Verser la pâte dans le moule et la soupoudrer de cannelle et de sucre.',
        'Etape 9' => 'Cuire le gateau, puis le laisser refroidir.',
        'Etape 10' => 'Découper et servir le gateau aux pommes.',
    ],
    'tutovideo' => 'https://www.youtube.com/embed/csYKFEr5BY8?si=8Yri8KtsPMAjKuiw'
];

//Inititialisation de la boucle : 
$categorieC = [$recette1, $recette2, $recette3, $recette4, $recette5];

?>