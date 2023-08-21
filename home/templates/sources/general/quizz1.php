<?php
// model page for all course related pages
session_start();

$utilisateur = $_SESSION['utilisateur'];
$niveau = $_GET['niveau'];
$chapitre = $_GET['chapitre'];
$page = $_GET['page'];

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";

include("fonctionsPHP.php");
include("fonctionsJS.html");

echo "<!DOCTYPE HTML>
      <html>";
include("head.html");
echo "<body>";
include("header.php");
echo "

<section id='principal'>

<h2>Quizz</h2>

<p>Choisis un chapitre, mesure toi aux questions du test, 
et monte au niveau supérieur avec plus de 66 % de réponses justes... 
Tu pourras essayer autant de fois que tu le souhaites.</p>
";

if (isset($_GET['chapitre'])){
  $chapitre = $_GET['chapitre'];
  echo "<h3>".$chapitre."</h3>";

  echo "<p><strong>Niveau de jeu : élémentaire &#128123;</strong></p>";

  echo "<p><strong>Meilleur score : 0 %</strong></p>";

  echo "<form style='margin-left:3%; margin-top:1%; margin-bottom:1%;' action='' method='post'>";

  // checking the answers
if (isset($_POST['q1']) and isset($_POST['q2']) and isset($_POST['q3'])){
  $nbrePoints = 0;
  if ($_POST['q1'] == "True"){
    $nbrePoints += 1;
  }
  if ($_POST['q2'] == "True"){
    $nbrePoints += 1;
  }
  if ($_POST['q3'] == "True"){
  $nbrePoints += 1;
  }
  $pourcentage = round(100 * $nbrePoints / 3);
  echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>"; 
}

    $compteurQuestion = 0;

    for ($i=1; $i<7; $i++){
      include("../".$nomClasse."/starter/".$chapitre."/competence".$i.".php");
    }
  
    echo "<button class='bouton' style='margin-left:1%; margin-top:4%;' type='submit'>Valider</button>";

  echo "</form>";
}

echo "</section>";
include("footer.html");
echo "</body>
      </html>";
?>

