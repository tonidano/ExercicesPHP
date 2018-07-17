<form method="POST" action="excuse.php" >
<p><label>Nom de l'enfant <input type="text" name="nomenfant" value=""></label></p>
<p><label>Nom de l'institutrice <input type="text" name="nominstit" value=""></label></p>
<p><label><input type="radio" name="excuse" value="maladie">Maladie</label></p>
<p><label><input type="radio" name="excuse" value="deces">Décès de l'animal de compagnie (ou d'un membre de la famille)</label></p>
<p><label><input type="radio" name="excuse" value="activite">Activité extra-scolaire importante</label></p>
<p><label><input type="radio" name="excuse" value="greves">Grèves</label></p>
<button type="submit" name="valider">Envoyer</button>
</form>

<?php


if($_POST['excuse'] == 'maladie'){
  echo "Bonjour madame "  .$_POST['nominstit'].  ", veuillez excuser " .$_POST['nomenfant']. " pour son absence du " .$heure = date('d/m/Y'). " pour cause de maladie. Veuillez agréer madame l'expression de mes plus sincères salutations. Les parents de " .$_POST['nomenfant']. ".";
}elseif ($_POST['excuse'] == 'deces') {
  echo "Bonjour madame "  .$_POST['nominstit'].  ", veuillez excuser " .$_POST['nomenfant']. " pour son absence du " .$heure = date('d/m/Y'). " pour cause du décès d'un être cher. Veuillez agréer madame l'expression de mes plus sincères salutations. Les parents de " .$_POST['nomenfant']. ".";
}elseif ($_POST['excuse'] == 'activite') {
  echo "Bonjour madame "  .$_POST['nominstit'].  ", veuillez excuser " .$_POST['nomenfant']. " pour son absence du " .$heure = date('d/m/Y'). " pour cause d'activité extra-scolaire important. Veuillez agréer madame l'expression de mes plus sincères salutations. Les parents de " .$_POST['nomenfant']. ".";
}elseif ($_POST['excuse'] == 'greves') {
  echo "Bonjour madame "  .$_POST['nominstit'].  ", veuillez excuser " .$_POST['nomenfant']. " pour son absence du " .$heure = date('d/m/Y'). " pour cause de grèves des transports en commun. Veuillez agréer madame l'expression de mes plus sincères salutations. Les parents de " .$_POST['nomenfant']. ".";
}
if ( strlen($_POST['nominstit']) == 0 ){
  echo "[Vous avez oublié de remplir le champs.]";
}
if ( strlen($_POST['nomenfant']) == 0 ){
  echo "[Vous avez oublié de remplir le champs.]";
}

 ?>
