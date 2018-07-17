  <?php
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
?>
