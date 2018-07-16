<form  action="excuse.php" method="GET">
<p><label>Nom de l'enfant<input type="text" name="nomenfant" value=""></label></p>
<p><label>Nom de l'institutrice<input type="text" name="nominstit" value=""></label></p>
<p><label><input type="radio" name="excuse" value="maladie">Maladie</label></p>
<p><label><input type="radio" name="excuse" value="décès">Décès de l'animal de compagnie (ou d'un membre de la famille)</label></p>
<p><label><input type="radio" name="excuse" value="activité">Activité extra-scolaire importante</label></p>
<p><label><input type="radio" name="excuse" value="autre">Autre</label></p>
</form>

<?php

  echo "Bonjour madame " .$_GET['nominstit']. ", veuillez excuser " .$_GET['nomenfant']. "pour son absence du " .$heure = date('d/m/Y'). " suite à " .$_GET['excuse']. ".";
 ?>
