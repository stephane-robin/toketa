<?php 
session_start(); 
$nomClasse = $_SESSION['nomClasse'];
$chapitre = $_SESSION['chapitre'];

if (isset($_GET['nomPage'])){
  $nomPage = $_GET['nomPage'];
}
else {
  $nomPage = NULL;
}

$typePage = "starter";
$typeUtilisateur = $_SESSION['utilisateur'];
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
src="https://cdn.mathjax.org/mathjax/latest/MathJax.js"></script>

<?php
// FUNCTIONS 
include("fonctionsPHP.php");
include("fonctionsJS.html");
?>

<!-- BODY -->
<body onload='startTime()'>

<!-- FONCTIONS JS -->
<?php  ?>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">

<!-- GRAND CONTENU -->
<section id="grandContenu">

<h3>Starter</h3>
       
<?php
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
  // TODO enregistrer réponse dans bdd
}
?>

<form style="margin-left:3%; margin-top:1%; margin-bottom:1%;" action="" method="post">

  <?php 
  $compteurQuestion = 0;
  include("../".$nomClasse."/starter/".$chapitre."/".$nomPage.".php"); 
  ?>

  <button class='bouton' style="margin-left:1%; margin-top:4%;" type='submit'>Valider</button>

 </form>

</section> <!-- end GRAND CONTENU -->
</section>  <!-- end PRINCIPAL -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
