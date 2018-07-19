<?php
// switch ($_POST['choix']){
//   case 'licorne' :
//   echo '<img src="https://media.giphy.com/media/7jTHo6KG8pseQ/giphy.gif"/>';
//   break;
//   case 'chat' :
//   echo '<img src="https://media.giphy.com/media/mlvseq9yvZhba/giphy.gif"/>';
//   break;
//   case 'humain' :
//   echo '<img src="https://media.giphy.com/media/3oKIPkYSOUjeDSy2iI/giphy.gif"/>';
//   break;
// }

$licorne = '<img src="https://media.giphy.com/media/7jTHo6KG8pseQ/giphy.gif"/>';
$chat = '<img src="https://media.giphy.com/media/mlvseq9yvZhba/giphy.gif"/>';
$humain = '<img src="https://media.giphy.com/media/3oKIPkYSOUjeDSy2iI/giphy.gif"/>';

$choix = $_POST['choix'] == 'licorne' ?  $licorne : ($_POST['choix'] == 'chat' ?  $chat :  $humain);

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="licorne.php" method="post">
      <h1>Es-tu un humain, un chat ou une licorne ?</h1>
      <p><label><input type="radio" name="choix" value="licorne">Licorne</label></p>
      <p><label><input type="radio" name="choix" value="chat">Chat</label></p>
      <p><label><input type="radio" name="choix" value="humain">Humain</label></p>
      <button type="submit" name="valider">Valider</button>
    </form>
    <p> <?php echo $choix;  ?> </p>
  </body>
</html>
