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

$classe = NULL;

$_SESSION['chapitre'] = $_GET['chapitre'];
$chapitre = $_SESSION['chapitre'];

$nomPage = $_GET['nomPage'];

$typePage = "modelePage";

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

echo "<a href='https://www.youtube.com/channel/UCgCl1cAuhEa5RxCsV87cG4A/featured' target='_blank' style='margin-top:1%;display:flex;justify-content:flex-end;'><img src='".$prefixeAccueil."images/general/youtubetoketa1.png' alt='youtube' width=10%></a>";

echo "<section id='principal_presentation'>";
include("../".$niveau."/cours/".$chapitre."/".$nomPage.".html");

// FOOTER
/////////

echo "</section>";
include("footer.php");
echo "</body>";
echo "</html>";
?>