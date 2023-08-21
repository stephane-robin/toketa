<?php
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = NULL;
$nomPage = NULL;
$typePage = "challenge";
$typeUtilisateur = $_SESSION['utilisateur'];

// TIMER SESSION
$_SESSION['tempsEcoule_session'] = "";
?>

<!DOCTYPE HTML>
<html>

<!-- HEAD -->
<?php include("head.php"); ?>

<!-- mathjax -->
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    extensions: ["tex2jax.js"],
    jax: ["input/TeX", "output/HTML-CSS"],
    tex2jax: {
      inlineMath: [ ["\\(","\\)"] ],
      displayMath: [ ["\\[","\\]"] ],
      processEscapes: true
    },
    "HTML-CSS": { availableFonts: ["TeX"] }
  });
</script>
<script type="text/javascript"
src="http://cdn.mathjax.org/mathjax/latest/MathJax.js"></script>

<?php
// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>

<!-- BODY -->
<body onload='startTime()'>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- TABLE DES MATIERES -->
<?php include("tableMatieres.php"); ?>

<!-- GRAND CONTENU -->
<section id="grandContenu">

  <h3>Challenge</h3>

<p style='color:#666633;'>Mesure toi aux questions du test, et gagne des points sur ton compte personnel... Tu pourras essayer autant de fois que tu le souhaites.</p>

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="" method="post">

  <?php 
  $compteurQuestion = 0;

  for ($i=1; $i<4; $i++){
    include("../".$nomClasse."/quizz/challenge/fiche".$i.".php");
    include("../".$nomClasse."/starter/fonctions/competence".$i.".php");
  }
  ?>

  <button class='bouton' style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

</section> <!-- END GRAND CONTENU -->
</section> <!-- END PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>