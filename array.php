<?php
// $famille = array('Patty', 'Piero', 'Antoni');
// print_r($famille);
// $platprefere = ['Steack frites', 'sauce Sambre & Meuse', 'Spaghetti bolognese'];
// print_r($platprefere);
// $filmprefere = ['Miss détective', 'Constantine', 'La mort vous va si bien'];
// echo $filmprefere[0];
$moi = array (
    'prenom' => 'Antoni',
    'nom' => 'Dalle Nogare',
    'age' => 28,
    'taille (cm)' => 185,
    'fan_de_rando' => true,
    'fan_de_foot' => false,
    'hobbies' => ['randonnée', 'mythologie', 'animaux']
    );
$papa = array (
    'prenom' => 'Pierre',
    'nom' => 'Dalle Nogare',
    'age' => 64,
    'taille (cm)' => 175,
    'fan_de_rando' => true,
    'fan_de_foot' => true,
    'hobbies' => ['randonnée', 'moto', 'mots croisés']
    );
    $moi['papa'] = $papa;
    $moi['hobbies'] [] = 'taxidermie';
    $moi['nom']= 'DelAquila';
echo '<pre>';
print_r($moi);
echo '</pre>';

     count($moi['hobbies']);
     count($papa['hobbies']);
    $sommehobbies = count($moi['hobbies']) + count($papa['hobbies']);
    echo "nombre de hobbies = $sommehobbies";

$toi = array (
    'prenom' => 'Marine',
    'nom' => 'DiLuna',
    'age' => 30,
    'taille (cm)' => 169,
    'fan_de_rando' => true,
    'fan_de_foot' => false,
    'hobbies' => ['randonnée', 'mythologie', 'couture']
    );
$intersection = array_intersect($moi['hobbies'], $toi['hobbies']);
echo '<pre>';
print_r($intersection);
echo '<pre>';

$fusion = array_merge($moi['hobbies'], $toi['hobbies']);
echo '<pre>';
print_r($fusion);
echo '<pre>';

$web_development = array(
  'frontend' => [],
  'backend' => []
);
$web_development['frontend'] = ['xhtml', 'CSS', 'Javascript'];
$web_development['backend'] = ['Ruby on Rails', 'Flash'];
$web_development['frontend'] [0] = 'html';
array_pop($web_development['backend']);

echo '<pre>';
print_r($web_development);
echo '<pre>';


 ?>
