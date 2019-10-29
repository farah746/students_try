
<?php
try {
$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
 } catch(Exception $e) {
 die('Erreur : '.$e->getMessage());
 }
// On récupère les données du formulaire
    $firstname=$_POST['firstname'] ;
    $lastname=$_POST['lastname'] ;
    $email=$_POST['email'] ;
    $phone=$_POST['phone'] ;
// On ajoute une entrée dans la table personne
$nb_modifs = $bdd->exec("UPDATE students ");
echo $nb_modifs . ' entrées ont été modifiées !';
?>