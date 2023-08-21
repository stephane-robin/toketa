<?php 
session_start();

if (empty($_SESSION['utilisateur'])){
    $_SESSION['utilisateur'] = "libre";
}
$typeUtilisateur = $_SESSION['utilisateur'];

if (empty($_SESSION['niveau'])){
    $_SESSION['niveau'] = NULL;
}
$niveau = $_SESSION['niveau'];

if (empty($_SESSION['nomClasse'])){
   $_SESSION['nomClasse'] = NULL; 
}
$nomClasse = $_SESSION['nomClasse'];

if (empty($_SESSION['chapitre'])){
    $_SESSION['chapitre'] = NULL;
}
$chapitre = $_SESSION['chapitre'];

$nomPage = NULL;
$typePage = "eleve";

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];
?>

<!DOCTYPE HTML>
<html>

<?php 
// HEAD
include("head.php");

// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>

<!-- BODY -->
<body>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

<h2>Connexion</h2>

<form action="" method="post">
	<label for="pseudo" style="margin-left:20%; margin-bottom:5%;">login :</label>
  	<input type="text" id="pseudo" name="pseudo" style="margin-left:3%; margin-bottom:5%;"><br/>

	<label for="pw" style="margin-left:20%;">mot de passe :</label>
  	<input type="text" id="pw" name="pw" style="margin-left:3%;"><br/>
	<button class="bouton" style='margin-bottom: 3%; margin-top: 5%; margin-left:20%;' type="submit" value="connexion">&#128218; Valider</button>
</form>


<p style='margin-left:20%;'><a href="">Je m'inscris...</a></p>


</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
