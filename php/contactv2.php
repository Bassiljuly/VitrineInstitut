<?php

$nom;

if(($_POST["envoi"]) && ($_POST["nom"])){

  header('location:../templates/messageform.php');
  $nom = $_POST["nom"];
}else{
  
  header('location:../templates/contactform.php');

  }
  



// /* Récupération des informations du formulaire*/
// if (get_magic_quotes_gpc())
// {
//  $nom = stripslashes(trim($_POST['nom']));
//  $mail = stripslashes(trim($_POST['email']));
//  $message = stripslashes(trim($_POST['message']));
//  $objet = stripslashes(trim($_POST['objet']));
// }
// else
// {
//  $nom = trim($_POST['nom']);
//  $mail = trim($_POST['email']);
//  $message = trim($_POST['message']);
//  $objet = trim($_POST['objet']);
// }
// /*Vérifie si l'adresse mail est au bon format */
//  $regex_mail = '/^[-+.w]{1,64}@[-.w]{1,64}.[-.w]{2,6}$/i';
//  /*Verifie qu il n y est pas d en tête dans les données*/
// $regex_head = '/[nr]/';
// /*Vérifie qu il n y est pas d erreur dans adresse mail*/
//  if (!preg_match($regex_mail, $mail))
//  {
//  $alert = 'L adresse '.$mail.' n est pas valide';
//  }
//  else
// {
//  $courriel = 1;
// }
// /* On affiche l'erreur s'il y en a une */
// if (!empty($alert))
// {
//  $courriel = 0;
// }
// /* On vérifie qu'il n'y a aucun header dans les champs */
// if (preg_match($regex_head, $nom)
//  || preg_match($regex_head, $mail)
//  || preg_match($regex_head, $objet)
//  || preg_match($regex_head, $message))
// {
//  $alert = 'En-têtes interdites dans les champs du formulaire';
// }
// else
// {
//  $header = 1;
// }
// /* On affiche l'erreur s'il y en a une */
// if (!empty($alert))
// {
//  $header = 0;
// }
// if (empty($mail)
//  || empty($nom)
//  || empty($message))
// {
//  $alert = 'Tous les champs doivent être renseignés';
// }
// else
// {
//  $renseigne = 1;
// }
// /* On affiche l'erreur s'il y en a une */
// if (!empty($alert))
// {
//  $renseigne = 0;
// }
// /* Si les variables sont bonne */
// if ($renseigne == 1 AND $header == 1 AND $courriel == 1)
// {
// /*Envoi du mail*/

// /*Le destinataire*/
// $to="bassiljuly@gmail.com";

// /*Le sujet du message qui apparaitra*/
// $sujet="Message depuis le site";
// $msg = '';
// /*Le message en lui même*/
// /*$msg = 'Mail envoye depuis le site' "Mabeaute";*/
// $msg .= 'Nom : '.$nom."Mabeaute";
// $msg .= 'Mail : '.$mail."Mabeaute";
// $msg .= 'Objet : '.$objet."Mabeaute";
// $msg .= 'Message : '.$message."Mabeaute";
// /*Les en-têtes du mail*/
// $headers = 'From: MESSAGE DU SITE FAFA<bassiljuly@gmail.com>'."rn";
// $headers .= "rn";
// /*L'envoi du mail - Et page de redirection*/
// mail($to, $sujet, $msg, $headers);
//   // include('../templates/home.php');

//  // header('Location:http://localhost/sites/InstitutBeaute/templates/home.php');
// // echo '<p>'.$message_envoye.'</p>';
// // echo '<p>'.$message_envoye.'</p>' .'<p><a href="../templates/home">Accueil</p>';

//  }
//   else
// {
//   // header('Location:http://localhost/sites/InstitutBeaute/templates/home.php');
// // include('../templates/home.php');
//    // echo '<p>'.$message_non_envoye.'</p>';

// };

//  // fin du if (!isset($_POST['envoi']))

// // if (($err_formulaire) || (!isset($_POST['envoi'])))
// // {
// // // afficher le formulaire
// // echo  '
// // <form id="contact" method="post" action="'.$form_action.'">
// // <fieldset><legend>Vos coordonnées</legend>
// // <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" /></p>
// // <p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($mail).'" /></p>
// // </fieldset>
// //
// // <fieldset><legend>Votre message :</legend>
// // <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" /></p>
// // <p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
// // </fieldset>
// //
// // <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
// // </form>';
// // };


// // header('Location:http://www.fafa-informatique.com');

?>
