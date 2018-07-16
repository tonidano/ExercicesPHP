<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['mon_prenom']; ?>!</h1>
<?php

echo $mon_prenom = "Antoni";
echo $mon_age = 28;
echo $faim = true;
echo $couleur_yeux = "vert";
echo $famille = array('Antoni','Patricia','Piero');

if( $temperature >= 15 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";
 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
 }

 ?>


  </body>
</html>
