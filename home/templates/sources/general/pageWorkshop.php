<?php 
session_start();

// GLOBAL VARIABLES
///////////////////

$utilisateur = $_SESSION['utilisateur'];

$niveau = NULL;
$classe = $_GET['classe'];
$chapitre = NULL;
$page = "pageWorkshop";

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

<h2 style='margin-left: 35%;'>Travail de groupe - ".afficherClasse($classe)."</h2>

<fieldset style='margin-left:1%; width:90%;'>

<h3>Tableau de bord</h3>

<table style='width:50%; border-style:hidden;'>

    <!-- BOUTON CHOISIR ELEVE PAR LE PROFESSEUR -->
    <!-------------------------------------------->
    <form method='post' action='tirageEleve.php?classe=".$classe."' >
        <tr style='border-style:hidden;'> 
            <td style='border-style:hidden;'> <input type='text' id='eleveChoisi' name='eleveChoisi' style='margin-left:3%; margin-top:1%; margin-bottom:3%;'> </td>
            <td> <button class='bouton' type='submit' name='eleve_Choisi' style='margin-left:3%; margin-top:1%; margin-bottom:3%;'>&#128191; Choisir élève</button> </td>
        </tr>
    </form>

    <!-- BOUTON TIMER -->
    <!------------------>
<tr style='border-style:hidden;'>
    <td></td>
    <td style='border-style:hidden;'> 
        <form method='post' action='timer.php' target='_blank' style='margin-left:3%; margin-top:1%; margin-bottom:3%;'>
            <button class='bouton' type='submit'>&#9749; Timer</button>
        </form>
    </td>
</tr>

    <!-- BOUTON CHOISIR ELEVE AU HASARD -->
    <!------------------------------------>
<tr>
    <td></td>
    <td style='border-style:hidden;'>
        <form method='post' action='tirageEleve.php?classe=".$classe."' style='margin-left:3%; margin-top:1%; margin-bottom:3%;'>
            <button class='bouton' type='submit' name='choisirEleve'>&#127922; Tirer au sort</button>
        </form>
    </td>
</tr>

</table> 

</fieldset>


<!-- AFFICHER LES EQUIPES -->
<!-------------------------->

<fieldset style='margin-left:1%; width:90%;'>

<h3>Equipes</h3>

<table>
    <tr><th>Equipe</th><th>Elèves</th><th>Note provisoire / 20</th></tr>";
    for($i=1; $i<13; $i++){
        echo "<tr><td>Equipe ".$i."</td><td>".renvoyer_membres_groupe($classe, $i)."</td><td>".renvoyer_note_groupe($classe, $i)."</td></tr>";
}    
echo "</table>

</fieldset>

<!-- PENALITE -->
<!-------------->

<div id='penalite' style='margin-left:1%; width:90%;'> 

    <h3>Pénalité</h3>

    <!-- Penalty button -->
    <form method='post' action='pageWorkshop.php?classe=".$classe."'>
        <input type='text' id='nom_penalite' name='nom_penalite' style='margin-left:10%;'>
        <button class='bouton' type='submit' name='record_penalite' value='record_penalite' style='margin-left:3%;'>&#128191; Enregistrer</button>
        <button class='bouton' type='submit' name='withdraw_penalite' value='withdraw_penalite' style='margin-left:2%;''>&#10060; Retirer</button>
    </form>";

    if (isset($_POST["record_penalite"])){
        changer_penalite_eleve($classe, $_POST["nom_penalite"], 1);
    }
    if (isset($_POST["withdraw_penalite"])){
        changer_penalite_eleve($classe, $_POST["nom_penalite"], -1);
    }

    echo "<!-- AFFICHE LES ELEVES AVEC PENALITE -->
          <!-------------------------------------->

    <p>&#128213; ".renvoyer_membres_penalite2($classe)."</p> 
    <p>&#128217; ".renvoyer_membres_penalite1($classe)."</p>

</div>

</section>";


// FOOTER
/////////

echo "</section>";
include("footer.html");
echo "</body>
    </html>";
?>

<!--
<script type="text/javascript">
// return a random number between min included and max not included
function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
}

function choisirEleve(){
    document.getElementById("resultat_tirage").innerHTML = "hello";
}

function choisirEleve(){
    var $choix_nbreHasard = getRndInteger(0,21);

    //var mydata = JSON.parse("bdd4eme.json");
        //console.log(mydata);
        document.getElementById("resultat_tirage").innerHTML = "hello";
        

    //alert($obj["4eme"][1].nom);
    //$nom_hasard = "nom";
    //document.getElementById("resultat_tirage").innerHTML = $choix_nbreHasard;
}

</script>
-->
