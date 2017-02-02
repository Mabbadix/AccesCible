<?php 
/** Importation de l'autoloader **/

require 'class/Autoloader.php';
$autoload = new Autoloader;
$autoload->register();

//******Connect BD********
require 'connData.php';
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échoué.

$utm = new UtilisateurManager($bdd);


if(isset($_GET['key'])){
    $key = $_GET['key'];
    $utm->verifEmail($key);
}else{
}
header('Location: index.php');
?>