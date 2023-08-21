<?php
// model of quizz
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

// FUNCTIONS
include("fonctionsPHP.php");
include("fonctionsJS.html");

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";

// HTML
echo "<!DOCTYPE HTML>
      <html>";
include("head.php");
echo "<body>";
include("header.php");

echo "<section id='principal'>";
echo "<h3>Quizz</h3>";

$nbrePoints = 0;

// checking the answers
if(isset($_POST['validerQuizz'])){

    // checking question 1
    if (!empty($_POST['q1'])){
        if ($_POST['q1'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 2
    if (!empty($_POST['q2'])){
        if ($_POST['q2'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 3
    if (!empty($_POST['q3'])){
        if ($_POST['q3'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 4
    if (!empty($_POST['q4'])){
        if ($_POST['q4'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 5
    if (!empty($_POST['q5'])){
        if ($_POST['q5'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 6
    if (!empty($_POST['q6'])){
        if ($_POST['q6'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 7
    if (!empty($_POST['q7'])){
        if ($_POST['q7'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 8
    if (!empty($_POST['q8'])){
        if ($_POST['q8'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 9
    if (!empty($_POST['q9'])){
        if ($_POST['q9'] == "True"){
            $nbrePoints += 1;
        }
    }

    // checking question 10
    if (!empty($_POST['q10'])){
        if ($_POST['q10'] == "True"){
            $nbrePoints += 1;
        }
    }

    /*
    for ($i=1; $i<11; $i++){
        if(isset($_POST['q'.$i])){
          if($_POST['q'.$i] == True){
            $nbrePoints += 1;
          }
        }
        else{
          $_POST['q'.$i] = False;
        }
      }
    */
    
// results
$pourcentage = round(100 * $nbrePoints / 10);
echo "<p style='margin-left:3%; color:green;'>".$pourcentage." % de réponses justes.</p>";

if ($pourcentage < 30){
    echo "<p>Vous devriez bien relire le cours avant de ré-essayer le quizz. &#128163;</p>";
}
else if ($pourcentage >= 30 and $pourcentage < 60){
    echo "<p>Continuez vos efforts et essayez d'obtenir un meilleur score... &#127916;</p>";
}
else if ($pourcentage >= 60 and $pourcentage < 80){
    echo "<p>Bien joué... Vous pouvez encore améliorer votre score. &#127937;</p>";
}
else {
    echo "<p>Félicitations &#127881;</p>";
}
}

include("../".$niveau."/".$chapitre."/".$page.".html");

echo "</section>";
include("footer.php");
echo "</body>
      </html>";
?>