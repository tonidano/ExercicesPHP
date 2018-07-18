 <!-- <?php
$nom ='antoni';
echo ucfirst($nom);
echo date('d/m/Y H:i');

function addition($nb1,$nb2){
  if(!is_int($nb1) AND !is_int($nb2)){
    echo "Erreur, argument non numérique.";
  }else{
    echo $nb1+$nb2;
  }
}
addition(3,9);



function initiales($string){
  $string = "Gregory parfume Thierry";
    $words = explode(" ", $string);
    $initiale = '';

	foreach($words as $init){
		$initiale .= $init{0};
    }
    return strtoupper($initiale);

}

$texte = "caecotrophie, chaenichthys, microsphaera, sphaerotheca";
$texte = str_replace('ae', 'æ', $texte);
echo $texte;

$texte0 = "cæcotrophie, chænichthys, microsphæra, sphærotheca";
$texte0 = str_replace('æ', 'ae', $texte0);
echo $texte0;
 ?> -->

<!-- <?php
//$mot1 = ['petit', 'grand', 'gros', 'cool'];
//$num1 = rand(0, 3);
// echo "$mot1[$num1] ";

//$mot2 = ['hamster', 'pékinois', 'mammouthe', 'blobfish'];
//$num2 = rand(0, 3);
// echo "$mot2[$num2]";
?> -->

  <!-- <form action="fonction.php" method="post">
    <label><p>Générateur de totem</p></label>
    <div> <?php echo "$mot1[$num1] "; echo "$mot2[$num2]"; ?></div>
    <button type="submit" name="envoyer" onclick="generer()">Refresh</button>
  </form> -->



<!-- <?php
$str = "ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!";
$str = strtolower($str);
echo $str;
?> -->



<!-- <?php
function volume_dun_cone($rayon, $hauteur){

echo "Le volume du cône de rayon " .$rayon. " et de hauteur " .$hauteur. " est : "  .$volume = ($rayon * $rayon * 3.14 * $hauteur)/3 .  " cm<sup>3</sup><br>";
};
volume_dun_cone(5,2);
volume_dun_cone(3,4);
 ?> -->


<!-- <?php
echo strrev("Bonjour bonsoir");
?> -->

<?php
$texte0 = "Buvons un coup ma serpette est perdue, <br>
Mais le manche, mais le manche,  <br>
Buvons un coup ma serpette est perdue  <br>
Mais le manche est revenu.";
$texte1 = str_replace(array('a','e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin'), 'a', $texte0);
$texte2 = str_replace(array('a','e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin'), 'e', $texte0);
$texte3 = str_replace(array('a','e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin'), 'i', $texte0);
$texte4 = str_replace(array('a','e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin'), 'o', $texte0);
$texte5 = str_replace(array('a','e', 'i', 'o', 'u', 'ou', 'é', 'è', 'oi', 'ui', 'oui', 'an', 'in', 'on', 'un', 'oin'), 'u', $texte0);
echo "$texte1 <br><br> $texte2 <br><br> $texte3 <br><br> $texte4 <br><br> $texte5 ";


?>
