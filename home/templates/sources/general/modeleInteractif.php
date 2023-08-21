<?php
session_start();

// GLOBAL VARIABLES
///////////////////

if(isset($_GET['deconnexion'])){
    if ($_GET['deconnexion'] == "ok"){
        $_SESSION['utilisateur'] = "libre";
    }
}
$utilisateur = $_SESSION['utilisateur'];

$niveau = $_GET['niveau'];

$chapitre = $_GET['chapitre'];

$typePage = "interactive";

$nomPage = $_GET['nomPage'];

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

// FUNCTIONS
////////////

include("fonctionsPHP.php");
include("fonctionsJS.html");

// MAIN
///////

echo "<!DOCTYPE HTML>";
echo "<html>";
include("head.php");
echo "<body>";
include("header.php");
echo "<section id='principal'>";

// TABLE MATIERES
/////////////////

include("tableMatieres.php");

// CONTENU
//////////

echo "<section id='contenu'>";
echo "<p style='font-style:italic; text-align:end;'>Nous retrouver sur <br/><a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank'><img src='../../images/general/youtubetoketa1.png' alt='youtube' width=20%></a></p>";
include("../".$niveau."/cours/".$chapitre."/".$nomPage.".php");
echo "</section>";

// FOOTER
/////////

echo "</section>";
include("footer.php");
echo "</body>";
echo "</html>";
?>