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
$typePage = "enseignant";

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

<h2>Connexion</h2>

<?php


if(isset($_POST['pseudo'])){
    $pseudo = valider_saisie($_POST['pseudo']);
}
else{
    $pseudo = NULL;
}

if(isset($_POST['pw'])){
    $pw = valider_saisie($_POST['pw']);
}
else{
    $pw = NULL;
}

$resultat = "";
if (isset($_POST['pseudo']) and isset($_POST['pw'])){
    if($pseudo == "stephane" and $pw == "chomolum1"){
        $_SESSION['utilisateur'] = "enseignant";
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['pw'] = $pw;
    echo "<p>Bienvenue ".$pseudo."</p>";
    }
    else{
        echo "<form action='' method='post'>";
    echo "<label for='pseudo' style='margin-left:20%; margin-bottom:5%;'>identifiant :</label>";
    echo "<input type='text' id='pseudo' name='pseudo' style='margin-left:3%; margin-bottom:5%;'><br/>";

    echo "<label for='pw' style='margin-left:20%;'>mot de passe :</label>";
    echo "<input type='password' id='pw' name='pw' style='margin-left:3%;'><br/>";
    echo "<button class='bouton' style='margin-bottom: 3%; margin-top: 5%; margin-left:20%;' type='submit' value='connexion'>&#128218; Valider</button>";
echo "</form>";
    }
    
}
else{
    echo "<form action='' method='post'>";
    echo "<label for='pseudo' style='margin-left:20%; margin-bottom:5%;'>identifiant :</label>";
    echo "<input type='text' id='pseudo' name='pseudo' style='margin-left:3%; margin-bottom:5%;'><br/>";

    echo "<label for='pw' style='margin-left:20%;'>mot de passe :</label>";
    echo "<input type='password' id='pw' name='pw' style='margin-left:3%;'><br/>";
    echo "<button class='bouton' style='margin-bottom: 3%; margin-top: 5%; margin-left:20%;' type='submit' value='connexion'>&#128218; Valider</button>";
echo "</form>";
}

?>
<!--
<p style='margin-left:20%;'><a href="">Je m'inscris...</a></p>
-->

</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
