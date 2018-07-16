<!-- <?php
$chambre_est_sale  = false;
$chambre_proprete = "immaculée";

if( $chambre_est_sale == true ) {
  // code à exécuter si la condition est TRUE
  echo "Range ta chambre, on dirait la cage d'un bonobo! ";

  if ($chambre_proprete == "dégoutante") {
  echo "Misère, une vraie porcherie";

  } elseif ($chambre_proprete == "immaculée") {
    echo "hmmm, c'est frais et pimpant";
}
} else {
       // code à exécuter si toutes les conditions précédentes sont FALSE
       echo "Ta chambre est trop propre, vis un peu! ";

     if ($chambre_proprete == "en ordre") {
         echo "Et bien voilà, un travail vite fait, bien fait";

     } elseif ($chambre_proprete == "immaculée") {
       echo "hmmm, c'est frais et pimpant!";

    } elseif ($chambre_proprete == "maniaque") {
      echo "Une vraie salle de chirurgie stérile";
     }
}
?> -->

<!-- <?php
$heure = date('H:i');

if($heure >= date('05:00') AND $heure <= date('09:00')){
echo "Bonjour! Il est $heure";}
elseif($heure >date('09:01') AND $heure <= date('12:00')){
echo "Bonne journée! Il est $heure";}
elseif($heure >date('12:01') AND $heure <= date('16:00')){
echo "Bon après-midi! Il est $heure";}
elseif($heure >date('16:01') AND $heure <= date('21:00')){
echo "Bonne soirée! Il est $heure";}
elseif($heure >date('21:01') AND $heure < date('05:00')){
echo "Bonne nuit! Il est $heure";}

 ?> -->


 <!-- <form method="GET" action="conditions.php">
   <h3>Etes-vous : </h3>
   <p><label><input type="radio" name="genre" value="homme"> un homme ? </label></p>
   <p><label><input type="radio" name="genre" value="femme"> une femme ? </label></p>
   <h3>Parlez-vous anglais ? </h3>
   <p><label><input type="radio" name="anglais" value="yes">Yes </label></p>
   <p><label><input type="radio" name="anglais" value="no">No </label></p>
   <p><label> Quel est votre âges ? <input type="number" name="age" value=""></label></p>
 </form>

<?php

if($_GET['genre'] == 'homme' AND $_GET['anglais'] == 'no'){

  if($_GET['age'] <12){
    echo "Tu as " .$_GET['age']. " ans, Salut petit!";
  }
  elseif($_GET['age'] >=12 AND $_GET['age']<=18){
    echo "Tu as " .$_GET['age']. " ans, Salut l'adolescent!";
  }
  elseif($_GET['age'] >18 AND $_GET['age']<= 115){
    echo "Tu as " .$_GET['age']. " ans, Salut monsieur l'adulte!";
  }
  elseif($_GET['age'] >115){
      echo "Tu as " .$_GET['age']. " ans, Wow! Toujours vivant?";
  }

}elseif($_GET['genre'] == 'homme' AND $_GET['anglais'] == 'yes'){
  if($_GET['age'] <12){
    echo "You are " .$_GET['age']. " yo, Hello boy!";
  }
  elseif($_GET['age'] >=12 AND $_GET['age']<=18){
    echo "You are " .$_GET['age']. " yo, Hello Teenage boy!";
  }
  elseif($_GET['age'] >18 AND $_GET['age']<= 115){
    echo "You are " .$_GET['age']. " yo, Hello Sir!";
  }
  elseif($_GET['age'] >115){
      echo "You are " .$_GET['age']. " yo, Wow! Still alive, old man?";
  }

}else{
  if($_GET['genre'] == 'femme' AND $_GET['anglais'] == 'no'){
    if($_GET['age'] <12){
      echo "Tu as " .$_GET['age']. " ans, Salut petite!";
    }
    elseif($_GET['age'] >=12 AND $_GET['age']<=18){
      echo "Tu as " .$_GET['age']. " ans, Salut l'adolescente!";
    }
    elseif($_GET['age'] >18 AND $_GET['age']<= 115){
      echo "Tu as " .$_GET['age']. " ans, Salut madame l'adulte!";
    }
    elseif($_GET['age'] >115){
        echo "Tu as " .$_GET['age']. " ans, Wow! Toujours vivante?";
    }
  }elseif($_GET['genre'] == 'femme' AND $_GET['anglais'] == 'yes'){
    if($_GET['age'] <12){
      echo "You are " .$_GET['age']. " yo, Hello girl!";
    }
    elseif($_GET['age'] >=12 AND $_GET['age']<=18){
      echo "You are" .$_GET['age']. " yo, Hello Teenage girl!";
    }
    elseif($_GET['age'] >18 AND $_GET['age']<= 115){
      echo "You are " .$_GET['age']. " yo, Hello Lady!";
    }
    elseif($_GET['age'] >115){
        echo "You are " .$_GET['age']. " yo, Wow! Still alive, old lady?";
    }

  }
  }
    ?> -->

    <!-- <form method="GET" action="conditions.php">
          <p><label>Votre note /20 <input type="number" name="note" value=""></label></p>
    </form>

<?php
if($_GET['note'] >= 1 AND  $_GET['note'] <= 3){
  echo "Ce travail est vraiment nul";
}
elseif($_GET['note'] >= 4 AND  $_GET['note'] <= 5){
echo "Ce travail est nul";
}
elseif($_GET['note'] >= 6 AND  $_GET['note'] <= 9){
echo "Ce travail n'est pas terrible";
}
elseif($_GET['note'] == 10){
echo "Tout juste";
}
elseif($_GET['note'] >= 11 AND  $_GET['note'] <= 14){
echo "C'est pas mal";
}
elseif($_GET['note'] >= 15 AND  $_GET['note'] <= 18){
echo "Bravo!";
}
elseif($_GET['note'] >= 19 AND  $_GET['note'] <= 20){
echo "Police! Arrêtez ce tricheur!";
}
 ?> -->

 <form method="GET" action="conditions.php">
   <h3>Etes-vous : </h3>
   <p><label><input type="radio" name="genre" value="homme"> un homme ? </label></p>
   <p><label><input type="radio" name="genre" value="femme"> une femme ? </label></p>
   <p><label> Quel est votre âges ? <input type="number" name="age" value=""></label></p>
 </form>

 <!-- <?php
if($_GET['age'] >= 21 AND $_GET['age'] <=40 AND $_GET['genre'] == 'femme'){
  echo "Bonjour, bienvenue parmi nous!";
}
else{
  echo "Désolé, vous ne remplissez pas les critères de sélection.";
}
  ?> -->

<!-- <?php
$age = $_GET['age'];
$genre = ($age >= 21 AND $age <=40 AND $_GET['genre'] == 'femme') ? "Bonjour, bienvenue parmi nous!" : "Désolé, vous ne remplissez pas les critères de sélection.";
echo "$genre"
 ?> -->
