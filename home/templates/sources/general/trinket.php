<?php
// model page for all course related pages
session_start();

$utilisateur = $_SESSION['utilisateur'];

$niveau = "";
$chapitre = "";
$page = "";

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

include("head.php"); 
include("header.php");
?>

// contenu de la page
<section class='principal'>

<h1 style='visibility:hidden;'>Toketa</h1>

<iframe src="https://trinket.io/embed/python/14ddd142a7" width="100%" height="556" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>
</section>
<?php
include("footer.php");
?>

</body>
</html>

