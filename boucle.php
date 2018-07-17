<!-- <?php
$pronoms_personnels = array('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');

foreach($pronoms_personnels as $pronoms_personnels) {
  if($pronoms_personnels == 'Je'){
echo "$pronoms_personnels code <br>";
}elseif($pronoms_personnels == 'Tu'){
echo "$pronoms_personnels codes <br>";
}elseif($pronoms_personnels == 'Il/Elle'){
echo "$pronoms_personnels code <br>";
}elseif($pronoms_personnels == 'Nous'){
echo "$pronoms_personnels codons <br>";
}elseif($pronoms_personnels == 'Vous'){
echo "$pronoms_personnels codez <br>";
}elseif($pronoms_personnels == 'Elles/Ils'){
echo "$pronoms_personnels codent <br>";
}
}
?> -->

<!-- <?php
// $nombre_de_lignes = 1;
// while ($nombre_de_lignes <= 120)
// {
//     echo "$nombre_de_lignes <br>";
//     $nombre_de_lignes++;
// }

// for ($nombre_de_lignes = 1; $nombre_de_lignes <= 120; $nombre_de_lignes++)
// {
//     echo  "$nombre_de_lignes <br>";;
// }

$classe = ['Maxime','François','Marine','Rachel','Dimitri'];
foreach ($classe as $classe){
  echo "$classe <br>";
}
?> -->

<?php
$pays = ['DE'=>'Allemagne', 'BE'=>'Belgique','ES'=>'Espagne','FR'=>'France', 'IT'=>'Italie','LU'=>'Luxembourg', 'NL'=>'Pays-Bas','P'=>'Portugal','UK'=>'Royaumes-Unis', 'CH'=> 'Suisse'];
?>

<form action="boucle.php" method="POST">
  <select name="pays">
    <?php
   foreach($pays as $key => $value)
   {
   echo "<option value='$key'> $key</option>";
   }
?>
  </select>
  <button type="submit" name="envoyer">Envoyer</button>
</form>
