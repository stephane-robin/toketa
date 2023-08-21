<?php 
session_start();
$nomClasse = $_SESSION['nomClasse'];
$chapitre = NULL;
$nomPage = NULL;
$typePage = "timer";
$typeUtilisateur = $_SESSION['utilisateur'];
?>

<!-- HEAD -->
<?php include("head.php"); ?>
  
<!-- FONCTIONS JS -->
<?php include("fonctionsJS.html");  ?>

<!-- HTML -->
<!DOCTYPE HTML>
<html>

<!-- HEADER -->
<?php include("header.php"); ?>

<!-- PRINCIPAL -->
<section id="principal">
    





<!-- GRAND CONTENU -->
<section id='grandContenu'>

<!-- TIMER -->
<fieldset>
	<h3 style="color:black; margin-left:30%;">Timer</h3>

	<button class='bouton' type='button' onclick='start_timer(18)' style="margin-left:30%; margin-bottom:1%;">&#8987; 3 min</button><br/>
	<progress value="0" max="180" id="progressBar3" style="margin-left:10%; margin-bottom:2%;"></progress><br/>

	<button class='bouton' type='button' onclick='start_timer(36)' style="margin-left:30%;">&#8987; 6 min</button><br/>
	<progress value="0" max="360" id="progressBar6" style="margin-left:10%; margin-bottom:2%;"></progress><br/>

	<button class='bouton' type='button' onclick='start_timer(54)' style="margin-left:30%;">&#8987; 9 min</button> <br/>
	<progress  value="0" max="540" id="progressBar9" style="margin-left:10%; margin-bottom:2%;"></progress><br/>

	<p id="countdown" style='font-weight: bold; margin-left: 35%;'></p>

	<button class='bouton' style='margin-left: 30%;' type='submit' onclick='stop_timer()'>&#8987; Stop</button>
</fieldset>

<!-- END GRAND CONTENU -->
</section> 
<!-- END PRINCIPAL -->
</section>

<!-- FOOTER -->
<?php include("footer.php"); ?>

</body>
</html>
