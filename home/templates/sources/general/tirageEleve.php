<?php 
session_start();

// GLOBAL VARIABLES

$utilisateur = $_SESSION['utilisateur'];
$niveau = Null;
$classe = $_GET['classe'];
$chapitre = Null;
$page = Null;

if (empty($_SESSION['pseudo'])){
    $_SESSION['pseudo'] = NULL;
}
$pseudo = $_SESSION['pseudo'];

if (empty($_SESSION['pw'])){
    $_SESSION['pw'] = NULL;
}
$pw = $_SESSION['pw'];


// FONCTIONS
////////////

include("fonctionsPHP.php");
include("fonctionsJS.html");


// MAIN
///////

echo "<!DOCTYPE HTML>
    <html>";
include("head.html");
echo "<body>";
include("header.php");
echo "<section id='principal'>";


// CONTENU
//////////

echo "<section id='contenu'>

<!-- NOM DE LA CLASSE -->
<!---------------------->

<h2>".afficherClasse($classe)."</h2>";

/*if (!empty($_POST['eleveChoisi'])){
    $eleveChoisi = $_POST['eleveChoisi']; 
    changer_participation_eleve($classe, $eleveChoisi, 1);
}
else {
    $eleveChoisi = choisir_eleve($classe);
}*/
if (isset($_POST['choisirEleve'])){
    $eleveChoisi = choisir_eleve($classe);
}

else if (!empty($_POST['eleveChoisi'])){
    $eleveChoisi = $_POST['eleveChoisi'];
}

if (!empty($eleveChoisi)){
    if (renvoyer_penalite_eleve($classe, $eleveChoisi) == 1) {
        changer_penalite_eleve($classe, $eleveChoisi, -1);
        echo "<p>&#128683; Désolé <strong>" . $eleveChoisi . "</strong>, pénalité ! Tu ne peux pas jouer... mais ta pénalité est effacée.</p>";
    }
    else if (renvoyer_penalite_eleve($classe, $eleveChoisi) == 2){
        echo "<p>&#128683; Désolé <strong>" . $eleveChoisi . "</strong>, pénalité ! Tu ne peux pas jouer...</p>";
    }
    else {
        echo "<p>Le(la) sélectionné(e) est ... <strong>" . $eleveChoisi . "</strong></p>";

    }
}


echo "<!-- AFFICHE L'ELEVE CHOISI -->
      <!---------------------------->

<div class='bloc_ligne'>

<!-- BOUTONS RESULTAT -->
<!---------------------->

<form method='post' action='tirageEleve.php?classe=".$classe."' style='margin-top: 5%; margin-bottom: 5%;margin-left: 20%;'>
    <input type='hidden' name='eleveChoisi' value='".$eleveChoisi."'>   
    <button class='bouton' type='submit' name='valider' value='valider'>&#128526; Correct</button>  
    <button class='bouton' type='submit' name='bonus' value='bonus'>&#127894; Bonus</button>
    <button class='bouton' type='submit' name='choisirEleve'>&#127922; Tirer au sort</button>

</form>



<!-- BOUTON RETOUR TABLEAU BORD -->
<!-------------------------------->

    <form method='post' action='pageWorkshop.php?classe=".$classe."' style='margin-top: 5%; margin-left:10%; margin-bottom:5%;'>
        <button class='bouton' type='submit' name='retour'>&#127922; Tableau de bord</button>
    </form>

</div>";

if (isset($eleveChoisi)){
    if (isset($_POST['valider'])){
        changer_note_groupe($classe, $eleveChoisi, 1);
        echo "<p>&#128165;Félicitation...</p>";
    }
    else if (isset($_POST['bonus'])){
        changer_note_groupe($classe, $eleveChoisi, 1);
        echo "<p>&#128165;Félicitation... bonus + 1 point</p>";
    }
}

echo "
<table>
    <tr><th>Equipe</th><th>Elèves</th><th>Note provisoire / 20</th></tr>";
    for($i=1; $i<13; $i++){
        echo "<tr><td>Equipe ".$i."</td><td>".renvoyer_membres_groupe($classe, $i)."</td><td>".renvoyer_note_groupe($classe, $i)."</td></tr>";
}    
echo "</table>

</section>";


// FOOTER
/////////

echo "</section>";
include("footer.html");
echo "</body>
    </html>";
?>
<!--<input type='hidden' name='eleveChoisi' value='".$eleveChoisi."'></input>-->

