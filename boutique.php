<?php

$articles = ["Télévisions", "Consoles", "Téléphones" , "Montres connectées", "Jeux vidéos"];
// Note : "Télévisions" correspond à l'article 0, "Consoles" à l'article 1 etc

// Création du tableau contenant les articles de la boutique.

$stocks = [8, 6, 15, 12, 20];
$ventes = [0,0,0,0,0];


for($i = 0; $i < count($articles); $i++ ){
    echo $articles[$i]. ", ";
}
echo PHP_EOL;

//Affichage des différents articles avec une boucle "for"

foreach($articles as $article){
    echo $article. ", ";
}
echo PHP_EOL;

//Affichage des différents articles avec une boucle "foreach"


$i = 0;

for($articles[$i] = $stocks[$i]; $i < count($articles); $i++ ){
    echo "$articles[$i] : $stocks[$i] quantités en stock";
    echo PHP_EOL;
}

// Affichage des articles avec leurs stocks respectifs

$achat = readline("Saisissez un article (par son numéro de 0 à 4) et la quantité achetée de cet article : ");
// Note : la saisie doit être faite sous la forme suivante : numarticlechoisi, qtéchoisie 
// Ex : 0, 1

$numarticlechoisi = substr($achat, 0, 1);
$qtéchoisie = substr($achat, 3);

// Choix de l'article et de sa quantité

if ($qtéchoisie > $stocks[$numarticlechoisi]){
    echo "Le stock est insuffisant";
    echo PHP_EOL;
}else{
    $stocks[$numarticlechoisi] -=$qtéchoisie;
    $ventes[$numarticlechoisi] += $qtéchoisie;
    echo PHP_EOL;
    echo "Vente effectuée";
    echo PHP_EOL;
}

// Réalisation de la vente


$ajout = readline("Saisissez un article (par son numéro de 0 à 4) et la quantité à ajouter de cet article : ");
// Note : la saisie doit être faite sous la forme suivante : numarticlechoisi, qtéchoisie 
// Ex : 0, 1
$numarticlechoisi = substr($ajout, 0, 1);
$qtéchoisie = substr($ajout, 3);
$stocks[$numarticlechoisi] +=$qtéchoisie;
echo $stocks[$numarticlechoisi];  
echo PHP_EOL;

// Réapprovisionnement de l'article

foreach($articles as $article){
    echo $article. ", " ;
}
echo PHP_EOL;

foreach($stocks as $stock){
    echo $stock. ", ";
}
echo PHP_EOL;

// Synthèse de l'état actuel de la boutique


if ($article==0){
    echo "L'article $article est en rupture de stock.";
    echo PHP_EOL;
}

// Rupture de stock

foreach($articles as $article) {
    

        echo "$article : $ventes[$numarticlechoisi] quantités achetées";
        echo PHP_EOL;
    
    
}
// Suivi des ventes


$suppression = readline("Saisissez un article (par son numéro de 0 à 4) à supprimer : ");

unset($articles[$suppression]);
unset($stocks[$suppression]);
unset($ventes[$suppression]);

// Suppression de l'article selectionné et de ses stocks 

foreach($articles as $article){
    echo $article. ", " ;
}
echo PHP_EOL;

foreach($stocks as $stock){

    echo $stock. ", ";
}
echo PHP_EOL;

// Liste des articles restants et de leurs quantités


    

