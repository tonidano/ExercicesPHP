<form method="GET" action="conditions-switch.php">
      <p><label>Votre note /20 <input type="number" name="note" value=""></label></p>
</form>

<?php
$note = "";

switch($_GET['note']){

  case 0 :
  echo "zéro pointé!";
  break;
  case 1 :
  echo "Ce travail est vraiment nul";
  break;
  case 2 :
  echo "Ce travail est vraiment nul";
  break;
  case 3 :
  echo "Ce travail est vraiment nul";
  break;
  case 4 :
  echo "Ce travail est nul";
  break;
  case 5 :
  echo "Ce travail est nul";
  break;
  case 6 :
  echo "Ce travail n'est pas terrible";
  break;
  case 7 :
  echo "Ce travail n'est pas terrible";
  break;
  case 8 :
  echo "Ce travail n'est pas terrible";
  break;
  case 9 :
  echo "Ce travail n'est pas terrible";
  break;
  case 10 :
  echo "Tout juste!";
  break;
  case 11 :
  echo "C'est pas mal";
  break;
  case 12 :
  echo "C'est pas mal";
  break;
  case 13 :
  echo "zéro pointé!";
  break;
  case 14 :
  echo "C'est pas mal";
  break;
  case 15 :
  echo "Bravo!";
  break;
  case 16 :
  echo "Bravo!";
  break;
  case 17 :
  echo "Bravo!";
  break;
  case 18 :
  echo "Bravo!";
  break;
  case 19 :
  echo "Police! Arrêtez ce tricheur!";
  break;
  case 20 :
  echo "Police! Arrêtez ce tricheur!";
  break;
  default :
  echo "ce n'est pas une note valide";
}
 ?>
